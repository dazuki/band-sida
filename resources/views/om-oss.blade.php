<x-layout>
    <x-header href="om-oss" />
    @section('page-title')
        Om Oss
    @endsection
    <div class="text-white mx-auto w-full max-w-4xl p-8 pt-4 mt-8">
        <p class="text-center text-2xl font-semibold text-orange-300 drop-shadow-lg">
            <span class="box-bg border-t-2 border-orange-300 px-4 p-2 rounded-t-lg">OM
                OSS<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="inline-block -mt-1 ml-2 w-7 h-7">
                    <path
                        d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                </svg>
            </span>
        </p>
        <div class="flex justify-center items-center">
            <div
                class="text-center text-lg box-bg rounded-2xl w-full md:w-5/6 lg:w-[700px] mx-4 sm:mx-16 mb-4 drop-shadow-lg p-4 border-b-2 border-orange-300">
                <div class="anim-oss" style="opacity: 0;">
                    <p class="font-semibold text-center text-2xl p-4 pt-4 text-white">
                        <span class="text-orange-300">TONY</span> LINDBERG
                    </p>
                    <div class="flex justify-center items-center mx-auto w-full">
                        <img src="{{ asset('/images/tony_lindberg.jpg') }}" class="rounded-t-2xl drop-shadow-lg"
                            width="220">
                    </div>
                    <div class="flex justify-center items-center">
                        <p
                            class="pt-4 pb-4 text-center text-lg bg-red-300 bg-opacity-10 rounded-b-2xl w-[220px] drop-shadow-lg border-t-2 border-orange-300">
                            Gitarr, Sång
                        </p>
                    </div>
                </div>

                <div class="anim-oss" style="opacity: 0;">
                    <p class="font-semibold text-center text-2xl p-4 pt-10 text-white">
                        <span class="text-orange-300">MATS</span> BYSTRÖM
                    </p>
                    <div class="flex justify-center items-center mx-auto w-full">
                        <img src="{{ asset('/images/mats_bystrom.jpg') }}" class="rounded-t-2xl drop-shadow-lg"
                            width="220">
                    </div>
                    <div class="flex justify-center items-center">
                        <p
                            class="pt-4 pb-4 text-center text-lg bg-red-300 bg-opacity-10 rounded-b-2xl w-[220px] drop-shadow-lg border-t-2 border-orange-300">
                            Trummor
                        </p>
                    </div>
                </div>

                <div class="anim-oss" style="opacity: 0;">
                    <p class="font-semibold text-center text-2xl p-4 pt-10 text-white">
                        <span class="text-orange-300">OLA</span> GUSTAFSSON
                    </p>
                    <div class="flex justify-center items-center mx-auto w-full">
                        <img src="{{ asset('/images/ola_gustafsson.jpg') }}" class="rounded-t-2xl drop-shadow-lg"
                            width="220">
                    </div>
                    <div class="flex justify-center items-center">
                        <p
                            class="pt-4 pb-4 text-center text-lg bg-red-300 bg-opacity-10 rounded-b-2xl w-[220px] drop-shadow-lg border-t-2 border-orange-300">
                            Gitarr, Sång
                        </p>
                    </div>
                </div>

                <div class="anim-oss" style="opacity: 0;">
                    <p class="font-semibold text-center text-2xl p-4 pt-10 text-white">
                        <span class="text-orange-300">JONAS</span> HELLGREN
                    </p>
                    <div class="flex justify-center items-center mx-auto w-full">
                        <img src="{{ asset('/images/jonas_hellgren.jpg') }}" class="rounded-t-2xl drop-shadow-lg"
                            width="220">
                    </div>
                    <div class="flex justify-center items-center mb-4">
                        <p
                            class="pt-4 pb-4 text-center text-lg bg-red-300 bg-opacity-10 rounded-b-2xl w-[220px] drop-shadow-lg border-t-2 border-orange-300">
                            Bas, Sång
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
