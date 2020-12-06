import './styles/app.css';
import './bootstrap';

import Vue from 'vue'
import App from './views/App';

new Vue({
    render(h) {
        return h(App, {
            props: {
                message: this.$el.getAttribute('message'),
            },
        })
    },
}).$mount('#app')

