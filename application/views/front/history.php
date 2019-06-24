<?php require('parts/header.php');?>

    <section class='page-header'>
        <div class='page-header-background'>
        </div>
        <div class='overlay'></div>
        <div class='container'>
            <div class='page-title'>
                <h1>History</h1>
            </div>
        </div>
    </section>
    
    <section class='page-content basic-section'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h2>Our History</h2>
                    <br>
                    <p>
                        Cochrane's newest restaurant is not only bringing rich experience to the 
                        community, it is also instigating a fresh perspective to Cuisine of east India. 
                    </p>

                    <p>
                        Over the past 40 years, Romesh Anand and his wife Sue have build out a reputation 
                        in Calgary, Canada. It did not occur by happenstance. After training in England, 
                        almost half a century ago, Rome became involved in the restaurant business in 1962 
                        in his family's first ever East Indian Restaurant in Bristol, UK. After moving to 
                        Calgary in 1970, Rome and Sue gave the taste of East Indian Cuisine by opening Omar 
                        Khayyam Restaurant in 1974. They had run a succession of extremely successful restaurants 
                        across the city, including the nationally reputed, award winning Rajdoot which they have 
                        opened in 1990.
                    </p>

                    <p>
                        There over the years, they cooked for dignitaries and celebrities from all over the world. 
                        The restaurant even exists today, but Rome and Sue have moved on. They are now trying to 
                        educate people to eat fresh and organic food, while at the same time experimenting with 
                        the traditional delicious east Indian food with use of fine herbs and spices that they say 
                        ………goes back thousands of years.
                    </p>

                    <p>
                        Then they have participated with research and screening projects by the University of Calgary, 
                        faculty of Medicine. "Over the years, we had learnt how important it is to eat right" 
                        Rome said, adding that there are many natural ways to use Indian spices to keep your 
                        health good. To this end, the Rome family started another venture, new restaurant in 
                        Cochrane, namely Jaipur India Cuisine, will feature dishes with reduced sodium, fat, 
                        sugar and white flour as well as increase the use of whole grain fiber, raw foods and 
                        gluten free dishes.
                    </p>
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