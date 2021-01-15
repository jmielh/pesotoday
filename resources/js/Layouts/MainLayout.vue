<template>
    <div class=" min-h-screen">
        <div class=" h-2" style="background-color:rgb(255,255,0)"></div>
        <div class="bg-blue-900 h-3 flex items-center">
            <div class="  mx-auto flex items-center" style=" width:auto">
                <svg
                    class=" w-2 h-2 fill-current text-white"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                >
                    <path
                        d="M30.336 12.5469l-10.172-1.0742L16 2.1328l-4.164 9.3399-10.172 1.0742 7.5977 6.8476-2.121 10.004L16 24.289l8.8594 5.1093-2.1211-10.0039z"
                    />
                </svg>
                <svg
                    class=" w-2 h-2 fill-current text-white"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                >
                    <path
                        d="M30.336 12.5469l-10.172-1.0742L16 2.1328l-4.164 9.3399-10.172 1.0742 7.5977 6.8476-2.121 10.004L16 24.289l8.8594 5.1093-2.1211-10.0039z"
                    />
                </svg>
                <svg
                    class=" w-2 h-2 fill-current text-white"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                >
                    <path
                        d="M30.336 12.5469l-10.172-1.0742L16 2.1328l-4.164 9.3399-10.172 1.0742 7.5977 6.8476-2.121 10.004L16 24.289l8.8594 5.1093-2.1211-10.0039z"
                    />
                </svg>
                <svg
                    class=" w-2 h-2 fill-current text-white"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                >
                    <path
                        d="M30.336 12.5469l-10.172-1.0742L16 2.1328l-4.164 9.3399-10.172 1.0742 7.5977 6.8476-2.121 10.004L16 24.289l8.8594 5.1093-2.1211-10.0039z"
                    />
                </svg>
                <svg
                    class=" w-2 h-2 fill-current text-white"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                >
                    <path
                        d="M30.336 12.5469l-10.172-1.0742L16 2.1328l-4.164 9.3399-10.172 1.0742 7.5977 6.8476-2.121 10.004L16 24.289l8.8594 5.1093-2.1211-10.0039z"
                    />
                </svg>
                <svg
                    class=" w-2 h-2 fill-current text-white"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                >
                    <path
                        d="M30.336 12.5469l-10.172-1.0742L16 2.1328l-4.164 9.3399-10.172 1.0742 7.5977 6.8476-2.121 10.004L16 24.289l8.8594 5.1093-2.1211-10.0039z"
                    />
                </svg>
                <svg
                    class=" w-2 h-2 fill-current text-white"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                >
                    <path
                        d="M30.336 12.5469l-10.172-1.0742L16 2.1328l-4.164 9.3399-10.172 1.0742 7.5977 6.8476-2.121 10.004L16 24.289l8.8594 5.1093-2.1211-10.0039z"
                    />
                </svg>
            </div>
        </div>
        <div class=" h-2" style="background-color:rgb(255,0,0)"></div>
        <div
            style="background-image:url('/images/1x/23452352345.jpg'); height:28rem"
            class=" bg-no-repeat bg-cover bg-bottom"
        >
            <navbar-desktop></navbar-desktop>
        </div>

        <div class="-mt-64">
            <div
                class="text-3xl text-white text-center md:text-4xl font-extrabold"
            >
                La mejor plataforma de transferencia desde Chile a Venezuela.
            </div>
            <slot></slot>
        </div>
        <div class=" mt-64">
            <slot name="pagina"></slot>
        </div>
    </div>
</template>

<script>
import NavbarDesktop from "../Layouts/Navbar/Desktop";
export default {
    components: { NavbarDesktop }
};
</script>

<style></style>
