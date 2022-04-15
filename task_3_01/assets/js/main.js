Vue.use(vuelidate.default);

new Vue({
    el: "#app",
    data: {
        firstName: "",
        lastName: "",
        gender: "",
        bg: '',
    },
    validations: {
        firstName: {
            required: validators.required,
            minLength: validators.minLength(4)
        },
        lastName: {
            required: validators.required,
            minLength: validators.minLength(4)
        },
        gender: {},
    },
    methods: {
        submit: function () {
            if (this.$v.$invalid) {
                return;
            }
            alert("Thank you for submitting!");
            this.$v.$reset();
        },
        genderWatch: function() {
            if (this.value == 'male') {
                this.bg = 'yellow';
            } else {
                this.bg = 'pink';
            }
        },
    }
});
