<x-layout>
    <x-header href="hem" />
    @section('page-title')
        Hem
    @endsection
    @include('partials._splash')
    <div class="flex justify-center items-center -mt-12 sm:-mt-14">
        <div
            class="text-center text-lg box-bg rounded-xl w-full md:w-5/6 lg:w-[700px] mx-4 sm:mx-16 mb-4 drop-shadow-lg pt-12 border-b-2 border-b-orange-300">
            <p class="text-center font-semibold px-8 pb-8 text-lg sm:text-xl text-white">
                HÄR SPELAR VI <span class="hot-text text-orange-300">ROCK'N'ROLL</span>!
            </p>
        </div>
    </div>
</x-layout>
