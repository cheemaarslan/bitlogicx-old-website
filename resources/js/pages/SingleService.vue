<template>
    <Layout>
        <main id="main">
            <body class="theme-creote left-sidebar">
                <div id="page" class="page_wapper hfeed site">
                    <!---============== wrapper_full =================-->
                    <div id="wrapper_full" class="content_all_warpper">
                        <ServiceDetail :singleservice="singleservice" :allServices="allServices"/>
                    </div>
                </div>
            </body>
        </main>
    </Layout>
</template>

<script>
import ServiceDetail from "@/Components/ServiceDetail.vue";
import Layout from "../Shared/Layout.vue";

export default {
    components: {
        Layout,
        ServiceDetail,
    },
    props: {
        singleservice: Object,
        allServices: Array,
    },
    
    mounted() {
        this.setMetaTags();
    },
    methods: {
        setMetaTags() {
            const metaTitle = document.createElement("meta");
            metaTitle.setAttribute("name", "title");
            metaTitle.setAttribute("content", this.singleservice.meta_title);
            document.head.appendChild(metaTitle);

            const metaTag = document.createElement("meta");
            metaTag.setAttribute("name", "tag");
            metaTag.setAttribute("content", this.singleservice.meta_tag);
            document.head.appendChild(metaTag);

            const metaDescription = document.createElement("meta");
            metaDescription.setAttribute("name", "description");
            metaDescription.setAttribute(
                "content",
                this.singleservice.meta_description
            );
            document.head.appendChild(metaDescription);

            const metaKeyword = document.createElement("meta");
            metaKeyword.setAttribute("name", "keyword");
            metaKeyword.setAttribute(
                "content",
                this.singleservice.meta_keyword
            );
            document.head.appendChild(metaKeyword);

            const ogTitle = document.createElement("meta");
            ogTitle.setAttribute("property", "og:title");
            ogTitle.setAttribute("content", this.singleservice.og_title);
            document.head.appendChild(ogTitle);

            const ogDescription = document.createElement("meta");
            ogDescription.setAttribute("property", "og:description");
            ogDescription.setAttribute(
                "content",
                this.singleservice.og_description
            );
            document.head.appendChild(ogDescription);

            const ogImage = document.createElement("meta");
            ogImage.setAttribute("property", "og:image");
            ogImage.setAttribute("content", this.singleservice.og_image);
            document.head.appendChild(ogImage);
        },
    },
};
</script>
