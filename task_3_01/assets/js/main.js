let App = {
    data() {
        return {
            firstName: '',
            lastName: '',
            checkGender: '',
            phone: '',
            phoneRegex: '^(?:\\+38)?(0\\d{9})$',
            nickName: '',
            nickNameRegex: '^[a-zA-Z0-9_]*$',
            bgColor: '',
        }
    },
    methods: {
        checkFirstName() {
            let firstName =  document.querySelector('[name="firstName"]');

            if (!this.firstName) {
                firstName.style.border = "2px solid red";
            } else {
                firstName.style.border = "";
            }
        },

        checkLastName() {
            let lastName =  document.querySelector('[name="lastName"]');

            if (!this.lastName) {
                lastName.style.border = "2px solid red";
            } else {
                lastName.style.border = "";
            }
        },

        checkPhone() {
            let phone =  document.querySelector('[name="phone"]');

            if (!this.phone.match(this.phoneRegex)) {
                phone.style.border = "2px solid red";
            } else {
                phone.style.border = "";
            }
        },

        checkNickName() {
            let nickName =  document.querySelector('[name="nickName"]');

            if (!this.nickName.match(this.nickNameRegex)) {
                nickName.style.border = "2px solid red";
            } else {
                nickName.style.border = "";
            }
        }
    },
    watch: {
        checkGender(val) {
            if (val == 'female') {
                this.bgColor = 'lightcoral';
            } else {
                this.bgColor = 'dodgerblue';
            }
        }
    },
}

Vue.createApp(App).mount('#app');