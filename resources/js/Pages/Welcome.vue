<template>
    <div class=" mx-auto mt-20 bg-white rounded" style=" max-width:1200px">
        <!-- <div class=" flex items-center">
            <div class=" font-extrabold">
                Tasa del día:
            </div>
            <div class="text-4xl font-extrabold" style="color:rgb(10, 20, 110)">
                {{ Math.trunc(parseFloat(1700)).toLocaleString("de") }}
            </div>
        </div> -->
        <div class=" border  rounded-lg shadow-lg">
            <div class=" flex items-center font-bold text-blue-400">
                <div class="bg-white px-10 py-4 hidden md:block">
                    Transferir
                </div>

                <div class="flex flex-1 items-center bg-blue-100 bg-opacity-30">
                    <div class="px-10 py-4">
                        <div>
                            <span class="text-gray-800 md:text-base text-xs"
                                >Tasa del día:</span
                            >
                            <span
                                style="color:rgb(10, 20, 110)"
                                class=" text-2xl"
                                >{{ tasa }}</span
                            >
                        </div>
                        <div class=" text-sm">
                            14/01/2021
                        </div>
                    </div>
                    <div class="px-10 py-4">
                        <span class="text-gray-800 text-xs md:text-base"
                            >Actualizada a las 14horas.</span
                        >
                    </div>
                </div>
            </div>

            <form action="/transfer" method="post" class="flex items-end p-10">
                <input type="hidden" :value="token" name="_token" />
                <div class="    grid gap-10 grid-cols-1 md:grid-cols-3">
                    <div class=" flex flex-col">
                        <div class=" text-lg mb-2 font-extrabold">Cantidad</div>

                        <currency-input
                            name="send"
                            class=" px-4 flex-1  border-2 border-gray-500 rounded-lg  py-3 text-2xl font-bold"
                            v-model="send"
                        />
                    </div>
                    <div class=" flex flex-col">
                        <div class=" text-lg mb-2 font-extrabold">Desde</div>

                        <div
                            class=" px-4 border-2 flex-1 items-center border-gray-500 rounded-lg  py-3 text-2xl font-bold flex"
                        >
                            <img
                                class=" rounded-full border"
                                style="height:2rem"
                                src="/images/2170OQc6NoL._AC_.jpg"
                            />
                            <div class=" ml-3">
                                <div>
                                    CLP
                                </div>
                                <div class=" text-xs font-normal">
                                    Peso Chileno
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" flex flex-col">
                        <div class=" text-lg mb-2 font-extrabold">Hacia</div>
                        <div
                            class=" px-4 border-2 flex-1 items-center border-gray-500 rounded-lg  py-3 text-2xl font-bold flex"
                        >
                            <img
                                class=" rounded-full border"
                                style="height:2rem"
                                src="/images/2170OQc6NoL._ACV_.jpg"
                            />
                            <div class=" ml-3">
                                <div>
                                    VES
                                </div>
                                <div class=" text-xs font-normal">
                                    Bolívares
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    type="submit"
                    class=" ml-2 px-5 py-6 border-2 flex flex-col  border-blue-500  bg-blue-500 rounded-lg"
                >
                    <svg
                        class=" fill-current text-white w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"
                    >
                        <path
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
                        />
                    </svg>
                </button>
            </form>
            <div class=" text-center flex items-center justify-center mb-5">
                <div
                    class=" text-center flex text-3xl text-gray-900 font-extrabold"
                >
                    Vas a enviar: {{ getBs }}
                </div>
            </div>
        </div>
        <div
            class=" mt-10 text-center text-lg md:text-3xl font-bold px-3"
            style="color:rgb(10, 20, 110)"
        >
            La máxima rapidez, seguridad y tasa del mercado
        </div>
        <div class=" mt-10 px-5 text-justify md:text-left">
            Pesotoday nace como una solución segura, rápida y confiable para
            realizar transferencias a venezuela desde chile a través de una
            plataforma digital automatizada. Sabemos que la seguridad de que tu
            dinero llegue como corresponde a destino es lo más importante, pero
            también sabemos que necesitas que llegue rápido y que el proceso sea
            claro y transparente, es por eso que todas nuestras operaciones
            entregan un comprobante que te llega directamente al correo
            electrónico. Somos la mejor y más rápida alternativa del mercado,
            bienvenido a Pesotoday.cl
        </div>
        <div class="mt-10  p-5 flex flex-wrap">
            <div class="w-full md:w-1/3 p-4  bg-white">
                <div class="shadow-md p-2 rounded">
                    <div>
                        <svg
                            style="color:rgb(10, 20, 110)"
                            class=" fill-current"
                            width="90px"
                            height="90px"
                            xmlns="http://www.w3.org/2000/svg"
                            data-id="icon-paper-airplane"
                            viewBox="0 0 64 64"
                            aria-hidden="true"
                        >
                            <polyline
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2px"
                                points="25 31.13 59 13.13 59 13.13 22 39 39 50 59 13.13 5 28 16 35 16 49.13 22 44.13"
                            ></polyline>
                            <circle
                                fill="currentColor"
                                cx="21"
                                cy="33.13"
                                r="1.25"
                            ></circle>
                        </svg>
                    </div>
                    <div
                        style="color:rgb(10, 20, 110)"
                        class=" text-2xl font-extrabold"
                    >
                        Pesotoday transferencias internacionales.
                    </div>
                    <div class=" mt-10">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Optio ipsa qui neque perspiciatis iusto! At aspernatur
                        debitis earum, eos obcaecati fugiat repudiandae voluptas
                        eveniet a provident rerum temporibus vitae! Nulla.
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-4  bg-white">
                <div class="shadow-md p-2 rounded">
                    <div>
                        <svg
                            style="color:rgb(10, 20, 110)"
                            width="90px"
                            height="90px"
                            class="SvgWrapper-laTbLX cbVmyd StyledContentfulAsset-dMLqYA hhGdOG"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 64 64"
                            data-id="icon-line-graph"
                            aria-hidden="true"
                        >
                            <polyline
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2px"
                                points="13 11 13 51 51 51"
                            ></polyline>
                            <polyline
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2px"
                                points="17 32 25 27 34 39 43 23 51 32"
                            ></polyline>
                            <circle
                                fill="#fff"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2px"
                                cx="43"
                                cy="23"
                                r="2"
                                transform="translate(-3.67 37.14) rotate(-45)"
                            ></circle>
                        </svg>
                    </div>
                    <div
                        style="color:rgb(10, 20, 110)"
                        class=" text-2xl font-extrabold"
                    >
                        Entregamos la máxima tasa del mercado
                    </div>
                    <div class=" mt-10">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Optio ipsa qui neque perspiciatis iusto! At aspernatur
                        debitis earum, eos obcaecati fugiat repudiandae voluptas
                        eveniet a provident rerum temporibus vitae! Nulla.
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-4  bg-white">
                <div class="shadow-md p-2 rounded">
                    <div>
                        <svg
                            style="color:rgb(10, 20, 110)"
                            width="90px"
                            height="90px"
                            class="SvgWrapper-laTbLX cbVmyd StyledContentfulAsset-dMLqYA hhGdOG"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 100 100"
                            data-id="icon-ringing-bell"
                            aria-hidden="true"
                        >
                            <g
                                stroke="none"
                                stroke-width="1"
                                fill="none"
                                fill-rule="evenodd"
                            >
                                <g
                                    transform="translate(12.000000, 12.000000)"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M45.7127053,2.18098311 L45.7776592,1.98591608 C46.2860458,0.463661262 47.9312939,-0.358513514 49.453716,0.14992898 C50.9750372,0.65800381 51.7973221,2.30167598 51.2911284,3.82606807 L51.2265669,4.0193454 C60.207007,8.5007415 64.7553925,19.0201324 61.4897059,28.8157649 L59.0228003,36.2164818 C55.9119671,45.5489814 55.0164338,55.4780977 56.4080927,65.2140294 L57.0008474,69.3633124 C57.1535871,70.4324903 56.127735,71.2886079 55.1031394,70.9470312 L21.8827243,59.8721067 C21.1215336,59.6183432 20.7101826,58.7955602 20.9639461,58.0343696 C21.2177096,57.2731789 22.0404926,56.8618279 22.8016833,57.1155914 L53.7919325,67.4470298 L53.5316524,65.6250693 C52.0761599,55.4425626 53.0127631,45.0580883 56.2662488,35.2976314 L58.7331745,27.8968541 C61.8006408,18.6957961 56.8339994,8.75043232 47.6392423,5.67067039 C47.6312256,5.66814762 47.623215,5.66555167 47.6152111,5.66288218 C38.4052654,2.59111098 28.4497758,7.5659509 25.3781958,16.7753235 L22.9099036,24.1743888 C19.6555149,33.9345842 14.1730495,42.8025316 6.8972147,50.0753955 L5.59492648,51.3770457 L9.12057677,52.5525591 C9.88175823,52.8063502 10.2930793,53.6291481 10.0392881,54.3903296 C9.78549692,55.1515111 8.96269902,55.5628321 8.20151757,55.3090409 L2.44540436,53.3898523 C1.42074285,53.0482122 1.11393564,51.7476232 1.87787964,50.9840535 L4.8430641,48.0203219 C11.7997428,41.0664838 17.0417675,32.5874518 20.1535024,23.2550878 L22.6218329,15.8559074 C25.8889859,6.06015778 35.8398545,0.375709365 45.7127053,2.18098311 Z M32.9083714,68.1421993 C33.162105,67.3809986 33.9848717,66.9696152 34.7460724,67.2233488 C35.5072731,67.4770823 35.9186565,68.2998491 35.6649229,69.0610498 C35.1573334,70.5838184 35.9795724,72.2294946 37.5014273,72.7371026 C39.0238546,73.2455468 40.669455,72.4234952 41.1781441,70.9003349 C41.4323133,70.1392796 42.2553154,69.7283673 43.0163707,69.9825365 C43.777426,70.2367058 44.1883384,71.0597079 43.9341691,71.8207632 C42.9172275,74.865777 39.6257941,76.5099962 36.5815248,75.4933031 C33.537855,74.4781007 31.8934638,71.1869221 32.9083714,68.1421993 Z M14.7711618,7.49502794 C15.4602299,7.08394129 16.3520816,7.30928982 16.7631683,7.99835799 C17.1742549,8.68742615 16.9489064,9.57927785 16.2598382,9.99036451 C12.0065115,12.5278288 8.78310996,16.4850272 7.18302071,21.2839714 C5.58474337,26.0774804 5.78775754,31.1747629 7.66354478,35.7552061 C7.96762416,36.4977308 7.61219401,37.3461711 6.86966933,37.6502504 C6.12714464,37.9543298 5.27870441,37.5988997 4.97462503,36.856375 C2.83770782,31.6382843 2.6061587,25.8245457 4.4265453,20.3648928 C6.24885278,14.8994776 9.92547491,10.3858845 14.7711618,7.49502794 Z M17.1410614,12.9247352 C17.8158224,12.4905639 18.7147897,12.6856004 19.148961,13.3603614 C19.5831323,14.0351224 19.3880959,14.9340897 18.7133349,15.368261 C15.9013783,17.1775993 13.7773325,19.8799014 12.6966041,23.1207967 C11.6159191,26.3641412 11.6940991,29.80063 12.858919,32.937207 C13.1382545,33.6893897 12.7549361,34.5256004 12.0027534,34.804936 C11.2505707,35.0842715 10.4143599,34.7009531 10.1350244,33.9487704 C8.7416748,30.1968185 8.64800873,26.0796197 9.9400527,22.2019461 C11.2322544,18.326883 13.7770418,15.0892955 17.1410614,12.9247352 Z M70.0987798,27.9416424 C69.7944714,27.1992115 70.1496399,26.3506617 70.8920708,26.0463534 C71.6345017,25.742045 72.4830515,26.0972135 72.7873598,26.8396444 C74.9275282,32.0610819 75.1602909,37.8793431 73.3384009,43.3435062 C71.5164993,48.8031832 67.8437212,53.3123883 63.0033375,56.2038807 C62.3145074,56.6153661 61.4225254,56.3905337 61.0110401,55.7017036 C60.5995547,55.0128734 60.824387,54.1208915 61.5132172,53.7094061 C65.7622648,51.1711592 68.9824176,47.2176588 70.5820396,42.4240853 C72.1816008,37.6267247 71.9775135,32.5252495 70.0987798,27.9416424 Z M64.9088543,30.7710567 C64.6298056,30.0187675 65.0134428,29.182703 65.765732,28.9036543 C66.5180212,28.6246056 67.3540857,29.0082428 67.6331344,29.760532 C69.0252781,33.5136213 69.1181146,37.6292344 67.8250625,41.5037668 C66.5326903,45.3808834 63.9860047,48.6187947 60.6186848,50.7817566 C59.9435844,51.2154001 59.0447699,51.0196606 58.6111264,50.3445602 C58.1774829,49.6694599 58.3732224,48.7706454 59.0483228,48.3370019 C61.862532,46.5293247 63.9877054,43.8273333 65.0686756,40.5844229 C66.1502307,37.3436249 66.0727512,33.9088139 64.9088543,30.7710567 Z"
                                        fill-rule="nonzero"
                                    ></path>
                                    <path
                                        d="M16.1400717,56.4263264 C15.7594302,57.5682509 14.5245245,58.1857038 13.3840528,57.8050623 C12.2421283,57.4229679 11.6246755,56.1895151 12.005317,55.0475906 C12.3859585,53.905666 13.6208642,53.289666 14.7613358,53.6703075 C15.9032604,54.0509491 16.5207132,55.2844019 16.1400717,56.4263264"
                                    ></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div
                        style="color:rgb(10, 20, 110)"
                        class=" text-2xl font-extrabold"
                    >
                        Recibe alertas y notificaciones de tus giros.
                    </div>
                    <div class=" mt-10">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Optio ipsa qui neque perspiciatis iusto! At aspernatur
                        debitis earum, eos obcaecati fugiat repudiandae voluptas
                        eveniet a provident rerum temporibus vitae! Nulla.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout";
import Input from "../Jetstream/Input.vue";
export default {
    components: { Input },
    layout: MainLayout,
    data() {
        return {
            tasa: 2045,
            send: 10000,
            token: document.getElementsByTagName("meta")["csrf-token"].content
        };
    },
    mounted() {
        console.log(this.$page.props.csrf_token);
    },
    computed: {
        getBs() {
            const total = this.tasa * this.send;
            return new Intl.NumberFormat("de-DE", {
                style: "currency",
                currency: "VES"
            }).format(total);
        }
    }
};
</script>
