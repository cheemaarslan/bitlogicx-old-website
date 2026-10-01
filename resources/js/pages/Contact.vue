<template>
    <Layout>
        <main id="main">
            <!---============== wrapper_full =================-->
            <div id="wrapper_full" class="content_all_warpper">
                <div class="page_header_default style_one">
                    <div class="parallax_cover">
                        <div class="simpleParallax">
                            <img src="front/assets/images/contact-us.jpg" alt="bg_image" class="cover-parallax" />
                        </div>
                    </div>
                    <div class="page_header_content">
                        <div class="auto-container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="banner_title_inner">
                                        <div class="title_page">Contact</div>
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
                                            <li class="active">Contact</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pd_top_20"></div>

                <div id="content" class="site-content">
                    <section class="contact-section">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                                    <div class="contact_form_box_all type_one">
                                        <div class="contact_form_box_inner">
                                            <div class="contact_form_shortcode">
                                                <form @submit.prevent="submitForm" class="php-email-form contact-form">
                                                    <div class="my-3">
                                                        <div class="sent-message alert alert-success" role="alert"
                                                            v-if="$page.props.flash.status">
                                                            {{ $page.props.flash.status }}
                                                        </div>
                                                    </div>
                                                    <div class="messages"></div>
                                                    <p>
                                                        <label> Your name<br />
                                                            <input type="text" id="name" v-model="form.name" size="40"
                                                                aria-required="true" aria-invalid="false"
                                                                placeholder="Enter Your Name"
                                                                data-error="Enter Your Name" />
                                                            <br />
                                                            <i class="fa fa-user"></i><br />
                                                        </label>
                                                    <div class="alert alert-danger" v-if="form.errors.name">
                                                        {{ form.errors.name }}
                                                    </div>
                                                    </p>
                                                    <p>
                                                        <label> Your email<br />
                                                            <input type="email" v-model="form.email" id="email"
                                                                size="40" aria-required="true" aria-invalid="false"
                                                                placeholder="Enter Your Email" />
                                                            <br />
                                                            <i class="fa fa-envelope"></i><br />
                                                        </label>
                                                    <div class="alert alert-danger" v-if="form.errors.email">
                                                        {{ form.errors.email }}
                                                    </div>
                                                    </p>
                                                    <p>
                                                        <label> Subject<br />
                                                            <input type="text" v-model="form.subject" id="subject"
                                                                size="40" aria-required="true" aria-invalid="false"
                                                                placeholder="Enter Your Subject" />
                                                            <br />
                                                            <i class="fa fa-folder"></i><br />
                                                        </label>
                                                    <div class="alert alert-danger" v-if="form.errors.subject">
                                                        {{ form.errors.subject }}
                                                    </div>
                                                    </p>
                                                    <p>
                                                        <label> Your message <br />
                                                            <textarea v-model="form.message" cols="40" rows="10"
                                                                class="wpcf7-form-control wpcf7-textarea"
                                                                aria-invalid="false"
                                                                placeholder="Enter Your Message"></textarea>
                                                            <br />
                                                            <i class="fa fa-comments"></i><br />
                                                        </label>
                                                    <div class="alert alert-danger" v-if="form.errors.message">
                                                        {{ form.errors.message }}
                                                    </div>
                                                    </p>
                                                    <div class="theme_btn_all color_one">
                                                        <button type="submit" class="theme-btn one">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 pd_left_30">
                                    <div class="title_all_box style_one dark_color">
                                        <div class="title_sections left">
                                            <div class="before_title">Contact Info</div>
                                            <h2>Reach Our Expert Team</h2>
                                            <p>
                                                No matter where your company is located, we'll provide you one time free
                                                consultancy in your call. Just head to our website and Our team will
                                                call you back within four Business days. Looking forward to consult.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact_box_content style_one">
                                        <div class="contact_box_inner icon_yes">
                                            <div class="icon_bx">
                                                <span class="icon-placeholder"></span>
                                            </div>
                                            <div class="contnet" style="cursor: default">
                                                <h3>Post Address</h3>
                                                <!-- Wrap the address in an anchor tag -->
                                                <a :href="googleMapsLink" target="_blank">
                                                    {{ $page.props.content["contact_address"].value }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_15"></div>
                                    <!--===============spacing==============-->
                                    <div class="contact_box_content style_one">
                                        <div class="contact_box_inner icon_yes">
                                            <div class="icon_bx">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                            <div class="contnet row">
                                                <h3>General Enquiries</h3>
                                                <p class="row">
                                                    <span style="cursor: default">Email:</span>
                                                    <a :href="emailLink">{{ $page.props.content["contact_email"].value
                                                        }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_15"></div>
                                    <!--===============spacing==============-->
                                    <div class="contact_box_content style_one">
                                        <div class="contact_box_inner icon_yes">
                                            <div class="icon_bx">
                                                <span class="fa fa-clock-o"></span>
                                            </div>
                                            <div class="contnet">
                                                <h3 style="cursor: default">Operation Hours</h3>
                                                <p style="cursor: default">
                                                    Mon-Friday: 10:00 to 18:00 (Saturday &amp; Sunday : Closed)
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_40"></div>
                                    <!--===============spacing==============-->
                                    <div class="social_media_v_one style_two">
                                        <ul>
                                            <li>
                                                <a :href="$page.props.content['facebook'].value">
                                                    <span class="fa fa-facebook"></span>
                                                    <small>facebook</small>
                                                </a>
                                            </li>
                                            <li>
                                                <a :href="$page.props.content['twitter'].value">
                                                    <span class="fa fa-twitter"></span>
                                                    <small>twitter</small>
                                                </a>
                                            </li>
                                            <li>
                                                <a :href="$page.props.content['linkedin'].value">
                                                    <span class="fa fa-linkedin"></span>
                                                    <small>Linkedin</small>
                                                </a>
                                            </li>
                                            <li>
                                                <a :href="$page.props.content['instagram'].value">
                                                    <span class="fa fa-instagram"></span>
                                                    <small>instagram</small>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="pd_top_20"></div>
                    <section class="contact-map-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="responsive-iframe-container">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6807.625612776941!2d74.25854022217578!3d31.446820012034177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919011903fb5d01%3A0x84223e5b8bcf419c!2sBitLogicx!5e0!3m2!1sen!2s!4v1686029256290!5m2!1sen!2s"
                                            frameborder="0" style="border: 0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="pd_bottom_10"></div>
                </div>
            </div>
        </main>
    </Layout>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";
import Layout from "../Shared/Layout.vue";

export default {
    components: { Layout },
    props: {
        faqs: Object,
        NOCAPTCHA_SITEKEY: String,
        enable_contact: Boolean,
    },
    setup() {
        const form = useForm({
            name: null,
            email: null,
            subject: null,
            message: null,
            recaptchaToken: null,
        });
        return { form };
    },
    methods: {
        async submitForm() {
            // Get the reCAPTCHA token
            const recaptchaToken = await this.executeRecaptcha();
            this.form.recaptchaToken = recaptchaToken;

            // Submit the form
            this.form.post('/contact', {
                onSuccess: () => {
                    this.form.reset();
                },
            });
        },
        executeRecaptcha() {
            return new Promise((resolve) => {
                grecaptcha.ready(() => {
                    grecaptcha.execute(this.NOCAPTCHA_SITEKEY, { action: 'submit' }).then((token) => {
                        resolve(token);
                    });
                });
            });
        },
    },
    computed: {
        emailLink() {
            const email = this.$page.props.content["contact_email"].value;
            return `mailto:${email}`;
        },
        googleMapsLink() {
            const address = this.$page.props.content["contact_address"].value;
            return `https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(address)}`;
        }
    },
};
</script>

<style scoped>
.responsive-iframe-container {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%;
    /* 16:9 aspect ratio (height:width) */
}

.responsive-iframe-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.page_header_default::before {
    opacity: 0.5;
}
</style>
