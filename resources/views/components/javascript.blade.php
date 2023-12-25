<script>
    up.compiler('img#splash', function(element) {
        anime({
            targets: "#splash",
            translateY: [3, 0, 3, 0],
            rotate: [0, 1, 0, -1, 0],
            easing: "easeInOutElastic(1, .5)",
            duration: 3000,
            loop: true,
        });
    });

    up.compiler('div.anim-oss', function(element) {
        anime({
            targets: ".anim-oss",
            opacity: [0, 1],
            scale: [0.9, 1],
            easing: "spring(1, 80, 10, 0)",
            delay: anime.stagger(300),
            duration: 900,
        });
    });

    up.compiler('span.hot-text', function(element) {
        anime({
            targets: ".hot-text",
            color: ['#fdbb74', '#FF0000', '#FFFF00', '#FFF', '#fdbb74'],
            easing: "linear",
            duration: 5000,
            loop: true,
        });
    });

    up.compiler('body.body-imgbg', function(element) {
        anime({
            targets: ".body-imgbg",
            backgroundPositionY: [0, '-632px'], //632px
            backgroundPositionX: [0, '634px'], //634px
            backgroundColor: ['#300000', '#511000', '#300000', '#300000', '#300000', '#511000',
                '#300000', '#300000'
            ],
            easing: 'linear',
            duration: 20000,
            loop: true,
        });
    });
</script>
<div class="hidden">
    <script>
        let images = [];

        function preload() {
            for (i = 0; i < preload.arguments.length; i++) {
                images[i] = new Image()
                images[i].src = preload.arguments[i]
            }
        }

        preload(
            "/images/tony_lindberg.jpg",
            "/images/mats_bystrom.jpg",
            "/images/ola_gustafsson.jpg",
            "/images/jonas_hellgren.jpg"
        );
    </script>
</div>
