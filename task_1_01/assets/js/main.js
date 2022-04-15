new Vue({
    el:"#app",
    data: {
        textColor: 'blue',
        bgColor: 'yellow',
    },
    methods: {
        toggleColor() {
            this.textColor = this.textColor === 'blue' ? 'yellow' : 'blue';
            this.bgColor = this.textColor === 'yellow' ? 'blue' : 'yellow';
        },
    }
});