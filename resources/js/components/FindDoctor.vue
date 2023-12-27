<template>

    <!-- Step 1: Choose Specialization -->
    <div v-if="step === 1">
        <specialization-selector
            v-model="selectedSpecialization"
            @specialization-selected="handleSpecializationSelected"
        />
        <button class="btn btn-primary" @click="previousStep" v-if="step > 1">Previous</button>
        <button class="btn btn-primary" @click="nextStep" v-if="step < 3">Next</button>
    </div>

    <!-- Step 2: Choose Doctor -->
    <div v-if="step === 2">
        <doctor-selector
            :specialization="selectedSpecialization"
            @doctor-selected="handleDoctorSelected"
            v-model="selectedDoctor"
        />
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary" @click="previousStep">Previous</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary" @click="nextStep" v-if="step < 3">Next</button>
            </div>
        </div>
    </div>
 <!-- Step 2: Choose Doctor -->
    <div v-if="step === 3">
        <appoi-component
            :specialization="selectedSpecialization"
            :doctor="selectedDoctor"
            v-model="selectedTime"
            @doctor-selected="handleDoctorSelected"
        />
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary" @click="previousStep">Previous</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary" @click="nextStep" v-if="step < 4">Next</button>
            </div>
        </div>
    </div>
 <!-- Step 2: Choose Doctor -->
    <div v-if="step === 4">
        <appointment-form @form-submitted="handleFormSubmitted" ref="appointmentForm" />
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary" @click="previousStep">Previous</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary" @click="$refs.appointmentForm.submitForm()">Submit</button>
            </div>
        </div>
    </div>


</template>

<script>
import axios from 'axios';
import { defineComponent, ref } from "vue";
import VueMeetingSelector from "vue-meeting-selector";
import "vue-meeting-selector/dist/style.css";
import slotsGenerator from "../helpers/slotsGenerator";
import SpecializationSelector from "../components/SpecializationSelector.vue";
import DoctorSelector from "../components/DoctorSelector.vue";
import AppoiComponent from "../components/AppoiComponent.vue";
import AppointmentForm from "../components/AppointmentForm.vue";

export default defineComponent({
    components: {
        VueMeetingSelector,
        SpecializationSelector,
        DoctorSelector,
        AppointmentForm,
        AppoiComponent
    },
    data() {
        return {
            selectedSpecialization: null,
            selectedDoctor: null,
            selectedTime: null,
            doctors: [],
            submittedFormData: null,
            formData: {
                first_name: '',
                last_name: '',
                email: '',
                phone: '',
                password: '',
                confirmPassword: '',
            },
        };
    },
    setup() {
        const step = ref(1);
        const selectedSpecialization = ref(null);
        const selectedDoctor = ref(null);
        const selectedTime = ref(null);





        const nextStep = () => {
            step.value++;
        };
        const previousStep = () => {
            step.value--;
        };

        return {
            step,
            selectedSpecialization,
            selectedDoctor,
            selectedTime,

            previousStep,
            nextStep,
        };
    },

    methods: {
        onDoctorSelected(doctor) {
            // Handle the selected doctor
            console.log('Selected Doctor:', doctor);
            // You might want to store the selected doctor or perform other actions here
            this.selectedDoctor = doctor;
            // Move to the next step
            this.nextStep();
        },

        handleSpecializationSelected(specializationId) {
            this.selectedSpecialization = specializationId;
            console.log('handleSpecializationSelected' + this.selectedSpecialization)
        },

        handleDoctorSelected(doctorId) {
            this.selectedDoctor = doctorId;
            console.log('handleDoctorSelected', this.selectedDoctor);
        },
        handleSelectedTime(selectedTime) {
            console.log("Selected Time in Parent:", selectedTime);
        },

        submitForm() {
            this.$refs.appointmentForm.submitForm();
        },

        async handleFormSubmitted(formData) {
            try {
                const apiResponse = await axios.post('/api/submit-appointment-form', {
                    first_name: formData.first_name,
                    last_name: formData.last_name,
                    email: formData.email,
                    phone: formData.phone,
                    password: formData.password,

                    selectedTime: this.selectedTime.date,
                    selectedDoctor: this.selectedDoctor,
                });

                console.log('API Response:', formData);
                console.log('API Response:', apiResponse.data);

                // Optionally, emit an event to notify the parent component
                this.$emit('form-submitted', apiResponse.data);

                // Move to the next step or perform other actions
                // this.nextStep();
            } catch (error) {
                console.error('API Request Error:', error);
                // Handle API request error if needed
            }
        },
    },
});
</script>
