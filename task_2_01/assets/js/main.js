new Vue({
    el: "#app",
    data: {
        tasks: [
            {
                name: '',
            }
        ]
    },
    methods: {
        addTask: function() {
            this.tasks.push({
                name: '',
            });
        },
        removeTask: function(index) {
            this.tasks.splice(index, 1);
        }
    }
});