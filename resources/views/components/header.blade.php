<section class="box-bg border-b-2 border-orange-300 text-white mx-auto w-full top-0 z-50 shadow-lg">
    <nav class="flex items-center justify-center py-4 sm:py-4 mx-auto max-w-4xl antialiased">
        <div class="text-xs sm:text-lg font-bold sm:font-semibold">
            <a href="/"
                class="{{ $href == 'hem' ? 'current bg-red-950 text-orange-300 border-dashed border-b sm:border-b-2 border-orange-300 ' : '' }}py-2 sm:py-2 hover:text-orange-300 hover:underline hover:underline-offset-4 px-2">HEM</a>
            ·
            <a href="/om-oss"
                class="{{ $href == 'om-oss' ? 'current bg-red-950 text-orange-300 border-dashed border-b sm:border-b-2 border-orange-300 ' : '' }}py-2 sm:py-2 hover:text-orange-300 hover:underline hover:underline-offset-4 px-2">BANDET</a>
            ·
            <a href="/spelningar"
                class="{{ $href == 'spelningar' ? 'current bg-red-950 text-orange-300 border-dashed border-b sm:border-b-2 border-orange-300 ' : '' }}py-2 sm:py-2 hover:text-orange-300 hover:underline hover:underline-offset-4 px-2">SPELNINGAR</a>
            ·
            <a href="/kontakt"
                class="{{ $href == 'kontakt' ? 'current bg-red-950 text-orange-300 border-dashed border-b sm:border-b-2 border-orange-300 ' : '' }}py-2 sm:py-2 hover:text-orange-300 hover:underline hover:underline-offset-4 px-2">KONTAKT</a>
        </div>
    </nav>
</section>
