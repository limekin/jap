<?php require('parts/header.php');?>

    <section class='page-header'>
        <div class='page-header-background'>
        </div>
        <div class='overlay'></div>
        <div class='container'>
            <div class='page-title'>
                <h1>Profile</h1>
            </div>
        </div>
    </section>
    
    <section class='page-content basic-section'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8'>
                    <h2>Our Profile</h2>
                    <br>
                    <p>
                        We add spices and herbs to menu items for the fabulous zest of your taste buds as well 
                        as for the titanic gratification of having quality food. We don't use any ingredients 
                        that use preservatives like sulphites and benzoates. 
                    
                    </p>

                    <p>
                        After successful completion of academics from premier institutes and after extensive experience 
                        from renowned multinational concerns, Mr. Sanjay Yadav and Mr. Sandeep Sidhu who were very 
                        close to Rome and Sue family, took charge and applied avant-garde and phenomenal ideas to Jaipur 
                        India cuisine after the family decided to contribute their expertise to the society.
                    </p>

                </div>
                <div class='col-lg-4'>
                    <img class='page-img' width='100%' src='img/other/profile.jpg'>
                </div>
            </div>
            <hr>

            <div>
                <h2>Promoters</h2>
                <br>
                <div class='row'>
                    <div class='col-lg-2'>
                        <img src='img/other/testmnls-img1.png' >
                        <div class='promoter'>
                            <strong>Mr. Sanjay Yadav</strong>
                        </div>
                    </div>
                    <div class='col-lg-10'>
                        <p>
                            “Sanjeev has a three year diploma in hotel management from a premier institute in India 
                            and attended trainings HACCP (Hazard Analysis Critical Control Point), YES and CAN. He has 
                            got vast experience from renowned Raddison Blu hotel, Bahrain as well as Taj group, India. 
                            He is thorough with food & beverages production and their service management, nutrition, 
                            laying down standards regards to portion size, seasoning, professional storage methods, 
                            and cleanliness and kitchen instruments.”
                        </p>
                    </div>
                </div>
                <br>
                <div class='row'>
                    <div class='col-lg-2'>
                        <img src='img/other/testmnls-img2.png' >
                        <div class='promoter'>
                            <strong>Mr. Sandeep Sidhu</strong>
                        </div>
                    </div>
                    <div class='col-lg-10'>
                        <p>
                            “Sandeep Sidhu has a three year diploma in hotel management and a PG diploma from 
                            American hotel & motel association (AH&MA). He experienced more than eight years from 
                            reputed Radissons Blu group of five star hotels in their concerns at Bahrain, U.A.E and Canada.”
                        </p>
                    </div>
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