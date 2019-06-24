var slider_app = new Vue({
    el: "#jap-carousel",
    data: {
        backgrounds: [
            'img/bgs/slider_one.jpg',
            'img/bgs/slider_two.jpg',
        ],
        currentBg: 'img/bgs/slider_two.jpg',
        bgIndex: 1
    },
    mounted() {
        setInterval(function() {
            this.bgIndex = (this.bgIndex + 1) % 2
            this.currentBg = this.backgrounds[this.bgIndex]
        }.bind(this), 5000);
    }
});