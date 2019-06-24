    <!-- Carousel. -->
    <div id='jap-carousel'>

        <transition name='jap-slider-trans' mode='out-in'>
            <div class='jap-bg' v-for='bg in backgrounds'
                v-if='currentBg == bg'
                :style="{backgroundImage: 'url(' + bg + ')'}" :key='bg'>

            </div>
        </transition>

        <div class='overlay'></div>

        <div class='main-intro'>
            <h2>Jaipur</h2>
            <p>Indian Cuisine</p>
        </div>

        <div class='jap-prev'>
            <i class='material-icons'>
                arrow_back_ios
            </i>
        </div>
        <div class='jap-next'>
            <i class='material-icons'>
                arrow_forward_ios
            </i>
        </div>
        
    </div>
    <!-- Carousel. -->



    <!-- Main section. -->
    <section class='welcome basic-section'>
        <div class='section-icon'>
            <i class='material-icons'>keyboard_arrow_down</i>
        </div>
        <img class='bread' src='<?php echo base_url(); ?>public/img/bgs/bread.png'>
        <img class='burger' src='<?php echo base_url(); ?>public/img/bgs/burger.png'>
        <img class='q' src='<?php echo base_url(); ?>public/img/bgs/q.png'>
        <div class='container'>
            <h1 class='text-center'>Welcome to Jaipur Indian Cuisine</h1>
            <br><br>
            <div class='row'>
                <div class='col-lg-6'>
                    <p>
                        We, here in Jaipur India cuisine, follow the delectable menu 
                        from the east India cuisine through adroit nimble fingered 
                        hands keeps you in the pink of your dining spirits. 
                        We are sure this would be the impeccable destination for a 
                        connoisseur of food and ardent foodies.
                    </p>

                    <br>
                    <a href='about.php' class='learn-more'>
                        Learn more
                    </a>
                    <br><br>
                </div>
                <div class='col-lg-6'>
                    <div class='row'>
                        <div class='col-md-6 col-6 p2'>
                            <div class='welcome-pics p-4' style="background-image: url('<?php echo base_url(); ?>public/img/welcome/welcome_pic.jpg');">
                            </div>
                        </div>
                        <div class='col-md-6 col-6 p2'>
                            <div class='welcome-pics p-4' style="background-image: url('<?php echo base_url(); ?>public/img/welcome/welcome_pic.jpg');">
                            </div>
                        </div>
                        <div class='col-md-6 col-6 p2'>
                            <div class='welcome-pics p-4' style="background-image: url('<?php echo base_url(); ?>public/img/welcome/welcome_pic.jpg');">
                            </div>
                        </div>
                        <div class='col-md-6 col-6 p2'>
                            <div class='welcome-pics p-4' style="background-image: url('<?php echo base_url(); ?>public/img/welcome/welcome_pic.jpg');">
                            </div>
                        </div>  
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Main section. -->

    <!-- Dishes section. -->
    <section class='dishes basic-section' data-aos='fade-up' data-aos-duration='1000'>
        <div class='section-icon black'>
            <i class='material-icons' style='color: #e7bf6d'>fastfood</i>
        </div>
        <div class='container'>
            <h1 class='text-center'>Some of our specialities</h1>
            <p class='text-center mini'>Explore some of our mouth watering special dishes</p>
            <br><br>
            <div class='dish-list d-flex'>
                <div class='dish'>
                    <div class='dish-image' style="background-image: url('<?php echo base_url(); ?>public/img/dishes/bhuna.jpg')">

                    </div>
                    <h4>Coconut Fish Bhuna</h4>
                    <div class='dish-desc'>
                        Marinated fish coated with chickpea batter deep-fried and cooked with coconut and freshly ground spices.
                    </div>
                </div>
                <div class='dish'>
                    <div class='dish-image' style="background-image: url('<?php echo base_url(); ?>public/img/dishes/lamb.jpg')">

                    </div>
                    <h4>Rogan Josh Lamb</h4>
                    <div class='dish-desc'>
                        Lamb cooked in an onion-tomato based gravy with a touch of yogurt, fresh herbs & spices
                    </div>
                </div>
                <div class='dish'>
                    <div class='dish-image' style="background-image: url('<?php echo base_url(); ?>public/img/dishes/sabz.jpg')">

                    </div>
                    <h4>Subz Satrang</h4>
                    <div class='dish-desc'>
                        Colorful mixed vegetables cooked with onion and tomatoes in Indian spices.
                    </div>
                </div>
                <div class='dish'>
                    <div class='dish-image' style="background-image: url('<?php echo base_url(); ?>public/img/dishes/butter.jpg')">

                    </div>
                    <h4>Butter Chicken</h4>
                    <div class='dish-desc'>
                        A delicious preparation of boneless tandoori chicken tikka cooked in an exquisite creamy tomato sauce.
                    </div>
                </div>
                
            </div>
        </div>

        <br><br>
    </section>
    <!-- Dishes section. -->

    <!-- Special menu. -->
    <section class='special-menu basic-section' data-aos='fade-up' data-aos-duration='1000'>
        <div class='section-icon grey'>
            <i class='material-icons' style='color: grey'>assignment</i>
        </div>
        <div class='container'>
            <h1 class='text-center'>Our special menu</h1>
            <p class='mini text-center'>
                The role of a good cook ware in the preparation of a sumptuous meal cannot be over emphasized then one consider white bread                    
            </p>
            <br>
            <div id='menu-app'>
                <div class='menu-list'>
                    <div class='menu' @click='currentMenu = item'
                        :class="{active: currentMenu == item}" v-for='item, index in menu' :key="'_menu' + index">
                        {{ item }}
                    </div>
                </div>
            </div>
            
            <div class='menu-dishes'>
                <div class='menu-dish'>
                    <div class='menu-dish-image' style="background-image: url('<?php echo base_url(); ?>public/img/dishes/lamb.jpg')">

                    </div>
                    <div class='menu-meta'>
                        <h5>Josh Lambs</h5>
                        <div class='desc'>
                            Lamb cooked in an onion-tomato based gravy with a touch of yogurt, fresh herbs & spices.
                        </div>
                    </div>
                    <div class='money'>
                        $ 10
                    </div>
                </div>
                <div class='menu-dish'>
                    <div class='menu-dish-image' style="background-image: url('<?php echo base_url(); ?>public/img/dishes/sabz.jpg')">

                    </div>
                    <div class='menu-meta'>
                        <h5>Sabz Satrang</h5>
                        <div class='desc'>
                            Colorful mixed vegetables cooked with onion and tomatoes in Indian spices.
                        </div>
                    </div>
                    <div class='money'>
                        $ 10
                    </div>
                </div>
                <div class='menu-dish'>
                    <div class='menu-dish-image' style="background-image: url('<?php echo base_url(); ?>public/img/dishes/bhuna.jpg')">

                    </div>
                    <div class='menu-meta'>
                        <h5>Coconute Fish Bhuna</h5>
                        <div class='desc'>
                            Marinated fish coated with chickpea batter deep-fried and cooked with coconut and freshly ground spices.
                        </div>
                    </div>
                    <div class='money'>
                        $ 10
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Special menu. -->

    <!-- News section. -->
    <section class='news basic-section' data-aos='fade-up' data-aos-duration='1000'>
        <div class='section-icon'>
            <i class='material-icons' style='color: grey'>list_alt</i>
        </div>
        <div class='container'>
            <h1 class='text-center'>Whats happening</h1>
            <p class='text-center'>Read our news and keep up with what we are upto</p>
        </div>
        
    </section>
    <!-- News section. -->