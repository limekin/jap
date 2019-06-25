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

