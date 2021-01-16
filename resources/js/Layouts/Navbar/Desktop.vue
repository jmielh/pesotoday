<template>
    <div>
        <nav class="hidden md:flex shadow">
            <div
                class="mx-auto flex justify-between items-center px-5 text-white uppercase text-sm font-extrabold"
                style="width:990px"
            >
                <div>
                    <a href="/"
                        ><img
                            style=" max-width:150px"
                            src="/images/bolivartoday.png"
                    /></a>
                </div>
                <div class="flex items-center">
                    <a
                        href="/"
                        title="Volver a Inicio"
                        class=" px-5 hover:text-red-400"
                    >
                        Inicio
                    </a>
                    <a
                        title="Contáctanos"
                        target="_blank"
                        href="https://wa.me/56972429833?text=Hola,%20quisiera%20hacer%20una%20transferencia.%20"
                        class=" px-5 hover:text-red-400"
                    >
                        Contacto
                    </a>
                    <a
                        v-if="!$page.props.user"
                        href="/login"
                        title="Histórico"
                        class=" px-5 hover:text-red-400"
                    >
                        Inicia sesión
                    </a>
                    <div
                        v-if="$page.props.user"
                        class="hidden sm:flex sm:items-center sm:ml-6"
                    >
                        <!-- Settings Dropdown -->
                        <div class="ml-3 relative">
                            <jet-dropdown align="right" width="48">
                                <template #trigger>
                                    <button
                                        v-if="
                                            $page.props.jetstream
                                                .managesProfilePhotos
                                        "
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out"
                                    >
                                        <img
                                            class="h-8 w-8 rounded-full object-cover"
                                            :src="
                                                $page.props.user
                                                    .profile_photo_url
                                            "
                                            :alt="$page.props.user.name"
                                        />
                                    </button>

                                    <span v-else class="inline-flex rounded-md">
                                        <button
                                            type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4  rounded-md uppercase font-extrabold text-white hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                        >
                                            {{ $page.props.user.name }}

                                            <svg
                                                class="ml-2 -mr-0.5 h-4 w-4"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </button>
                                    </span>
                                </template>

                                <template #content>
                                    <!-- Account Management -->
                                    <div
                                        class="block px-4 py-2 text-xs text-gray-400"
                                    >
                                        Administrar cuenta
                                    </div>
                                    <jet-dropdown-link
                                        :href="route('dashboard')"
                                    >
                                        Mi cuenta
                                    </jet-dropdown-link>

                                    <jet-dropdown-link
                                        :href="route('profile.show')"
                                    >
                                        Perfil
                                    </jet-dropdown-link>

                                    <jet-dropdown-link
                                        :href="route('api-tokens.index')"
                                        v-if="
                                            $page.props.jetstream.hasApiFeatures
                                        "
                                    >
                                        API Tokens
                                    </jet-dropdown-link>

                                    <div class="border-t border-gray-100"></div>

                                    <!-- Authentication -->
                                    <form @submit.prevent="logout">
                                        <jet-dropdown-link as="button">
                                            Salir
                                        </jet-dropdown-link>
                                    </form>
                                </template>
                            </jet-dropdown>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="felx md:hidden shadow">
            <div
                class="  mx-auto flex items-center px-5 justify-between"
                style=" max-width:900px"
            >
                <img style=" max-width:150px" src="/images/bolivartoday.png" />
                <div>
                    |||
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import JetDropdown from "@/Jetstream/Dropdown";
import JetDropdownLink from "@/Jetstream/DropdownLink";
export default {
    components: { JetDropdown, JetDropdownLink },
    methods: {
        logout() {
            this.$inertia.post(route("logout"));
        }
    }
};
</script>

<style></style>
