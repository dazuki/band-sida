<x-layout>
    <x-header href="kontakt" />
    @section('page-title')
        Kontakt
    @endsection
    <div class="text-white mx-auto w-full max-w-4xl p-8 pt-4 mt-2">
        <p class="text-center text-2xl pb-1 font-semibold text-orange-300">
            <span class="box-bg border-t-2 border-orange-300 px-4 p-2 rounded-t-xl">KONTAKT<svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="inline-block -mt-1 ml-2 w-7 h-7">
                    <path fill-rule="evenodd"
                        d="M4.804 21.644A6.707 6.707 0 006 21.75a6.721 6.721 0 003.583-1.029c.774.182 1.584.279 2.417.279 5.322 0 9.75-3.97 9.75-9 0-5.03-4.428-9-9.75-9s-9.75 3.97-9.75 9c0 2.409 1.025 4.587 2.674 6.192.232.226.277.428.254.543a3.73 3.73 0 01-.814 1.686.75.75 0 00.44 1.223zM8.25 10.875a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25zM10.875 12a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0zm4.875-1.125a1.125 1.125 0 100 2.25 1.125 1.125 0 000-2.25z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </p>
        <div class="flex justify-center items-center">
            <div
                class="text-center text-base box-bg rounded-xl w-full md:w-5/6 lg:w-[700px] sm:mx-16 mb-4 drop-shadow-lg p-4 border-t-2 border-orange-300">
                <p class="text-center text-lg pb-4 mb-4 border-b-2 border-dashed border-orange-300">
                    Här kan du kontakta någon av oss på vår Facebook eller Mail
                </p>
                <div class="mb-8">
                    <p class="text-center font-semibold text-2xl">
                        Tony Lindberg
                    </p>
                    <p class="text-center">
                        <a href="https://www.facebook.com/tony.lindberg.142" target="_BLANK">
                            <img src="{{ asset('images/facebook.png') }}"
                                class="inline-block w-6 pt-1 mx-1 opacity-75 hover:opacity-100">
                        </a>
                        <a href="mailto:lindbergt69@gmail.com" target="_BLANK">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="inline-block w-8 pt-1 mx-1 opacity-75 hover:opacity-100 text-orange-300">
                                <path stroke-linecap="round"
                                    d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                            </svg>
                        </a>
                    </p>
                </div>
                <div class="mb-8">
                    <p class="text-center font-semibold text-2xl">
                        Mats Byström
                    </p>
                    <p class="text-center">
                        <a href="https://www.facebook.com/kultmats" target="_BLANK">
                            <img src="{{ asset('images/facebook.png') }}"
                                class="inline-block w-6 pt-2 mx-1 opacity-75 hover:opacity-100">
                        </a>
                    </p>
                </div>
                <div class="mb-8">
                    <p class="text-center font-semibold text-2xl">
                        Ola Gustafsson
                    </p>
                    <p class="text-center">
                        <a href="https://www.facebook.com/ola.gustafsson.967" target="_BLANK">
                            <img src="{{ asset('images/facebook.png') }}"
                                class="inline-block w-6 pt-2 mx-1 opacity-75 hover:opacity-100">
                        </a>
                    </p>
                </div>
                <div>
                    <p class="text-center font-semibold text-2xl">
                        Jonas Hellgren
                    </p>
                    <p class="text-center">
                        <a href="https://www.facebook.com/jonas.hellgren.3" target="_BLANK">
                            <img src="{{ asset('images/facebook.png') }}"
                                class="inline-block w-6 pt-2 mx-1 opacity-75 hover:opacity-100">
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
