<section class="bg-transparent text-white mx-auto w-full top-0 z-50">
    <nav class="flex items-center justify-center py-4 sm:py-4 mx-auto max-w-4xl antialiased">
        <div class="text-xs sm:text-lg font-bold sm:font-semibold">
            <a href="/"
                class="{{ $href == 'hem' ? 'current bg-red-900 text-orange-300 border sm:border-2 border-orange-300 ' : '' }}py-2 sm:py-2 hover:text-orange-300 px-2"
                up-follow>HEM</a>
            ·
            <a href="/om-oss/"
                class="{{ $href == 'om-oss' ? 'current bg-red-900 text-orange-300 border sm:border-2 border-orange-300 ' : '' }}py-2 sm:py-2 hover:text-orange-300 px-2"
                up-follow>BANDET</a>
            ·
            <a href="/spelningar/"
                class="{{ $href == 'spelningar' ? 'current bg-red-900 text-orange-300 border sm:border-2 border-orange-300 ' : '' }}py-2 sm:py-2 hover:text-orange-300 px-2"
                up-follow>SPELNINGAR</a>
            ·
            <a href="/kontakt/"
                class="{{ $href == 'kontakt' ? 'current bg-red-900 text-orange-300 border sm:border-2 border-orange-300 ' : '' }}py-2 sm:py-2 hover:text-orange-300 px-2"
                up-follow>KONTAKT</a>
        </div>
    </nav>
</section>
