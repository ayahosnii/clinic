<template>
    <div class="row">
        <div
            v-for="(specialty, index) in specialties"
            :key="index"
            class="col-lg-4 col-md-6 col-sm-12 mb-4"
            @click="selectSpecialty(index, specialty.id)"
            :class="{ 'selected': selectedIndex === index }"
        >
            <div class="shadow-container">
                <div class="row">
                    <div class="col-md-12">
                        <img :src="specialty.image" :alt="specialty.alt" class="spec" />
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <label class="container">
                                    <input type="checkbox" :checked="selectedIndex === index" />
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        {{ specialty.name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <audio ref="selectedSound" src="/assets/sound-effects/click-button.mp3"></audio>
</template>

<script>
export default {
    emits: ['specialization-selected'],
    props: {
        modelValue: null,
    },
    data() {
        return {
            selectedIndex: null,
            specialties: [],
        };
    },
    created() {
        // Fetch specialties when the component is created
        this.fetchSpecialties();
    },
    methods: {
        async fetchSpecialties() {
            try {
                const response = await fetch('http://127.0.0.1:8000/api/specialties');
                const data = await response.json();
                this.specialties = data;
            } catch (error) {
                console.error('Error fetching specialties:', error);
            }
        },
        selectSpecialty(index, specializationId) {
            this.selectedIndex = index;
            console.log(specializationId); // Check if the specializationId is correct
            this.playSelectedSound();
            this.$emit('specialization-selected', specializationId); // Emit the event with the ID
        },
        playSelectedSound() {
            this.$refs.selectedSound.play();
        },
    },
};
</script>

<style scoped>
.spec {
    width: 220px;
    height: 200px;
}

.selected {
    border: 5px solid #ffcbdf;
}

.mb-4 {
    margin-bottom: 1rem;
}

.shadow-container {
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    width: 100%;
    padding: 15px;
}

ul {
    margin: 0;
    padding: 0;
}

.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: -7px;
    left: 60px;
    height: 15px;
    width: 15px;
    background-color: #eee;
    border-radius: 50%;
}

.container:hover input ~ .checkmark {
    background-color: #ccc;
}

.container input:checked ~ .checkmark {
    background-color: #ffcbdf;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.container input:checked ~ .checkmark:after {
    display: block;
}

.container .checkmark:after {
    left: 6px;
    top: 2px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
