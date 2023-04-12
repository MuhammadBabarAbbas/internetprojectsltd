/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';
import './jquery-3.6.4.min';
import './scripts/script.js';
import * as Vue from 'vue'
import App from './components/App';
import './styles/app.css';

new Vue({
    el: '#app',
	name: 'App',
	components: {App},
    render: h => h(App)
});