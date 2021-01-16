<template>
    <div class=" mt-64 text-center">
        <div class=" text-3xl font-extrabold">
            Tasa actual: {{ $page.props.tasa.valor }}
        </div>

        <div class=" text-3xl">
            Actualizar Tasa
        </div>
        <div class=" container mx-auto mt-10 flex justify-center items-center">
            <input
                v-model="tasa"
                name="tasa"
                class=" px-5 py-3 border-4 border-gray-600 rounded-lg text-xl"
                placeholder="ej: 1750"
            />
            <button
                @click="updateTasa()"
                class=" bg-blue-900 text-white uppercase ml-3 px-5 py-2 rounded hover:bg-blue-700"
            >
                Actualizar
            </button>
        </div>
        <div class=" text-xl">{{ response }}</div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";
export default {
    layout: MainLayout,
    data() {
        return {
            tasa: "",
            response: ""
        };
    },
    components: {
        MainLayout
    },
    methods: {
        updateTasa() {
            axios
                .post("/updatetasa", {
                    tasa: this.tasa
                })
                .then(res => {
                    console.log(res.status);
                    res.status == 200
                        ? (this.response = "Actualización exitosa")
                        : (this.response =
                              "Ocurrió un problema en la actualización");
                })
                .catch(err => {
                    console.log(err);
                    this.response = "Ocurrió un problema en la actualización";
                });
        }
    }
};
</script>

<style></style>
