<?php require('parts/header.php');?>

    <section class='page-header'>
        <div class='page-header-background' style="background-image: url('img/bgs/page-contact.jpg')">
        </div>
        <div class='overlay'></div>
        <div class='container'>
            <div class='page-title'>
                <h1>Contact</h1>
            </div>
        </div>
    </section>
    
    <section class='page-content basic-section'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h2>Location</h2>
                    <br>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2500.5209939976758!2d-114.47052900000001!3d51.19105100000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5371409db0f140f5%3A0xa7aea5f25316a7b!2sJaipur+India+Cuisine!5e0!3m2!1sen!2sin!4v1415611177569" width="100%" height="400" frameborder="0" style="border:0"></iframe>

                    <hr>

                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Foote rsection. -->
    <section class='footer basic-section'>
        <div class='section-icon black'>
            <img class='footer-logo' src='img/logo.png'/>
        </div>
        <div class='container'>
            <h3 class='text-center'>Jaipur Indian Cuisine</h3>
            <br><br>
            <div class='text-center'>
                114 - 3rd Avenue West, Cochrane, Alberta                    
            </div>
            <div class='text-center'>
                T4C 1Z6 Tel: (403) 981-9988                    
            </div>
            <div class='text-center'>
                info@jaipurindiacuisine.com
            </div>

            <div class='copy-social d-flex justify-content-between'>
                <div>
                    Copyright © 2017 Polygon Theme. All rights reserved.
                </div>
                <ul>
                    Test
                </ul>
            </div>

        </div>
    </section>
    <!-- Footer section. -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/slick/slick.min.js'></script>
    <script src='http://localhost:5000/livereload.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>    
    <script>
        $('.dish-list').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            nextArrow: "<i class='material-icons slick-n'>arrow_forward_ios</i>",
            prevArrow: "<i class='material-icons slick-p'>arrow_back_ios</i>",
            speed: 700,
            responsive: [
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                        dots: true
                    }
                }
            ]
        });
    </script>
    <script>
        var menuApp = new Vue({
            el: '#menu-app',
            data: {
                menu: [
                    'All', 'Lunch', 'Dinner', 'Appetizers', 'Dessert', 'Special promotions'
                ],
                currentMenu: 'All'
            }

        })
    </script>
    <script>
        $(document).ready(function() {
            $('.loading-overlay').css('display', 'none');
            $('.main-intro').addClass('loaded');
            $('.menu-toggle').click(function() {
                $('.mobile-menu').addClass('shown');
            })
            $('.close-mobile-menu').click(function() {
                $('.mobile-menu').removeClass('shown');
            })
            window.onscroll = function(event) {
                if(window.scrollY > 200) {
                    $('.sub-nav').addClass('hidden');
                    $('.main-nav').addClass('shrinked');
                } else {
                    $('.sub-nav').removeClass('hidden');
                    $('.main-nav').removeClass('shrinked');
                }
            }
        });
    </script>
    <script src='js/jap_slider.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>    
</body>
</html>