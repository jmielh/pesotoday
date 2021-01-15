<template>
    <div>
        <!-- <div class="day">
            <span class="number">{{ days }}</span>
            <div class="format">{{ wordString.day }}</div>
        </div> -->
        <!-- <div class="hour">
            <span class="number">{{ hours }}</span>
            <div class="format">{{ wordString.hours }}</div>
        </div> -->
        <div class="flex items-center text-center justify-center">
            <div class=" text-center">
                <span
                    class="px-10 underline text-6xl font-extrabold"
                    style="color:rgb(10, 20, 110)"
                    >{{ minutes }}</span
                >
                <div
                    class=" text-4xl font-extrabold"
                    style="color:rgb(10, 20, 110)"
                >
                    {{ wordString.minutes }}
                </div>
            </div>
            <div
                class=" text-6xl font-extrabold"
                style="color:rgb(10, 20, 110)"
            >
                :
            </div>
            <div class="px-10 text-center ">
                <span
                    class=" underline text-6xl font-extrabold"
                    style="color:rgb(10, 20, 110)"
                    >{{ seconds }}</span
                >
                <div
                    class=" text-4xl font-extrabold"
                    style="color:rgb(10, 20, 110)"
                >
                    {{ wordString.seconds }}
                </div>
            </div>
        </div>
        <div class=" text-center mt-5">{{ message }}</div>
        <div>{{ statusText }}</div>
    </div>
</template>
<script>
export default {
    props: ["starttime", "endtime", "trans"],
    data: function() {
        return {
            timer: "",
            wordString: {},
            start: "",
            end: "",
            interval: "",
            days: "",
            minutes: "",
            hours: "",
            seconds: "",
            message: "",
            statusType: "",
            statusText: ""
        };
    },
    created: function() {
        console.log(this.trans);
        this.wordString = this.trans;
    },
    mounted() {
        this.start = new Date(this.starttime).getTime();
        this.end = new Date(this.endtime).getTime();
        //Update the count down every 1 second
        this.timerCount(this.start, this.end);
        this.interval = setInterval(() => {
            this.timerCount(this.start, this.end);
        }, 1000);
    },
    methods: {
        timerCount: function(start, end) {
            // Get todays date and time
            var now = new Date().getTime(); // Find the distance between now an the count down date
            var distance = start - now;
            var passTime = end - now;
            if (distance < 0 && passTime < 0) {
                this.message = this.wordString.expired;
                this.statusType = "expired";
                this.statusText = this.wordString.status.expired;
                clearInterval(this.interval);
                return;
            } else if (distance < 0 && passTime > 0) {
                this.calcTime(passTime);
                this.message = this.wordString.running;
                this.statusType = "running";
                this.statusText = this.wordString.status.running;
            } else if (distance > 0 && passTime > 0) {
                this.calcTime(distance);
                this.message = this.wordString.upcoming;
                this.statusType = "upcoming";
                this.statusText = this.wordString.status.upcoming;
            }
        },
        calcTime: function(dist) {
            // Time calculations for days, hours, minutes and seconds
            this.days = Math.floor(dist / (1000 * 60 * 60 * 24));
            this.hours = Math.floor(
                (dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            this.minutes = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
            this.seconds = Math.floor((dist % (1000 * 60)) / 1000);
        }
    }
};
</script>
<style></style>
