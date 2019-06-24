<?php require('parts/header.php');?>

    <section class='page-header'>
        <div class='page-header-background'>
        </div>
        <div class='overlay'></div>
        <div class='container'>
            <div class='page-title'>
                <h1>Menu</h1>
            </div>
        </div>
    </section>
    
    <section class='page-content basic-section' id='menu-page-app'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-3 p-0'>
                  <div  class='menu-container'>

                    <div v-if='! selectedMain' class='ma-list' key='list'>
                        <div @click='selectedMain = item' class='ma-item' v-for='item in main' :key='item.name'>
                            {{ item.name }}
                        </div>
                    </div>

                    <div v-else key='list-sub'>
                        <transition-group name='entry' appear>
                            <div class='menu-header' key='list-header'>
                                <i @click='selectedMain = null' class='material-icons'>arrow_backward</i>
                                <br>
                                {{ selectedMain.name }}
                            </div>
                            <div class='ma-list' key='list-sub'>
                                <div @click='selectedSub = item' class='ma-item' 
                                    :class="{active: selectedSub == item}"
                                    v-for='item in selectedMain.sub' :key='item'>
                                    {{ item }}
                                </div>
                            </div>
                        </tansition-group>
                    </div>


                  </div>
                </div>
                <div class='col-lg-9 p-0'>
                    <div class='ma-dishes'>
                        <transition-group name='ma-entry'>
                        <div class='ma-dish' v-for='dish in getDishes' :key='dish.name'>
                            <div class='ma-dish-image' :style="{backgroundImage: 'url(' + dish.image + ')'}">
                                <div class='ma-price'>$ {{ dish.price }}</div>
                            </div>
                            <div class='ma-info'>
                                <div class='ma-dish-title'>{{ dish.name }}</div>
                                
                                <div class='ma-desc'>{{ dish.description }}</div>
                            </div>
                        </div>
                        </transition-group>
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
    <script src='js/vue_apps/menu.js'></script>
</body>
</html>