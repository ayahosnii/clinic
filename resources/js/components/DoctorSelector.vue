<template>
    <Splide :options="options" aria-label="Doctors Carousel">
        <SplideSlide v-for="(doctor, index) in doctors" :key="index">
            <DoctorItem
                :doctor="doctor"
                :isSelected="selectedDoctor === doctor.id"
                @choose="updateSelectedDoctor"
            />
        </SplideSlide>
    </Splide>
</template>

<script>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import { defineComponent } from 'vue';
import DoctorItem from '../components/DoctorItem.vue';

export default defineComponent({
    emits: ['doctor-selected'],
    props: {
        specialization: Number,
    },
    components: {
        Splide,
        SplideSlide,
        DoctorItem,
    },
    data() {
        return {
            doctors: [],
            selectedDoctor: null,
            loading: false,
        };
    },
    watch: {
        specialization: {
            immediate: true,
            handler(newSpecialization) {
                this.fetchDoctors(newSpecialization);
            },
        },
    },
    setup() {
        const options = {
            rewind: true,
            gap: '1rem',
        };

        return { options };
    },
    methods: {
        async fetchDoctors(specializationId) {
            this.loading = true;
            try {
                const response = await fetch(`http://127.0.0.1:8000/api/doctors?specializationId=${specializationId}`);
                const data = await response.json();
                this.doctors = data;
                console.log(this.doctors);
                console.log(specializationId);
            } catch (error) {
                console.error('Error fetching doctors:', error);
            } finally {
                this.loading = false;
            }
        },
        updateSelectedDoctor(doctorId) {
            this.selectedDoctor = this.selectedDoctor === doctorId ? null : doctorId;
            console.log(this.selectedDoctor);
            this.$emit('doctor-selected', this.selectedDoctor);
        },
    },
});
</script>
