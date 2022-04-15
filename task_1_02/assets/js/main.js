new Vue({
    el:"#app",
    data: {
        textColor: 'blue',
        bgColor: 'yellow',
        alert: 'Toggle Text',
        counter: 0,
        max: 5,
        visibility: 'visible',
        items: [
            {
                title: '',
                description: ''
            }
        ]
    },
    methods: {
        toggleColor() {
            if (this.counter < this.max) {
                this.counter++;
                this.textColor = this.textColor === 'blue' ? 'yellow' : 'blue';
                this.bgColor = this.textColor === 'yellow' ? 'blue' : 'yellow';
            } else {
                this.alert = 'Досить бавитись!'
                this.visibility = 'hidden';
            }
        },
    }
});