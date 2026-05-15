const { createApp } = Vue;

createApp({
    data() {
        return {
            formData: {
                name: '',
                email: '',
                subject: '',
                message: '',
                gender: '',
                terms: false
            },
            vueMessage: '',
            vueMessageClass: ''
        }
    },
    methods: {
        validateVueJS() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!this.formData.name || !this.formData.email || !this.formData.subject || !this.formData.message) {
                this.vueMessage = 'Vue.js Error: Please fill in all required fields!';
                this.vueMessageClass = 'text-danger';
            } else if (!emailRegex.test(this.formData.email)) {
                this.vueMessage = 'Vue.js Error: Invalid email format!';
                this.vueMessageClass = 'text-danger';
            } else if (!this.formData.terms) {
                this.vueMessage = 'Vue.js Error: You must accept the terms to continue!';
                this.vueMessageClass = 'text-danger';
            } else {
                this.vueMessage = 'Vue.js: Validation Successful! You can now submit the form.';
                this.vueMessageClass = 'text-success';
            }
        }
    }
}).mount('#app');