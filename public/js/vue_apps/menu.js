/**
 * Handles the display of menu.
 */

if(document.getElementById('menu-page-app')) {
    
    var menuApp = new Vue({
        el: "#menu-page-app",
        data: {
            main: [
                { name: "Lunch", sub: ['Lunch Special']},
                { name: "Dinner", sub: ['Chicken', 'Beef', 'Lamb', 
                    'Fish & Seafood Delicacies', 'Vegetarian', 'Biriyani & Rice', 'Indian Breads', 'Accompaniments']},
                { name: "Appetizers", sub: ['Starters', 'Soups']},
                { name: "Dessert", sub: ['Dessert']},
            ],

            dishes: [
                { sub: 'Lunch Special', name: "Chef's Sepcial Lunch - Chicken", price: 11.95, description: "A complete meal - Butter Chicken platter served with mini samosa, vegetable pakora, pulao basmati rice, lentils, naan bread and dessert.",
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRziNq0SQPlPeWj1P-Jv2BLfOWBq2rScYmOCptvIQpJ8IRVE5qN"},
                { sub: 'Lunch Special', name: "Chef's Special Lunch - Beef", price: 11.95, description: "A complete meal - Curried Beef platter served with mini samosa, vegetable pakora, pulao basmati rice, lentils, naan bread and dessert.",
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_Uhkn0mGiUFDUW3c1nStjQlesXfeuoQas4388nZOpvgvUycsQAA"},
                { sub: 'Lunch Special', name: "Chef's Special Lunch - Vegi", price: 11.95, description: "A complete meal - Mix Vegetable platter served with mini samosa, vegetable pakora, pulao basmati rice, lentils, naan bread and dessert.",
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE30vyvxDaqpk0q1VxRZoX-Qi80yggUXJb9_35lcTmL2cme8sz"},
                
                { sub: 'Chicken',name: "Butter Chicken", price: 15.95, description: "A delicious preparation of boneless tandoori chicken tikka cooked in an exquisite creamy tomato sauce.",
                    image: "https://recipes.timesofindia.com/thumb/53205522.cms?imgsize=302803&width=800&height=800"},
                { sub: 'Chicken', name: "Chicken Tikka Masala", price: 15.95, description: "Barbecued chicken morsels cooked in an aromatic and deliciously zesty sauce.",
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2FRqkqsB_cw8idXby_O610UmcRbduomasbacEj3SCGxn_oOrQ"},
                { sub: 'Chicken', name: "Chicken Korma", price: 15.95, description: "Boneless cubes of Chicken cooked in mild creamy sauce with cashew nuts and almonds.",
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQJqKsWQQD2WDPHdkTx992rsui0hjBec5ybKeQAZmj0gK-aBhR    "},
            ],

            selectedMain: null,
            selectedSub: null
        },

        created() {
            //this.selectedMain = this.main[0]
            //this.selectedSub = this.main[0].sub
            $.get(base_url + 'Ajax/categories', function( data ) {
                this.main = data
            }.bind(this));
            $.get(base_url + 'Ajax/menu', function( data ) {
                console.log(data);
            
            });
        },

        computed: {
            getDishes: function(){
                if(! this.selectedSub) return this.dishes;

                return this.dishes.filter(function(dish) {
                    return dish.sub == this.selectedSub
                }.bind(this))
            }
        }
    })

}