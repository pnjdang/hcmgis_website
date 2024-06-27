<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$baseUrl = Yii::$app->urlManager->baseUrl; // Or use Yii::$app->request->baseUrl if needed

$js = <<<JS
var BASEURL = '$baseUrl';
JS;

$this->registerJs($js, yii\web\View::POS_HEAD);

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <link rel="shortcut icon" href="<?php echo Yii::$app->getHomeUrl(); ?>images/favicon.ico" type="image/x-icon" />
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>HCMGIS.VN - Nền tảng dịch vụ HCMGIS.</title>
    <?php $this->head() ?>
</head>
<body id="default_theme" class="home_page1" style="overflow: visible;">
<?php $this->beginBody() ?>


<?php include('sidebar_left.php'); ?>

            <?= $content ?>
<div class="">
    <?php include('footer.php'); ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script type="text/javascript">
    $( document ).ready(function() {
        /// ==== left sidebar toggle
        let sidebarLeft = document.querySelector(".sidebar-left");
        let overlayLeft = document.querySelector(".overlay-left");
        let sidebarClose = document.querySelector(".sidebar-close .close");

        overlayLeft.addEventListener("click", function () {
            sidebarLeft.classList.toggle("open");
            overlayLeft.classList.toggle("open");
        });
        sidebarClose.addEventListener("click", function () {
            sidebarLeft.classList.remove("open");
            overlayLeft.classList.remove("open");
        });

        // ===== navbar nine sideMenu
        let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

        sideMenuLeftNine.addEventListener("click", function () {
            sidebarLeft.classList.add("open");
            overlayLeft.classList.add("open");
        });

        // ========= particles 1
        if (document.getElementById("particles-1"))
            particlesJS("particles-1", {
                particles: {
                    number: {
                        value: 40,
                        density: {
                            enable: !0,
                            value_area: 4000,
                        },
                    },
                    color: {
                        value: ["#FFFFFF", "#FFFFFF", "#FFFFFF"],
                    },
                    shape: {
                        type: "circle",
                        stroke: {
                            width: 0,
                            color: "#fff",
                        },
                        polygon: {
                            nb_sides: 5,
                        },
                        image: {
                            src: "../images/overlay.jpg",
                            width: 33,
                            height: 33,
                        },
                    },
                    opacity: {
                        value: 0.15,
                        random: !0,
                        anim: {
                            enable: !0,
                            speed: 0.2,
                            opacity_min: 0.15,
                            sync: !1,
                        },
                    },
                    size: {
                        value: 50,
                        random: !0,
                        anim: {
                            enable: !0,
                            speed: 2,
                            size_min: 5,
                            sync: !1,
                        },
                    },
                    line_linked: {
                        enable: !1,
                        distance: 150,
                        color: "#ffffff",
                        opacity: 0.4,
                        width: 1,
                    },
                    move: {
                        enable: !0,
                        speed: 1,
                        direction: "top",
                        random: !0,
                        straight: !1,
                        out_mode: "out",
                        bounce: !1,
                        attract: {
                            enable: !1,
                            rotateX: 600,
                            rotateY: 600,
                        },
                    },
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        onhover: {
                            enable: !1,
                            mode: "bubble",
                        },
                        onclick: {
                            enable: !1,
                            mode: "repulse",
                        },
                        resize: !0,
                    },
                    modes: {
                        grab: {
                            distance: 400,
                            line_linked: {
                                opacity: 1,
                            },
                        },
                        bubble: {
                            distance: 250,
                            size: 0,
                            duration: 2,
                            opacity: 0,
                            speed: 3,
                        },
                        repulse: {
                            distance: 400,
                            duration: 0.4,
                        },
                        push: {
                            particles_nb: 4,
                        },
                        remove: {
                            particles_nb: 2,
                        },
                    },
                },
                retina_detect: !0,
            });

        // ========= particles footer
        if (document.getElementById("particles-footer"))
            particlesJS("particles-footer", {
                particles: {
                    number: {
                        value: 40,
                        density: {
                            enable: !0,
                            value_area: 4000,
                        },
                    },
                    color: {
                        value: ["#FFFFFF", "#FFFFFF", "#FFFFFF"],
                    },
                    shape: {
                        type: "circle",
                        stroke: {
                            width: 0,
                            color: "#fff",
                        },
                        polygon: {
                            nb_sides: 5,
                        },
                        image: {
                            src: "../images/overlay.jpg",
                            width: 33,
                            height: 33,
                        },
                    },
                    opacity: {
                        value: 0.15,
                        random: !0,
                        anim: {
                            enable: !0,
                            speed: 0.2,
                            opacity_min: 0.15,
                            sync: !1,
                        },
                    },
                    size: {
                        value: 50,
                        random: !0,
                        anim: {
                            enable: !0,
                            speed: 2,
                            size_min: 5,
                            sync: !1,
                        },
                    },
                    line_linked: {
                        enable: !1,
                        distance: 150,
                        color: "#ffffff",
                        opacity: 0.4,
                        width: 1,
                    },
                    move: {
                        enable: !0,
                        speed: 1,
                        direction: "top",
                        random: !0,
                        straight: !1,
                        out_mode: "out",
                        bounce: !1,
                        attract: {
                            enable: !1,
                            rotateX: 600,
                            rotateY: 600,
                        },
                    },
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        onhover: {
                            enable: !1,
                            mode: "bubble",
                        },
                        onclick: {
                            enable: !1,
                            mode: "repulse",
                        },
                        resize: !0,
                    },
                    modes: {
                        grab: {
                            distance: 400,
                            line_linked: {
                                opacity: 1,
                            },
                        },
                        bubble: {
                            distance: 250,
                            size: 0,
                            duration: 2,
                            opacity: 0,
                            speed: 3,
                        },
                        repulse: {
                            distance: 400,
                            duration: 0.4,
                        },
                        push: {
                            particles_nb: 4,
                        },
                        remove: {
                            particles_nb: 2,
                        },
                    },
                },
                retina_detect: !0,
            });

        // ========= particles GIOITHIEU
        if (document.getElementById("particles-gthieu"))
            particlesJS("particles-gthieu", {
                particles: {
                    number: {
                        value: 40,
                        density: {
                            enable: !0,
                            value_area: 4000,
                        },
                    },
                    color: {
                        value: ["#FFFFFF", "#FFFFFF", "#FFFFFF"],
                    },
                    shape: {
                        type: "circle",
                        stroke: {
                            width: 0,
                            color: "#fff",
                        },
                        polygon: {
                            nb_sides: 5,
                        },
                        image: {
                            src: "../images/overlay.jpg",
                            width: 33,
                            height: 33,
                        },
                    },
                    opacity: {
                        value: 0.15,
                        random: !0,
                        anim: {
                            enable: !0,
                            speed: 0.2,
                            opacity_min: 0.15,
                            sync: !1,
                        },
                    },
                    size: {
                        value: 50,
                        random: !0,
                        anim: {
                            enable: !0,
                            speed: 2,
                            size_min: 5,
                            sync: !1,
                        },
                    },
                    line_linked: {
                        enable: !1,
                        distance: 150,
                        color: "#ffffff",
                        opacity: 0.4,
                        width: 1,
                    },
                    move: {
                        enable: !0,
                        speed: 1,
                        direction: "top",
                        random: !0,
                        straight: !1,
                        out_mode: "out",
                        bounce: !1,
                        attract: {
                            enable: !1,
                            rotateX: 600,
                            rotateY: 600,
                        },
                    },
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        onhover: {
                            enable: !1,
                            mode: "bubble",
                        },
                        onclick: {
                            enable: !1,
                            mode: "repulse",
                        },
                        resize: !0,
                    },
                    modes: {
                        grab: {
                            distance: 400,
                            line_linked: {
                                opacity: 1,
                            },
                        },
                        bubble: {
                            distance: 250,
                            size: 0,
                            duration: 2,
                            opacity: 0,
                            speed: 3,
                        },
                        repulse: {
                            distance: 400,
                            duration: 0.4,
                        },
                        push: {
                            particles_nb: 4,
                        },
                        remove: {
                            particles_nb: 2,
                        },
                    },
                },
                retina_detect: !0,
            });


        // ========= glightbox
        const myGallery = GLightbox({
            'type': 'image',
        });

        // ===== grid sanpham
        imagesLoaded('#container', function() {
            var elem = document.querySelector('.grid');
            var iso = new Isotope(elem,{
                itemSelector: '.grid-item',
                masonry: {
                    columnWidth: '.grid-item'
                }
            });
            let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
            filterButtons.forEach(e=>e.addEventListener('click', ()=>{
                    let filterValue = event.target.getAttribute('data-filter');
                    iso.arrange({
                        filter: filterValue
                    });
                }
            ));
        });
        var elements = document.getElementsByClassName("portfolio-btn");
        for (var i = 0; i < elements.length; i++) {
            elements[i].onclick = function() {
                var el = elements[0];
                while (el) {
                    if (el.tagName === "BUTTON") {
                        el.classList.remove("active");
                    }
                    el = el.nextSibling;
                }
                this.classList.add("active");
            }
            ;
        }

        //========= testimonial
        // tns({
        //     container: ".testimonial-slider",
        //     items: 3,
        //     autoplay: true,
        //     autoplayButtonOutput: false,
        //     mouseDrag: true,
        //     gutter: 0,
        //     nav: true,
        //     controls: false,
        //     controlsText: [
        //         '<i class="lni lni-arrow-left"></i>',
        //         '<i class="lni lni-arrow-right"></i>',
        //     ],
        //     responsive: {
        //         0: {
        //             items: 1,
        //         },
        //         1170: {
        //             items: 2,
        //         },
        //     },
        // });
    });


</script>