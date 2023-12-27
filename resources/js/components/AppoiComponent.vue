<template>
    <div id="app">
        <vue-meeting-selector
            ref="meetingSelector"
            className="meeting-selector"
            v-model="meeting"
            :date="date"
            :loading="false"
            :meetings-days="meetingsDays"
            @next-date="nextDate"
            @previous-date="previousDate"
            @update:modelValue="onMeetingTimeSelected"
        />
        <div v-if="meeting">
            Selected Time: {{ meeting }}
        </div>
    </div>
</template>

<script>
import { defineComponent, ref, watch, onMounted } from "vue";
import VueMeetingSelector from "vue-meeting-selector";
import "vue-meeting-selector/dist/style.css";
import slotsGenerator from "../helpers/slotsGenerator";

export default defineComponent({
    props: {
        specialization: Number,
        doctor: Number,
        modelValue: null,
    },
    components: {
        VueMeetingSelector,
    },
    setup(props, { emit }) {
        const meeting = ref(null);
        const meetingsDays = ref([]);
        const nbDaysToDisplay = ref(7);
        const date = ref(new Date());
        const doctor = ref(props.doctor);

        const onMeetingTimeSelected = (selectedTime) => {
            console.log("Selected Time:", selectedTime);
            emit("update:modelValue", selectedTime); // Use `emit` directly
            emit("selected-time", selectedTime); // Use `emit` directly
        };

        const initMeetingsDays = async (doctorId) => {
            try {
                const response = await fetch(
                    `http://127.0.0.1:8000/api/time-slots?doctorId=${doctorId}`
                );
                const data = await response.json();

                console.log(data);

                // Check if data.time_slots exists and has the expected structure
                if (data && data.time_slots && data.time_slots.start_time && data.time_slots.end_time) {
                    const startTime = data.time_slots.start_time.hours || data.time_slots.start_time;
                    const startMin = data.time_slots.start_time.minutes || data.time_slots.start_time;
                    const endTime = data.time_slots.end_time.hours || data.time_slots.end_time;
                    const endMin = data.time_slots.end_time.minutes || data.time_slots.end_time;
                    const slotDuration = data.time_slots.data.slot_duration;

                    console.log(startTime);
                    console.log(endTime);
                    console.log(slotDuration);

                    // Convert startTime and endTime to integers
                    const startHour = parseInt(startTime);
                    const endHour = parseInt(endTime);

                    console.log('doctorId' + doctorId);

                    const start = {
                        hours: startHour,
                        minutes: startMin,
                    };

                    const end = {
                        hours: endHour,
                        minutes: endMin,
                    };

                    meetingsDays.value = slotsGenerator(
                        new Date(),
                        nbDaysToDisplay.value,
                        start,
                        end,
                        slotDuration
                    );
                } else {
                    console.error("Invalid or incomplete API response structure");
                }
            } catch (error) {
                console.error("Error fetching time slots:", error);
            }
        };

        initMeetingsDays(doctor.value);
        console.log(doctor.value);

        onMounted(() => {
            console.log(doctor.value);
        });

        const meetingSelector = ref(null);

        const up = () => meetingSelector.value.previousMeetings();
        const down = () => meetingSelector.value.nextMeetings();

        const nextDate = async () => {

            try {
                const response = await fetch(
                    `http://127.0.0.1:8000/api/time-slots?doctorId=${doctor.value}`
                );
                const data = await response.json();

                console.log(data);

                // Check if data.time_slots exists and has the expected structure
                if (data && data.time_slots && data.time_slots.start_time && data.time_slots.end_time) {
                    const startTime = data.time_slots.start_time.hours || data.time_slots.start_time;
                    const startMin = data.time_slots.start_time.minutes || data.time_slots.start_time;
                    const endTime = data.time_slots.end_time.hours || data.time_slots.end_time;
                    const endMin = data.time_slots.end_time.minutes || data.time_slots.end_time;
                    const slotDuration = data.time_slots.data.slot_duration;

                    console.log(startTime);
                    console.log(endTime);
                    console.log(slotDuration);

                    // Convert startTime and endTime to integers
                    const startHour = parseInt(startTime);
                    const endHour = parseInt(endTime);


                    const start = {
                        hours: startHour,
                        minutes: startMin,
                    };

                    const end = {
                        hours: endHour,
                        minutes: endMin,
                    };


                    const d = new Date(date.value);
                    const newDate = new Date(d.setDate(d.getDate() + 7));
                    date.value = newDate;
                    meetingsDays.value = slotsGenerator(
                        newDate,
                        nbDaysToDisplay.value,
                        start,
                        end,
                        slotDuration
                    );
                } else {
                    console.error("Invalid or incomplete API response structure");
                }

            } catch (error) {
                console.error("Error fetching time slots:", error);
            }
        };

        const previousDate = async () => {
            try {

                const response = await fetch(
                    `http://127.0.0.1:8000/api/time-slots?doctorId=${doctor.value}`
                );
                const data = await response.json();

                console.log(data);

                // Check if data.time_slots exists and has the expected structure
                if (data && data.time_slots && data.time_slots.start_time && data.time_slots.end_time) {
                    const startTime = data.time_slots.start_time.hours || data.time_slots.start_time;
                    const startMin = data.time_slots.start_time.minutes || data.time_slots.start_time;
                    const endTime = data.time_slots.end_time.hours || data.time_slots.end_time;
                    const endMin = data.time_slots.end_time.minutes || data.time_slots.end_time;
                    const slotDuration = data.time_slots.data.slot_duration;

                    console.log(startTime);
                    console.log(endTime);
                    console.log(slotDuration);

                    // Convert startTime and endTime to integers
                    const startHour = parseInt(startTime);
                    const endHour = parseInt(endTime);


                    const start = {
                        hours: startHour,
                        minutes: startMin,
                    };

                    const end = {
                        hours: endHour,
                        minutes: endMin,
                    };


                const d = new Date(date.value);
                const newDate = new Date(d.setDate(d.getDate() - 7));
                date.value = newDate;
                meetingsDays.value = slotsGenerator(
                    newDate,
                    nbDaysToDisplay.value,
                    start,
                    end,
                    slotDuration
                ); } else {
                    console.error("Invalid or incomplete API response structure");
                }
            } catch (error) {
                console.error("Error fetching time slots:", error);
            }
        };

        console.log(meetingSelector)

        return {
            doctor,
            meeting,
            meetingsDays,
            date,
            meetingSelector,
            up,
            down,
            nextDate,
            previousDate,
            initMeetingsDays,
            onMeetingTimeSelected
        };
    },
});
</script>
