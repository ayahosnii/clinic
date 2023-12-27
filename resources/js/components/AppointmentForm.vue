<template>
    <section class="container information-processing-form rounded-2">
        <div class="row d-flex align-items-center">
            <div class="col">
                <form method="post" @submit.prevent="submitForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-1">
                                <input v-model="formData.first_name" type="text" name="first_name" class="form-control shadow-none border-danger" required autocomplete="new-first_name" placeholder="..." />
                                <label for="first_name" class="text-black-50">Enter your First Name</label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-1">
                                <div class="form-floating mb-1">
                                    <input id="last_name" v-model="formData.last_name" type="text" name="last_name" class="form-control shadow-none border-danger" required autocomplete="new-last_name" placeholder="...">
                                    <label for="last_name" class="text-black-50">Enter your Last Name</label>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-1">
                                <input id="email" v-model="formData.email" type="text" name="email" class="form-control shadow-none border-danger" required autocomplete="email" placeholder="...">
                                <label for="email" class="text-black-50">Enter your Email</label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-1">
                                <div class="form-floating mb-1">
                                    <input id="phone" type="number" v-model="formData.phone" name="phone" class="form-control shadow-none border-danger" required autocomplete="new-phone" placeholder="...">
                                    <label for="phone" class="text-black-50">Enter your Phone</label>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-1">
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    v-model="formData.password"
                                    class="form-control shadow-none border-danger"
                                    required
                                    autocomplete="new-password"
                                    placeholder="..."
                                />
                                <label for="password" class="text-black-50">Enter your Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-1">
                                <input
                                    id="confirm_password"
                                    type="password"
                                    name="confirm_password"
                                    class="form-control shadow-none border-danger"
                                    required
                                    autocomplete="new-password"
                                    placeholder="..."
                                    v-model="formData.confirmPassword"
                                />
                                <label for="confirm_password" class="text-black-50">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: {
        formData: Object,
    },
    data() {
        return {
            // Your form data
            formData: {
                // Include other form fields
            },
        };
    },
    methods: {
        submitForm() {
            console.log('hi');
            this.$emit('form-submitted', this.formData);
        },
    },
};
</script>

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

