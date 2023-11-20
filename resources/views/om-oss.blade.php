<x-layout>
    <x-header href="om-oss" />
    @section('page-title')
        Om Oss
    @endsection
    <div class="text-white mx-auto w-full max-w-4xl p-8 pt-4 mt-8">
        <p class="text-center text-2xl pb-8 font-semibold text-orange-300">
            <span class="bg-red-300 bg-opacity-10 border-b-2 border-orange-300 px-4 p-2 rounded-lg">OM OSS</span>
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
