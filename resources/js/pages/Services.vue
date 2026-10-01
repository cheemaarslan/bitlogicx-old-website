<template>
    <Layout>
        <main id="main">
            <body class="theme-creote">
                <div id="page" class="page_wapper hfeed site">
                    <!---============== wrapper_full =================-->
                    <div id="wrapper_full" class="content_all_warpper">
                        <!----header end----->
                        <div class="page_header_default style_one">
                            <div class="parallax_cover">
                                <div class="simpleParallax">
                                    <img
                                        src="front/assets/images/services-bg.jpg"
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
                                                    Our Services
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="breadcrumbs creote">
                                                <ul class="breadcrumb m-auto">
                                                    <li>
                                                        <a
                                                            :href="
                                                                route(
                                                                    'front.index'
                                                                )
                                                            "
                                                            >Home</a
                                                        >
                                                    </li>
                                                    <li class="active">
                                                        Our Services
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----header----->
                        <ServiceList :services="services" />
                    </div>
                </div>
            </body>
        </main>
    </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";

import ServiceList from "../Components/ServiceList.vue";

export default {
    components: {
        Layout,
        ServiceList,
    },
    props: {
        services: Object,
    },
};
</script>
<style scoped>
.page_header_default::before {
    opacity: 0.5;
}
</style>
