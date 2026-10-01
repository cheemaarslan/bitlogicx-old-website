<template>
    <Layout>
        <main id="main">
            <!----preloader----->
            <!-- <div class="preloader-wrap">
                <div
                    class="preloader"
                    
                ></div>
                <div class="overlay"></div>
            </div> -->
            <!----preloader----->
            <HomeBanner
                v-if="home_page_content.enable_banner_section"
                :home_page_content="home_page_content"
            />
            <ServiceList
                v-if="home_page_content.enable_service_section"
                :services="services"
            />
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="theme_btn_all color_one">
                    <a
                       :href="route('front.services')"
                        target="_blank"
                        rel="nofollow"
                        class="theme-btn four"
                        >Show All<i class="icon-right-arrow"></i
                    ></a>
                </div>
                <!--===============spacing==============-->
                <div class="pd_bottom_60"></div>
                <!--===============spacing==============-->
            </div>
            <ProjectSlider
                v-if="home_page_content.enable_project_section"
                :projects="projects"
            />
            <ProcessList
                v-if="home_page_content.enable_process_section"
                :processes="processes"
            />
            <!-- <CallAction /> -->

            <!-- <TeamList
                v-if="home_page_content.enable_team_section"
                :teams="teams"
            /> -->
            <FeaturesAndUpdates />
            <ClientsAndPartners />
            <Whatsapp v-if="enable_whatsapp" :whatsapp_link="whatsapp_link" />
        </main>
    </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";
import FeaturesAndUpdates from "../Components/FeaturesAndUpdates.vue";
import HomeBanner from "../Components/HomeBanner.vue";
import ProjectSlider from "../Components/ProjectSlider.vue";
import ServiceList from "../Components/ServiceList.vue";
import ProcessList from "../Components/ProcessList.vue";
// import TeamList from "../Components/TeamList.vue";
import Whatsapp from "../Components/Whatsapp.vue";
import ClientsAndPartners from "../Components/ClientsAndPartners.vue";

export default {
    components: {
        Layout,
        FeaturesAndUpdates,
        HomeBanner,
        ProjectSlider,
        ServiceList,
        ProcessList,
        // TeamList,
        Whatsapp,
        ClientsAndPartners,
    },
    props: {
        home_page_content: Object,
        projects: Object,
        services: Object,
        processes: Object,
        // teams: Object,
        enable_whatsapp: Boolean,
        whatsapp_link: String,
    },
};
</script>
