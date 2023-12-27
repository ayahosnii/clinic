/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import { createApp } from 'vue';
import VueSplide from '@splidejs/vue-splide';


/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import AppointmentComponent from './components/AppointmentComponent.vue';
import AppoiComponent from "./components/AppoiComponent.vue";
import FindDoctor from "./components/FindDoctor.vue";
import DoctorSelector from "./components/DoctorSelector.vue";
import SpecializationSelector from "./components/SpecializationSelector.vue";
import AppointmentForm from "./components/AppointmentForm.vue";
app.component('appointment-component', AppointmentComponent);
app.component('doctor-selector', DoctorSelector);
app.component('specialization-selector', SpecializationSelector);
app.component('appointment-form', AppointmentForm);
app.component('appoi-component', AppoiComponent);
app.component('find-doctor', FindDoctor);
app.use( VueSplide );


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/AppointmentComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
