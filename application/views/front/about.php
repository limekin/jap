<?php require('parts/header.php');?>

    <section class='page-header'>
        <div class='page-header-background'>
        </div>
        <div class='overlay'></div>
        <div class='container'>
            <div class='page-title'>
                <h1>About</h1>
            </div>
        </div>
    </section>
    
    <section class='page-content basic-section'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-4'>
                    <img class='page-img' width='100%' src='img/other/restaurant.jpg'>
                </div>
                <div class='col-lg-8'>
                    <h2>Our Restaurant</h2>
                    <br>
                    <p>
                        With an enviable culinary heritage dating back to several years the Jaipur 
                        India cuisine has set new benchmark in hospitality industry in Cochrane. 
                        The restaurant reflects the influences from different parts of world while 
                        retaining the gist and tradition of East Indian culinary knowledge. We set 
                        high standard for the pleasure of epicurean gourmets and always taking the 
                        onus of adhere to the same.
                    </p>

                    <p>
                        Jaipur India cuisine ,One of the most loved restaurant of Cochrane offers 
                        an all day eclectic dining experience as well as the soothing ambience in 
                        our restaurant so created that the guests who walks in our restaurant feels 
                        homely and carries an everlasting memories of their dining episode with us.
                    </p>

                    <p>
                        We not only mastered in the art of cooking but also offer unique hospitality. 
                        We handpicked the recipes by research and offering them to you for your final 
                        choice. We are illustrious for our commitment towards authentic and hygienic food.
                    </p>
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