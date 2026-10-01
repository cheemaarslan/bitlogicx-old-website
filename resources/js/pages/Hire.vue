<template>
    <Layout>
        <main id="main">

            <!---============== wrapper_full =================-->
            <div id="wrapper_full" class="content_all_warpper">
                <div class="page_header_default style_one">
                    <div class="parallax_cover">
                        <div class="simpleParallax">
                            <img src="front/assets/images/professional-bg.jpg" alt="bg_image" class="cover-parallax" />
                        </div>
                    </div>
                    <div class="page_header_content">
                        <div class="auto-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner_title_inner">
                                        <div class="title_page">Hire A Professional</div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="breadcrumbs creote">
                                        <ul class="breadcrumb m-auto">
                                            <li>
                                                <a :href="route('front.index')"
                                                >Home</a
                                            >
                                            </li>
                                            <li class="active">Hiring</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===============spacing==============-->
                <div class="pd_top_20"></div>
                <!--===============spacing==============-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title_all_box style_seven text-center dark_color">
                            <div class="title_sections">

                                <div class="title">Hire A Professional</div>

                                <p class="description_text">
                                    Experience the transformative impact of professional expertise, <br />
                                    ensuring your project reaches new heights of quality, precision,
                                    and success.<br /> Trust in proven excellence for outstanding results.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!----page-CONTENT----->
                <div id="content" class="site-content">
                    <section class="contact-section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                                    <div class="contact_form_box_all type_one">
                                        <div class="contact_form_box_inner">
                                            <div class="contact_form_shortcode">
                                                <form @submit.prevent="
                                                    form.post('/hire', {
                                                        onSuccess: () => {
                                                            form.reset();
                                                        },
                                                    })
                                                    " class="php-email-form contact-form">
                                                    <div class="my-3">
                                                        <div class="sent-message alert alert-success" role="alert" v-if="$page.props
                                                            .flash
                                                            .status
                                                            ">
                                                            {{
                                                                $page.props
                                                                    .flash
                                                                    .status
                                                            }}
                                                        </div>
                                                    </div>
                                                    <div class="messages"></div>
                                                    <div class="row">
                                                        <p class="col-md-6" style="padding-right:2px; padding-left:0px">
                                                            <label> Your First name<br />
                                                                <input type="text" id="fname" v-model="form.fname
                                                                        " size="40" aria-required="true"
                                                                    aria-invalid="false" placeholder="First name"
                                                                    data-error="Your First name" />
                                                                <br />
                                                                <i class="fa fa-user"></i><br />
                                                            </label>

                                                        <div class="alert alert-danger" v-if="form
                                                            .errors
                                                            .fname
                                                            ">
                                                            {{
                                                                form
                                                                    .errors
                                                                    .fname
                                                            }}
                                                        </div>
                                                        </p>
                                                        <p class="col-md-6" style="padding-left:2px; padding-right:0px">
                                                            <label> Your Last name<br />
                                                                <input type="text" id="lname" v-model="form.lname
                                                                        " size="40" aria-required="true"
                                                                    aria-invalid="false" placeholder="Last name"
                                                                    data-error="Your Last name" />
                                                                <br />
                                                                <i class="fa fa-user"></i><br />
                                                            </label>

                                                        <div class="alert alert-danger" v-if="form
                                                            .errors
                                                            .lname
                                                            ">
                                                            {{
                                                                form
                                                                    .errors
                                                                    .lname
                                                            }}
                                                        </div>
                                                        </p>
                                                    </div>
                                                    <p><label> Your email<br />
                                                            <input type="email" v-model="form.email
                                                                    " id="email" size="40" aria-required="true"
                                                                aria-invalid="false" placeholder="Enter Your Email" />
                                                            <br />
                                                            <i class="fa fa-envelope"></i><br />
                                                        </label>
                                                    <div class="alert alert-danger" v-if="form
                                                        .errors
                                                        .email
                                                        ">
                                                        {{
                                                            form
                                                                .errors
                                                                .email
                                                        }}
                                                    </div>
                                                    </p>
                                                    <p>
                                                        <label>Select a Service<br />
                                                            <select v-model="form.service" id="service">
                                                                <option value="" disabled selected>Select a service</option>
                                                                <option v-for="service in services" :value="service.value"
                                                                    :key="service.value">
                                                                    {{ service.label }}
                                                                </option>
                                                            </select>

                                                        </label>
                                                    <div class="alert alert-danger" v-if="form
                                                        .errors
                                                        .service
                                                        ">
                                                        {{
                                                            form
                                                                .errors
                                                                .service
                                                        }}
                                                    </div>
                                                    </p>
                                                    <p>
                                                        <label> Your message <br />
                                                            <textarea v-model="form.message
                                                                    " cols="40" rows="10"
                                                                class="wpcf7-form-control wpcf7-textarea"
                                                                aria-invalid="false"
                                                                placeholder="Enter Your Message"></textarea>
                                                            <br />
                                                            <i class="fa fa-comments"></i><br />
                                                        </label>
                                                    <div class="alert alert-danger" v-if="form
                                                        .errors
                                                        .message
                                                        ">
                                                        {{
                                                            form
                                                                .errors
                                                                .message
                                                        }}
                                                    </div>
                                                    </p>

                                                    <p><button type="submit">
                                                            Get A Quotation
                                                        </button></p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_20"></div>
                <!--===============spacing==============-->
            </div>
        </main>
    </Layout>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";
import Layout from "../Shared/Layout.vue";


export default {
    components: { Layout },
    setup() {
        const form = useForm({
            fname: null,
            lname: null,
            email: null,
            service: null,
            message: null,
        });
        return { form };
    },

    data() {
        return {
            services: [
                { value: 'Web Application Development', label: 'Web Application Development' },
                { value: 'Mobile Application Development', label: 'Mobile Application Development' },
                { value: 'Graphic Designing', label: 'Graphic Designing' },
                { value: 'Search Engine Optimization', label: 'Search Engine Optimization' },
                { value: 'Embedded Systems', label: 'Embedded Systems' },
                { value: 'Digital Marketing', label: 'Digital Marketing' },
            ],
        };
    },
    computed: {
        emailLink() {
            const email = this.$page.props.content["contact_email"].value;
            return `mailto:${email}`;
        },
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
</style>
