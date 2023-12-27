<template>
    <div class="row g-0 bg-light rounded overflow-hidden">
        <div class="col-12 col-sm-5 h-100">
            <img
                class="img-fluid w-100 h-100"
                :src="doctor.profile_picture"
                style="object-fit: cover;"
                alt="Doctor Profile Picture"
            />
        </div>
        <div class="col-12 col-sm-7 h-100 d-flex flex-column">
            <div class="mt-auto p-4">
                <h3>{{ doctor.first_name }} {{ doctor.last_name }}</h3>
                <h6 class="fw-normal fst-italic text-primary mb-4">{{ doctor.specialty_id }}</h6>
                <p class="m-0">Dolor lorem eos dolor duo eirmod sea. Dolor sit magna rebum clita rebum dolor</p>
            </div>
            <div class="d-flex mt-auto border-top p-4">
                <a
                    class="btn btn-lg"
                    :class="{ 'selected': isSelected }"
                    @click="chooseDoctor(index, doctor.id)"
                >
                    Choose
                </a>
            </div>
        </div>
    </div>

</template>

<script>
import { defineComponent } from 'vue';

export default defineComponent({
    props: {
        doctor: Object,
        isSelected: Boolean,
    },
    methods: {
        chooseDoctor(index, doctorId) {
            this.selectedIndex = index;
            console.log(doctorId);
            this.$emit('choose', doctorId); // Emit the doctor ID
        },
    },
});
</script>

<style scoped>
.selected {
    background-color: #ffcbdf;
}
</style>
