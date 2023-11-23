<script>
    document.addEventListener("DOMContentLoaded", () => {
        anime({
            targets: "#splash",
            translateY: [3, 0, 3, 0],
            rotate: [0, 1, 0, -1, 0],
            easing: "easeInOutElastic(1, .5)",
            duration: 3000,
            loop: true,
        });

        anime({
            targets: ".anim-oss",
            opacity: [0, 1],
            scale: [0.9, 1],
            easing: "spring(1, 80, 10, 0)",
            delay: anime.stagger(300),
            duration: 900,
        });

        anime({
            targets: ".hot-text",
            color: ['#fdbb74', '#FF0000', '#FFFF00', '#FFF', '#fdbb74'],
            easing: "linear",
            duration: 5000,
            loop: true,
        });

        anime({
            targets: ".body-imgbg",
            backgroundPositionY: [0, '-632px'], //632px
            backgroundPositionX: [0, '634px'], //634px
            backgroundColor: ['#300000', '#501000', '#300000', '#300000', '#300000', '#501000',
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
            "https://dazuki.github.io/images/tony_lindberg.jpg",
            "https://dazuki.github.io/images/mats_bystrom.jpg",
            "https://dazuki.github.io/images/ola_gustafsson.jpg",
            "https://dazuki.github.io/images/jonas_hellgren.jpg"
        );
    </script>
</div>
