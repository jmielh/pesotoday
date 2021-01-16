<template>
    <app-layout>
        <template #header>
            <h2
                class="font-semibold text-xl text-gray-800 leading-tight"
                style="color:rgb(10, 20, 110)"
            >
                Historial de transferencias
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white pb-5 overflow-hidden shadow-xl sm:rounded-lg"
                >
                    <div
                        class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8"
                    >
                        <div
                            class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg"
                        >
                            <div class=" p-10 bg-yellow-200">
                                El detalle entregado en esta transacción podría
                                contener
                                <span class=" text-red-500"
                                    >un desfase de hasta 24hrs.</span
                                >
                                Si notas algún problema, por favor
                                <a
                                    class=" text-blue-600 underline"
                                    href="mailto:contacto@pesotoday.cl"
                                    >comunícate</a
                                >
                                con nosotros.
                            </div>
                            <div class="px-3 mt-5">
                                <div class=" border rounded-lg shadow-lg">
                                    <div
                                        class=" bg-blue-400  text-lg md:text-2xl rounded-t-lg font-extrabold uppercase"
                                        style="color:#989BB2; background-color:#e1ecf7"
                                    >
                                        <span class="ml-2">
                                            Enviaste:
                                            {{ order.amount_clp }}
                                        </span>
                                        <span class="ml-2">
                                            Reciben:
                                            {{ order.amount_ves }}
                                        </span>
                                        <span class="ml-3">
                                            {{
                                                new Date(
                                                    order.created_at
                                                ).toLocaleDateString("es", {
                                                    month: "short",
                                                    day: "numeric",
                                                    year: "numeric",
                                                    hour: "numeric",
                                                    minute: "numeric"
                                                })
                                            }}
                                        </span>
                                    </div>
                                    <div
                                        class=" flex flex-wrap mt-5 px-10 pb-5"
                                    >
                                        <div class=" w-1/3">
                                            <div
                                                class="text-lg md:text-3xl text-blue-500 font-extrabold"
                                            >
                                                Origen
                                            </div>
                                            <div
                                                class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                            >
                                                {{ $page.props.user.name }}
                                            </div>
                                            <div
                                                class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                            >
                                                {{ $page.props.user.phone }}
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
                                                {{ order.receipt.name }}
                                            </div>
                                            <div
                                                class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                            >
                                                {{ order.receipt.r_id }}
                                            </div>
                                            <div
                                                class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                            >
                                                {{ order.receipt.bank }}
                                            </div>
                                            <div
                                                class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                            >
                                                {{ order.receipt.account_type }}
                                            </div>
                                            <div
                                                class=" text-gray-800 font-light sm:text-lg md:text-2xl"
                                            >
                                                {{ order.receipt.r_id }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="justify-center text-center mt-5 ">
                                <a
                                    href="/"
                                    class=" uppercase text-white px-5 py-3 font-bold"
                                    style="background-color:rgb(10, 20, 110)"
                                    >Volver a transferir</a
                                >
                            </div>
                            <div
                                class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans"
                            >
                                <!-- <div>
                                    <nav
                                        class="relative z-0 inline-flex shadow-sm"
                                    >
                                        <div>
                                            <a
                                                href="#"
                                                class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                                aria-label="Previous"
                                                v-on:click.prevent="
                                                    changePage(
                                                        pagination.current_page -
                                                            1
                                                    )
                                                "
                                            >
                                                <svg
                                                    class="h-5 w-5"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </a>
                                        </div>
                                        <div>
                                            <a
                                                href="#"
                                                class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary"
                                            >
                                                1
                                            </a>
                                            <a
                                                href="#"
                                                class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary"
                                            >
                                                2
                                            </a>
                                            <a
                                                href="#"
                                                class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary"
                                            >
                                                3
                                            </a>
                                        </div>
                                        <div
                                            v-if="
                                                pagination.current_page <
                                                    pagination.last_page
                                            "
                                        >
                                            <a
                                                href="#"
                                                class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150"
                                                aria-label="Next"
                                            >
                                                <svg
                                                    class="h-5 w-5"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </a>
                                        </div>
                                    </nav>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    props: ["order"],
    components: {
        AppLayout
    }
};
</script>
