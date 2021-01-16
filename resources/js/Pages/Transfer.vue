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
                                class="text-4xl font-extrabold border-4 rounded-full py-8 px-10"
                                style="color:rgb(10, 20, 110);border-color:rgb(10, 20, 110)"
                            >
                                1
                            </div>

                            <div
                                class=" text-center font-extrabold text-xs"
                                style="color:rgb(10, 20, 110)"
                            >
                                Paso
                            </div>
                        </div>

                        <div class="lg:flex items-center hidden">
                            <svg
                                v-for="i in 9"
                                :key="i"
                                class="ml-3 fill-current text-gray-400 w-12 h-12"
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
                                v-for="i in 2"
                                :key="i"
                                class="ml-3 fill-current text-gray-400 w-12 h-12"
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
                                v-for="i in 4"
                                :key="i"
                                class="ml-3 fill-current text-gray-400 w-12 h-12"
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
                                v-for="i in 5"
                                :key="i"
                                class="ml-3 fill-current text-gray-400 w-12 h-12"
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
                                class="text-4xl font-extrabold border-4 text-gray-400 border-gray-400 rounded-full py-8 px-10"
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

                    <div
                        class=" mt-20 flex items-center bg-gray-100 rounded-lg py-5 shadow-lg"
                    >
                        <div class=" w-1/3">
                            <svg
                                class="mx-auto w-20 md:w-48 fill-current text-blue-500"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"
                            >
                                <path
                                    d="M528 32H48C21.5 32 0 53.5 0 80v16h576V80c0-26.5-21.5-48-48-48zM0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V128H0v304zm352-232c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zM176 192c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM67.1 396.2C75.5 370.5 99.6 352 128 352h8.2c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h8.2c28.4 0 52.5 18.5 60.9 44.2 3.2 9.9-5.2 19.8-15.6 19.8H82.7c-10.4 0-18.8-10-15.6-19.8z"
                                />
                            </svg>
                            <div class=" mt-5 uppercase text-center">
                                Envías
                            </div>
                            <div
                                class="  font-extrabold text-xl md:text-2xl text-center"
                            >
                                {{ order.amount_clp }}
                            </div>
                        </div>
                        <div class=" w-1/5">
                            <svg
                                class=" md:w-20 w-10 fill-current text-green-500 mx-auto"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 32 32"
                            >
                                <path
                                    d="M21.1875 9.2813l-1.4063 1.4375L24.0626 15H4v2h20.0625l-4.2813 4.2813 1.4063 1.4374L27.9063 16z"
                                />
                            </svg>
                        </div>
                        <div class=" flex-1">
                            <svg
                                class=" mx-auto w-20 md:w-48 fill-current text-green-500"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512"
                            >
                                <path
                                    d="M528 32H48C21.5 32 0 53.5 0 80v16h576V80c0-26.5-21.5-48-48-48zM0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V128H0v304zm352-232c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zm0 64c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16c0 4.4-3.6 8-8 8H360c-4.4 0-8-3.6-8-8v-16zM176 192c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM67.1 396.2C75.5 370.5 99.6 352 128 352h8.2c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h8.2c28.4 0 52.5 18.5 60.9 44.2 3.2 9.9-5.2 19.8-15.6 19.8H82.7c-10.4 0-18.8-10-15.6-19.8z"
                                />
                            </svg>
                            <div class=" mt-5 uppercase text-center">
                                Recibe
                            </div>
                            <div
                                class="  font-extrabold text-xl md:text-2xl text-center"
                            >
                                {{ order.amount_ves }}
                            </div>
                        </div>
                    </div>

                    <!-- Comienza el formulario -->
                    <form action="/payment" class="px-3 mt-20" method="post">
                        <input type="hidden" name="_token" :value="token" />
                        <input type="hidden" name="send" :value="send" />
                        <input type="hidden" name="order" :value="order.id" />
                        <div>
                            <div
                                class=" text-3xl font-extrabold"
                                style="color:rgb(10, 20, 110)"
                            >
                                ¿Quién envía?
                            </div>
                            <div class=" mt-3">
                                <div class="font-bold">Nombre completo</div>
                                <input
                                    required
                                    name="s_name"
                                    placeholder="Nombre"
                                    type="text"
                                    class=" px-4 w-full flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                                />
                            </div>
                            <div class=" mt-3">
                                <div class="font-bold">Email</div>
                                <input
                                    required
                                    name="s_email"
                                    placeholder="Email"
                                    type="email"
                                    class=" px-4 w-full flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                                />
                            </div>
                            <div class=" mt-3">
                                <div class="font-bold">
                                    Teléfono de contacto
                                </div>
                                <input
                                    required
                                    name="s_phone"
                                    placeholder="Teléfono"
                                    type="text"
                                    class=" px-4 w-full flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                                />
                            </div>
                        </div>
                        <div class=" mt-10">
                            <div
                                class=" text-3xl font-extrabold "
                                style="color:rgb(10, 20, 110)"
                            >
                                ¿Quién recibe?
                            </div>
                            <div class=" mt-3">
                                <div class="font-bold">Nombre completo</div>
                                <input
                                    required
                                    name="r_name"
                                    placeholder="Nombre"
                                    type="text"
                                    class=" px-4 w-full flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                                />
                            </div>
                            <div class=" mt-3">
                                <div class="font-bold">Email</div>
                                <input
                                    required
                                    name="r_email"
                                    placeholder="Email"
                                    type="email"
                                    class=" px-4 w-full flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                                />
                            </div>
                            <div class=" mt-3">
                                <div class="font-bold">Cédula de identidad</div>
                                <input
                                    required
                                    name="r_id"
                                    placeholder="V12345678 ó E4578654"
                                    type="text"
                                    class=" px-4 w-full flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                                />
                            </div>
                            <div class=" mt-3">
                                <div class="font-bold">Banco</div>
                                <select
                                    required
                                    name="r_bank"
                                    class=" px-4 w-full flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                                >
                                    <option value="">Selecciona</option>
                                    ><option value="Banplus">Banplus</option
                                    ><option value="Banco del Sur"
                                        >Banco del Sur</option
                                    ><option value="Banco Caroní"
                                        >Banco Caroní</option
                                    ><option value="Banco Venezolano de Crédito"
                                        >Banco Venezolano de Crédito</option
                                    ><option value="Banco de Venezuela"
                                        >Banco de Venezuela</option
                                    ><option value="Banco Provincial"
                                        >Banco Provincial</option
                                    ><option value="Banco del Tesoro"
                                        >Banco del Tesoro</option
                                    ><option value="Banco Activo"
                                        >Banco Activo</option
                                    ><option value="Banco Nacional de Crédito"
                                        >Banco Nacional de Crédito</option
                                    ><option value="Banco Mercantil"
                                        >Banco Mercantil</option
                                    ><option value="Banesco">Banesco</option
                                    ><option value="Bancaribe">Bancaribe</option
                                    ><option value="Banco Fondo Común"
                                        >Banco Fondo Común</option
                                    ><option value="Banco Sofitasa"
                                        >Banco Sofitasa</option
                                    ><option value="BOD">BOD</option
                                    ><option value="Banco Exterior"
                                        >Banco Exterior</option
                                    ><option value="Banco Bicentenario"
                                        >Banco Bicentenario</option
                                    >
                                </select>
                            </div>
                            <div class=" mt-3">
                                <div class="font-bold">Tipo de cuenta</div>
                                <select
                                    required
                                    name="r_account_type"
                                    class=" px-4 w-full flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                                >
                                    <option value="">Selecciona</option>
                                    <option value="Ahorro">Ahorro</option>
                                    <option value="Cuenta corriente"
                                        >Cuenta Corriente</option
                                    >
                                </select>
                            </div>
                            <div class=" mt-3">
                                <div class="font-bold">Número de cuenta</div>
                                <input
                                    required
                                    name="r_account_number"
                                    type="text"
                                    class=" px-4 w-full flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                                />
                            </div>
                            <div class="mt-6 text-center">
                                <button
                                    type="submit"
                                    class=" px-5 py-3 text-white text-xl font-bold uppercase    "
                                    style="background-color:rgb(10, 20, 110)"
                                >
                                    Ir al paso final
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </template>
        </MainLayout>
        <!-- <div class=" fixed bottom-0 left-0">
            <div
                :class="showTransfer == false ? null : 'pb-20'"
                class="w-auto ml-3 border rounded-lg shadow-xl bg-white"
            >
                <div
                    :class="showTransfer ? null : 'w-48'"
                    class="bg-blue-100 font-extrabold text-sm py-2 px-3 uppercase text-center flex justify-between items-center"
                >
                    <div>
                        Transferencia
                    </div>
                    <div
                        v-if="showTransfer == true"
                        @click="showTransfer = false"
                        class="p-2 border border-gray-700 rounded hover:bg-gray-200 cursor-pointer"
                    >
                        <svg
                            class=" w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <path
                                d="M464 352H48c-26.5 0-48 21.5-48 48v32c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-32c0-26.5-21.5-48-48-48z"
                            />
                        </svg>
                    </div>
                    <div
                        v-if="showTransfer == false"
                        @click="showTransfer = true"
                        class="p-2 border border-gray-700 rounded hover:bg-gray-200 cursor-pointer"
                    >
                        <svg
                            class="w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <path
                                d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 394c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V192h416v234z"
                            />
                        </svg>
                    </div>
                </div>
                <div v-if="showTransfer == true">
                    <div class="mt-5 px-3 text-xs flex items-center">
                        <div>
                            Resumen de transferencia
                        </div>
                    </div>
                    <div class=" mt-5 px-3">
                        <div class=" font-extrabold text-sm">
                            Envías
                        </div>
                        <div class=" flex items-center">
                            <div
                                class=" px-4 flex-1 items-center border-gray-500 rounded-lg  py-3 text-2xl font-bold flex"
                            >
                                <img
                                    class=" rounded-full border"
                                    style="height:2rem"
                                    src="/images/2170OQc6NoL._AC_.jpg"
                                />
                            </div>
                            <currency-input
                                class=" px-4 flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                                v-model="send"
                            />
                        </div>
                    </div>
                    <div class=" mt-5 px-3">
                        <div class=" font-extrabold text-sm">
                            Recibes
                        </div>
                        <div class=" flex items-center">
                            <div
                                class=" px-4  items-center border-gray-500 rounded-lg  py-3 text-2xl font-bold flex"
                            >
                                <img
                                    class=" rounded-full border"
                                    style="height:2rem"
                                    src="/images/2170OQc6NoL._ACV_.jpg"
                                />
                            </div>
                            <div
                                class="    border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                            >
                                {{ getBs }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";
export default {
    props: ["order"],
    components: { MainLayout },
    data: () => ({
        tasa: "",
        token: document.getElementsByTagName("meta")["csrf-token"].content,
        showTransfer: true
    }),
    mounted() {
        this.tasa = this.$page.props.tasa.valor;
    }
};
</script>

<style></style>
