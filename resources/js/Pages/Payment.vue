<template>
    <div>
        <MainLayout>
            <template #pagina>
                <div
                    class=" mx-auto flex flex-col flex-wrap"
                    style="max-width:900px;margin-bottom:30rem"
                >
                    <div
                        class="px-3  flex flex-wrap items-center justify-between"
                    >
                        <div class="inline ">
                            <div
                                class="text-4xl font-extrabold border-4 rounded-full py-8 px-7 flex items-center"
                                style="color:rgb(10, 20, 110);border-color:rgb(10, 20, 110)"
                            >
                                <div>
                                    1
                                </div>
                                <svg
                                    class=" fill-current text-green-500 w-6 h-6 ml-2"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                                    />
                                </svg>
                            </div>

                            <div
                                class=" justify-center font-extrabold text-xs flex items-center"
                                style="color:rgb(10, 20, 110)"
                            >
                                Paso
                            </div>
                        </div>

                        <div class="lg:flex items-center hidden">
                            <svg
                                style="color:rgb(10, 20, 110)"
                                v-for="i in 9"
                                :key="i"
                                class="ml-3 fill-current w-12 h-12"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32"
                            >
                                <path
                                    d="M12.25 2.5938l-.7188.6875-3.5937 3.625-.6875.6875.6875.7187L15.625 16l-7.6875 7.6875-.6875.7188.6875.6874 3.5938 3.625.7187.6876.7188-.6876 12-12L25.6562 16l-.6874-.7188-12-12zm0 2.8437L22.8125 16 12.25 26.5625l-2.1875-2.1875 7.6875-7.6563.7188-.7187-.7188-.7188-7.6875-7.6562z"
                                />
                            </svg>
                        </div>
                        <div class="sm:hidden  flex items-center">
                            <svg
                                style="color:rgb(10, 20, 110)"
                                v-for="i in 3"
                                :key="i"
                                class="ml-3 fill-current w-12 h-12"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32"
                            >
                                <path
                                    d="M12.25 2.5938l-.7188.6875-3.5937 3.625-.6875.6875.6875.7187L15.625 16l-7.6875 7.6875-.6875.7188.6875.6874 3.5938 3.625.7187.6876.7188-.6876 12-12L25.6562 16l-.6874-.7188-12-12zm0 2.8437L22.8125 16 12.25 26.5625l-2.1875-2.1875 7.6875-7.6563.7188-.7187-.7188-.7188-7.6875-7.6562z"
                                />
                            </svg>
                        </div>
                        <div class="md:hidden hidden  sm:flex items-center">
                            <svg
                                style="color:rgb(10, 20, 110)"
                                v-for="i in 4"
                                :key="i"
                                class="ml-3 fill-current  w-12 h-12"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32"
                            >
                                <path
                                    d="M12.25 2.5938l-.7188.6875-3.5937 3.625-.6875.6875.6875.7187L15.625 16l-7.6875 7.6875-.6875.7188.6875.6874 3.5938 3.625.7187.6876.7188-.6876 12-12L25.6562 16l-.6874-.7188-12-12zm0 2.8437L22.8125 16 12.25 26.5625l-2.1875-2.1875 7.6875-7.6563.7188-.7187-.7188-.7188-7.6875-7.6562z"
                                />
                            </svg>
                        </div>
                        <div class="  md:flex lg:hidden items-center hidden">
                            <svg
                                style="color:rgb(10, 20, 110)"
                                v-for="i in 5"
                                :key="i"
                                class="ml-3 fill-current  w-12 h-12"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32"
                            >
                                <path
                                    d="M12.25 2.5938l-.7188.6875-3.5937 3.625-.6875.6875.6875.7187L15.625 16l-7.6875 7.6875-.6875.7188.6875.6874 3.5938 3.625.7187.6876.7188-.6876 12-12L25.6562 16l-.6874-.7188-12-12zm0 2.8437L22.8125 16 12.25 26.5625l-2.1875-2.1875 7.6875-7.6563.7188-.7187-.7188-.7188-7.6875-7.6562z"
                                />
                            </svg>
                        </div>
                        <div class="inline ">
                            <div
                                style="color:rgb(10, 20, 110);border-color:rgb(10,20,110)"
                                class="text-4xl font-extrabold border-4  rounded-full py-8 px-10"
                            >
                                2
                            </div>

                            <div
                                class="text-gray-400 text-center font-extrabold text-xs"
                            >
                                Final
                            </div>
                        </div>
                    </div>
                    <div class="text-justify mt-10  p-10 bg-yellow-100">
                        Tu transacción ha sido iniciada, por favor
                        <span class="text-red-600 font-semibold">
                            sube tu comprobante de pago
                        </span>
                        para proceder con el traspaso de fondos.
                        <span class="text-red-600 font-semibold">
                            Tienes 60 minutos</span
                        >, de otra forma la transacción será cancelada
                        automáticamente. ¿Tienes alguna duda?
                        <a
                            href="mailto:contacto@pesotoday.cl"
                            class=" text-blue-600"
                            >contáctanos.</a
                        >
                    </div>
                    <!--  Timer Component  -->
                    <div class="flex justify-center mt-10">
                        <Timer
                            :starttime="transferCreation"
                            :endtime="getFinalTime"
                            :trans="{
                                day: 'Day',
                                hours: 'Hours',
                                minutes: '',
                                seconds: '',
                                expired: 'La transacción ha expirado.',
                                running: 'Hasta que expire la transacción.',
                                upcoming: 'Till start of event.',
                                status: {
                                    expired:
                                        'Expirada, vuelve a intentarlo por favor.',
                                    running:
                                        'Estado: A la espera del comprobante de pago o depósito',
                                    upcoming: 'Future'
                                }
                            }"
                        ></Timer>
                    </div>
                    <!--  End! Timer Component  -->
                    <div class="px-3 mt-10">
                        <div class=" border rounded-lg shadow-lg">
                            <div
                                class=" bg-blue-400  text-lg md:text-2xl rounded-t-lg font-extrabold text-center uppercase"
                                style="color:#989BB2; background-color:#e1ecf7"
                            >
                                Realiza el pago en alguna cuenta de pesotoday
                            </div>
                            <div
                                class="ml-10 mt-4 text-lg font-extrabold md:text-2xl"
                            >
                                Monto a transferir: {{ order.amount_clp }}
                            </div>
                            <div class=" flex flex-wrap mt-5 px-10 pb-5">
                                <div class="w-1/2 md:w-1/3">
                                    <div
                                        class="text-lg md:text-3xl text-blue-500 font-extrabold"
                                    >
                                        Banco de Chile
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        Pesotoday Spa
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        76.621.676-5
                                    </div>

                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        Cuenta corriente 1013744601
                                    </div>
                                </div>
                                <div class="w-1/2 md:w-1/3">
                                    <div
                                        class="text-lg md:text-3xl text-blue-500 font-extrabold"
                                    >
                                        Cuentarut
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        Jorge Merino
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        17790589-5
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <svg
                            class=" mx-auto"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                        >
                            <path
                                d="M12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 12c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"
                            />
                        </svg>
                    </div>
                    <div class="px-3 md:mt-5">
                        <div class=" border rounded-lg shadow-lg">
                            <div
                                class=" bg-blue-400  text-lg md:text-2xl rounded-t-lg font-extrabold text-center uppercase"
                                style="color:#989BB2; background-color:#e1ecf7"
                            >
                                Transferencia en curso
                            </div>

                            <div class=" flex flex-wrap mt-5 px-10 pb-5">
                                <div class=" w-1/3">
                                    <div
                                        class="text-lg md:text-3xl text-blue-500 font-extrabold"
                                    >
                                        Origen
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        {{ user.name }}
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        {{ user.phone }}
                                    </div>
                                </div>
                                <div
                                    class="hidden md:flex items-center w-1/3 px-5"
                                >
                                    <svg
                                        class=" w-20 mx-auto fill-current text-green-400"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32"
                                    >
                                        <path
                                            d="M22.1875 2.2813l-1.4063 1.4375L25.0626 8H4v2h21.0625l-4.2813 4.2813 1.4063 1.4375L28.9063 9zm-12.375 14L3.0937 23l6.7188 6.7188 1.4063-1.4376L6.9375 24H28v-2H6.9375l4.2813-4.2813z"
                                        />
                                    </svg>
                                </div>
                                <div
                                    class="md:hidden flex items-center w-1/4 px-5"
                                >
                                    <svg
                                        class=" w-8 mx-auto fill-current text-green-400"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 32 32"
                                    >
                                        <path
                                            d="M22.1875 2.2813l-1.4063 1.4375L25.0626 8H4v2h21.0625l-4.2813 4.2813 1.4063 1.4375L28.9063 9zm-12.375 14L3.0937 23l6.7188 6.7188 1.4063-1.4376L6.9375 24H28v-2H6.9375l4.2813-4.2813z"
                                        />
                                    </svg>
                                </div>
                                <div class=" flex-1">
                                    <div
                                        class="text-lg md:text-3xl text-blue-500 font-extrabold"
                                    >
                                        Destino
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        {{ receipt.name }}
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        {{ receipt.r_id }}
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        {{ receipt.bank }}
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        {{ receipt.account_type }}
                                    </div>
                                    <div
                                        class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                    >
                                        {{ receipt.r_id }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="text-xl px-3 md:text-3xl text-center font-extrabold mt-10"
                        style="color:rgb(10, 20, 110)"
                    >
                        Sube tu comprobante de pago o depósito
                    </div>

                    <form
                        action="/payment/check"
                        method="POST"
                        enctype="multipart/form-data"
                        class="text-center justify-center mt-5"
                    >
                        <div class="input-file-container mx-auto">
                            <input
                                class="input-file"
                                id="my-file"
                                type="file"
                                name="comprobante"
                            />
                            <input type="hidden" :value="token" name="_token" />
                            <input
                                type="hidden"
                                :value="order.id"
                                name="order_id"
                            />
                            <label
                                tabindex="0"
                                for="my-file"
                                class="input-file-trigger"
                                >Seleccionar comprobante</label
                            >
                        </div>
                        <p class="file-return"></p>
                        <button
                            type="submit"
                            class=" mt-10 flex mx-auto px-10 py-4 items-center bg-blue-900 hover:bg-blue-700 text-white"
                        >
                            <div>Enviar comprobante</div>
                            <svg
                                class=" stroke-current"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"
                                />
                            </svg>
                        </button>
                    </form>
                </div>
            </template>
        </MainLayout>
    </div>
</template>

<script>
import Timer from "../Shared/Timer";
import MainLayout from "@/Layouts/MainLayout";

export default {
    props: ["user", "receipt", "order"],
    components: { MainLayout, Timer },
    data: () => ({
        send: 10000,
        tasa: 1762.6,
        token: document.getElementsByTagName("meta")["csrf-token"].content
    }),
    computed: {
        getBs() {
            const total = this.tasa * this.send;
            return new Intl.NumberFormat("de-DE", {
                style: "currency",
                currency: "VES"
            }).format(total);
        },
        transferCreation() {
            return new Date(this.order.created_at).getTime();
        },
        getFinalTime() {
            const newDate = new Date(this.order.created_at);
            return newDate.setHours(newDate.getHours() + 1);
        }
    },
    mounted() {
        this.fileUpload();
    },
    methods: {
        fileUpload() {
            document.querySelector("html").classList.add("js");

            var fileInput = document.querySelector(".input-file"),
                button = document.querySelector(".input-file-trigger"),
                the_return = document.querySelector(".file-return");

            button.addEventListener("keydown", function(event) {
                if (event.keyCode == 13 || event.keyCode == 32) {
                    fileInput.focus();
                }
            });
            button.addEventListener("click", function(event) {
                fileInput.focus();
                return false;
            });
            fileInput.addEventListener("change", function(event) {
                the_return.innerHTML = this.value;
            });
        },
        newDate() {}
    }
};
</script>

<style>
.input-file-container {
    position: relative;
    width: 225px;
}
.js .input-file-trigger {
    display: block;
    padding: 14px 15px;
    background: #05a32d;
    color: white;
    font-size: 1em;
    transition: all 0.4s;
    cursor: pointer;
}
.js .input-file {
    position: absolute;
    top: 0;
    left: 0;
    width: 225px;
    opacity: 0;
    padding: 14px 0;
    cursor: pointer;
}
.js .input-file:hover + .input-file-trigger,
.js .input-file:focus + .input-file-trigger,
.js .input-file-trigger:hover,
.js .input-file-trigger:focus {
    background: #34495e;
    color: #39d2b4;
}

.file-return {
    margin: 0;
}
.file-return:not(:empty) {
    margin: 1em 0;
}
.js .file-return {
    font-style: italic;
    font-size: 0.9em;
    font-weight: bold;
}
.js .file-return:not(:empty):before {
    content: "Archivo seleccionado: ";
    font-style: normal;
    font-weight: normal;
}
</style>
