<template>
    <Layout>
        <main id="main">
            <!-- Page Header -->
            <div class="page_header_default style_one">
                <div class="parallax_cover">
                    <img :src="applicationbannerimg" alt="bg_image" class="cover-parallax" />
                </div>
                <div class="page_header_content">
                    <div class="auto-container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner_title_inner">
                                    <div class="title_page">Application</div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="breadcrumbs creote">
                                    <ul class="breadcrumb m-auto">
                                        <li>
                                            <a :href="route('front.index')">Home</a>
                                        </li>
                                        <li>
                                            <a :href="route('front.careers')">All Careers List</a>
                                        </li>
                                        <li class="active">
                                            {{ career.career_name }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Spacing -->
            <div class="pd_bottom_10"></div>

            <!-- Contact Section -->
            <section id="contact" class="contact">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title_all_box style_seven text-center dark_color">
                                <div class="title_sections">
                                    <div class="before_title">
                                        <span class="icon-briefcase icon"></span>
                                        Career
                                    </div>
                                    <div class="title">Join Our Team</div>
                                    <p class="description_text">
                                        Be part of a dynamic and innovative team
                                        <br />
                                        where your skills and contributions are
                                        valued, and together, we'll make a
                                        difference.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <!-- Success Message Box -->
                        <div class="alert alert-success alert-dismissible fade show sent-message" role="alert" v-if="
                            $page.props.flash.status &&
                            !$page.props.flash.error
                        " style="width: 70%">
                            {{ $page.props.flash.status }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <!-- Error Message Box -->
                        <div class="alert alert-danger alert-dismissible fade show sent-message" role="alert"
                            v-if="$page.props.flash.error" style="width: 70%">
                            {{ $page.props.flash.error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <!-- Career Description -->
                        <div class="col-lg-12">
                            <div class="title_all_box style_seven text-center dark_color">
                                <div class="before_title">
                                    "{{ career.body }}"
                                </div>
                            </div>
                        </div>

                        <!-- Application Form -->
                        <div class="col-lg-8">
                            <form @submit.prevent="
                                form.post('/application', {
                                    onSuccess: resetForm,
                                })
                                " class="php-email-form">
                                <!-- Form Inputs -->
                                <div class="row">
                                    <!-- Input Fields -->
                                    <div class="col-md-12 form-group">
                                        <input type="text" :value="career.career_name" class="form-control"
                                            style="text-align: center" id="career_name" required readonly />
                                        <div class="error-message" v-if="form.errors.first_name">
                                            {{ form.errors.first_name }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" v-model="form.first_name" class="form-control"
                                            id="first_name" placeholder="Your First Name" required />
                                        <div class="error-message" v-if="form.errors.first_name">
                                            {{ form.errors.first_name }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" v-model="form.last_name" class="form-control" id="last_name"
                                            placeholder="Your Last Name" required />
                                        <div class="error-message" v-if="form.errors.last_name">
                                            {{ form.errors.last_name }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="number" v-model="form.contact_no" class="form-control"
                                            id="contact_no" placeholder="Contact No" required />
                                        <div class="error-message" v-if="form.errors.contact_no">
                                            {{ form.errors.contact_no }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" v-model="form.email" class="form-control" id="email"
                                            placeholder="Your Email" required />
                                        <div class="error-message" v-if="form.errors.email">
                                            {{ form.errors.email }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control position" v-model="form.gender" id="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">
                                                Female
                                            </option>
                                        </select>
                                        <div class="error-message" v-if="form.errors.gender">
                                            {{ form.errors.gender }}
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="file" class="form-control" @input="
                                            form.resume =
                                            $event.target.files[0]
                                            " required />
                                        <div class="error-message" v-if="form.errors.resume">
                                            {{ form.errors.resume }}
                                        </div>
                                        <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                            {{ form.progress.percentage }}%
                                        </progress>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea v-model="form.message" cols="40" rows="10"
                                            class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                            placeholder="Enter Your Message"></textarea>
                                        <div class="error-message" v-if="form.errors.message">
                                            {{ form.errors.message }}
                                        </div>
                                    </div>
                                    <div class="col-12 form-group mt-3" style="
                                            display: flex;
                                            justify-content: center;
                                        "></div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-center">
                                    <button type="submit">
                                        Submit Your Application
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </Layout>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";
import Layout from "../Shared/Layout.vue";

export default {
    components: { Layout },
    props: {
        career: Object,
    },
    setup() {
        const initialFormData = () => ({
            first_name: null,
            last_name: null,
            email: null,
            gender: "Male",
            contact_no: null,
            resume: null,
            message: null,
        });

        const form = useForm(initialFormData());

        const resetForm = () => {
            form.reset();
        };

        return { form, resetForm };
    },
    data() {
        return {
            applicationbannerimg: "/front/assets/images/career-bg.jpg",
        };
    },
};
</script>

<style scoped>
.page_header_default::before {
    opacity: 0.5;
}

.page_header_default .parallax_cover img {
    max-width: 100%;
    height: 66% !important;
    width: 100% !important;
    -o-object-fit: cover;
    object-fit: cover;
    margin-bottom: 0px;
}

.sent-message {
    margin-top: 20px;
}

.error-message {
    color: red;
    margin-top: 5px;
}
</style>
