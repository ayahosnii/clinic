<template>
    <div>
        <table>
            <thead>
        <Splide :options="splideOptions">
            <SplideSlide>
                <div class="day-row">
                    <th v-for="day in days" :key="day.date" class="day-card">
                        <div class="day-name">{{ day.name }}</div>
                        <div class="day-date">{{ day.date }}</div>
                    </th>
                </div>
            </SplideSlide>
        </Splide>
        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev" @click="prevWeek">Prev</button>
            <button class="splide__arrow splide__arrow--next" @click="nextWeek">Next</button>
        </div>
            </thead>
            <tbody>
        <Splide :options="splideOptions">
            <SplideSlide>
                <div class="day-row">
                    <tr v-for="day in days" :key="day.date" class="day-card">
                        <div v-if="timeSlotsData[day.date] && timeSlotsData[day.date].length">
                            <div class="day-name" v-for="timeSlot in timeSlotsData[day.date]" :key="timeSlot">
                                <button class="btn btn-secondary my-3">{{ timeSlot }}</button>
                            </div>
                        </div>
                        <div v-else>
                            <div>No time slots available for this day</div>
                        </div>
                    </tr>
                </div>
            </SplideSlide>
        </Splide>
        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev" @click="prevWeek">Prev</button>
            <button class="splide__arrow splide__arrow--next" @click="nextWeek">Next</button>
        </div>
            </tbody>
        </table>

        <button class="btn btn-primary m-5">Next</button>
    </div>
</template>

<script>
import VueSplide from '@splidejs/vue-splide';
import '@splidejs/splide/dist/css/splide.min.css';
import { Splide, SplideSlide } from '@splidejs/vue-splide';

export default {
    components: {
        VueSplide,
        Splide,
        SplideSlide,
    },
    data() {
        return {
            splideOptions: {
                type: 'slide',
                perPage: 1,
                perMove: 1,
                gap: '1rem',
                arrows: false,
            },
            startDate: new Date(),
            timeSlotsData: {
                'Monday, October 9, 2023': ['10:00 AM', '11:00 AM', '2:00 PM'],
                'Tuesday, October 10, 2023': ['9:00 AM', '1:00 PM', '3:00 PM'],
            },
        };
    },
    computed: {
        days() {
            const days = [];
            let currentDate = new Date(this.startDate);

            while (currentDate.getDay() !== 1) { // Skip days until Monday
                currentDate.setDate(currentDate.getDate() + 1);
            }

            for (let i = 0; i < 5; i++) { // Display Monday to Friday
                const date = new Date(currentDate);
                const options = { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' };
                const formattedDate = date.toLocaleDateString(undefined, options);

                days.push({
                    name: date.toLocaleDateString(undefined, { weekday: 'long' }),
                    date: formattedDate,
                });

                currentDate.setDate(currentDate.getDate() + 1);
            }

            return days;
        },
    },
    methods: {
        nextWeek() {
            const newStartDate = new Date(this.startDate);
            newStartDate.setDate(newStartDate.getDate() + 7);
            this.startDate = newStartDate;
        },
        prevWeek() {
            const newStartDate = new Date(this.startDate);
            newStartDate.setDate(newStartDate.getDate() - 7);
            this.startDate = newStartDate;
        },
    },
};
</script>

<style scoped>
table{
    margin: 3% 0 0 9%;
}
.day-row {
    display: flex;
    justify-content: space-between;
    border: 1px solid #ccc;
    border-radius: 4px 4px 0 0;
}

.day-card {
    padding: 10px;
    text-align: center;
    width: 18%;
    margin: 5px;
}

.day-name {
    font-weight: bold;
}

.day-date {
    margin-top: 5px;
}
</style>
