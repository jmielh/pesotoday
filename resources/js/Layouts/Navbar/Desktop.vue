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
                            src="/images/pesotoday.png"
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
                        href="/"
                        class=" px-5 hover:text-red-400"
                    >
                        Contacto
                    </a>
                    <a
                        href="/"
                        title="Histórico"
                        class=" px-5 hover:text-red-400"
                    >
                        Historial de Tasas
                    </a>
                </div>
            </div>
        </nav>
        <nav class="felx md:hidden shadow">
            <div
                class="  mx-auto flex items-center px-5 justify-between"
                style=" max-width:900px"
            >
                <img style=" max-width:150px" src="/images/pesotoday.png" />
                <div>
                    |||
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {};
</script>

<style></style>
