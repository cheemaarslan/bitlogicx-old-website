<template>
    <div class="page_header_default style_one">
        <div class="parallax_cover">
            <div class="simpleParallax">
                <img
                    :src="singleservice.banner_service_image"
                    alt="bg_image"
                    class="cover-parallax"
                />
            </div>
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                {{ singleservice.service_name }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="breadcrumbs creote">
                            <ul class="breadcrumb m-auto">
                                <li>
                                    <a :href="route('front.index')">Home</a>
                                </li>
                                <li>
                                    <a :href="route('front.services')"
                                        >Services</a
                                    >
                                </li>
                                <li class="active">
                                    {{ singleservice.service_name }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----page-CONTENT----->
    <div id="content" class="site-content">
        <div class="auto-container">
            <div class="row default_row">
                <div
                    id="primary"
                    class="content-area service col-lg-8 col-md-12 col-sm-12 col-xs-12"
                >
                    <main id="main" class="site-main" role="main">
                        <!--===============spacing==============-->
                        <div class="pd_top_50"></div>
                        <!--===============spacing==============-->
                        <article
                            class="clearfix service type-service status-publish has-post-thumbnail hentry"
                        >
                            <div class="title_all_box style_one dark_color">
                                <div class="title_sections left">
                                    <div class="before_title">
                                        {{ singleservice.subtitle }}
                                    </div>
                                    <div class="title">
                                        {{ singleservice.service_name }}
                                    </div>
                                    <p>
                                        {{ singleservice.sub_description }}
                                    </p>
                                    <div
                                        v-html="singleservice.description"
                                    ></div>
                                </div>
                            </div>
<!--                            <div class="row no-space">-->
<!--                                <div-->
<!--                                    v-for="card in singleservice.cards"-->
<!--                                    :key="card.id"-->
<!--                                    class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5 mb-lg-5 mb-xl-0 ps-0 ps-lg-0 pe-0 pe-lg-0 pe-xl-3"-->
<!--                                >-->
<!--                                    <div class="icon_box_all style_one">-->
<!--                                        <div class="icon_content">-->
<!--                                            <div class="icon">-->
<!--                                                <img-->
<!--                                                    :src="cardicon"-->
<!--                                                    class="img-fluid svg_image"-->
<!--                                                    alt="icon png"-->
<!--                                                />-->
<!--                                            </div>-->
<!--                                            <div class="txt_content">-->
<!--                                                <h3>-->
<!--                                                    {{ card.title }}-->
<!--                                                </h3>-->
<!--                                                <p>{{ card.description }}</p>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    &lt;!&ndash;===============spacing==============&ndash;&gt;-->
<!--                                    <div class="pd_bottom_25"></div>-->
<!--                                    &lt;!&ndash;===============spacing==============&ndash;&gt;-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            &lt;!&ndash;===============spacing==============&ndash;&gt;-->
<!--                            <div class="pd_bottom_25"></div>-->
                            <!--===============spacing==============-->
                        </article>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_65"></div>
                        <!--===============spacing==============-->
                    </main>
                </div>
                <aside
                    id="secondary"
                    class="widget-area all_side_bar col-lg-4 col-md-12 col-sm-12"
                >
                    <div class="service_siderbar side_bar">
                        <!--===============spacing==============-->
                        <div class="pd_top_50"></div>
                        <!--===============spacing==============-->

                        <div class="simple_image_boxes">
                            <img
                                :src="singleservice.service_image"
                                class="object-fit-cover-center"
                                alt="service-image"
                            />
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_25"></div>
                        <!--===============spacing==============-->

                        <div class="widgets_grid_box">
                            <div class="widget creote_widget_service_list">
                                <h4 class="widget-title">Other Services</h4>
                                <ul class="service_list_box">
                                    <li
                                        v-for="(
                                            item, index
                                        ) in displayedServices"
                                        :key="item.id"
                                    >
                                        <a :href="getServiceRoute(item.slug)">{{
                                            item.service_name
                                        }}</a>
                                    </li>
                                </ul>

                                <div class="theme_btn_all color_one">
                                    <a
                                        v-if="!showAllServices"
                                        @click="toggleShowAllServices"
                                        target="_blank"
                                        rel="nofollow"
                                        class="theme-btn four d-flex justify-content-center"
                                        >Show more
                                        <i class="icon-right-arrow"></i
                                    ></a>
                                </div>
                            </div>
                        </div>
<!--                        <div class="widgets_grid_box">-->
<!--                            <div-->
<!--                                id="creote-contactus-3"-->
<!--                                class="widget widget_contactus"-->
<!--                            >-->
<!--                                <div class="contact_box_widget widget_box">-->
<!--                                    <div class="widget_content">-->
<!--                                        <img-->
<!--                                            :src="widgetbgimage"-->
<!--                                            alt="backgroundimage"-->
<!--                                        />-->
<!--                                        <div class="top_section">-->
<!--                                            <h3>Have Questions?</h3>-->
<!--                                            <p>Reach Our Expert Team</p>-->
<!--                                        </div>-->
<!--                                        <div class="bottom_section">-->
<!--                                            <a :href="emailLink">{{-->
<!--                                                $page.props.content[-->
<!--                                                    "contact_email"-->
<!--                                                ].value-->
<!--                                            }}</a>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                    <a-->
<!--                                        :href="route('front.contact')"-->
<!--                                        class="theme-btn one"-->
<!--                                        target="_blank"-->
<!--                                        >Contact Us</a-->
<!--                                    >-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        &lt;!&ndash;===============spacing==============&ndash;&gt;-->
<!--                        <div class="pd_bottom_65"></div>-->
                        <!--===============spacing==============-->
                    </div>
                </aside>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        singleservice: Object,
        allServices: Array,
    },
    data() {
        return {
            showAllServices: false,
            displayedServicesCount: 5,
            cardicon: "/front/assets/images/icon-image-nike.png",
            widgetbgimage: "/front/assets/images/service-sidebar-contact-bg.jpg",
        };
    },
    computed: {
        emailLink() {
            const email = this.$page.props.content["contact_email"].value;
            return `mailto:${email}`;
        },
        displayedServices() {
            if (this.showAllServices) {
                return this.allServices;
            } else {
                return this.allServices.slice(0, this.displayedServicesCount);
            }
        },
    },
    methods: {
        getServiceRoute(serviceSlug) {
            return `/service/${serviceSlug}`;
        },
        toggleShowAllServices() {
            this.showAllServices = !this.showAllServices;
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
.icon_box_all.style_one {
    /* Hide both horizontal and vertical scrollbars */
    overflow: hidden;

    /* Display vertical scrollbar only when needed */
    overflow-y: auto;
    height: 250px;
}

/* Webkit-specific scrollbar styling to hide it */
.icon_box_all.style_one::-webkit-scrollbar {
    display: none;
}
</style>

