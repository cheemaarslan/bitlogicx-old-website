<template>
    <Layout>
        <main id="main">
            <body class="theme-creote left-sidebar">
                <div id="page" class="page_wapper hfeed site">
                    <!---============== wrapper_full =================-->
                    <div id="wrapper_full" class="content_all_warpper">
                        <ProjectDetail :singleproject="singleproject"/>
                    </div>
                </div>
            </body>
        </main>
    </Layout>
</template>

<script>
import ProjectDetail from "@/Components/ProjectDetail.vue";
import Layout from "../Shared/Layout.vue";

export default {
    components: {
    Layout,
    ProjectDetail
},
    props: {
        singleproject: Object
    },
    
    mounted() {
        this.setMetaTags();
    },
    methods: {
        setMetaTags() {
            const metaTitle = document.createElement("meta");
            metaTitle.setAttribute("name", "title");
            metaTitle.setAttribute("content", this.singleproject.meta_title);
            document.head.appendChild(metaTitle);

            const metaTag = document.createElement("meta");
            metaTag.setAttribute("name", "tag");
            metaTag.setAttribute("content", this.singleproject.meta_tag);
            document.head.appendChild(metaTag);

            const metaDescription = document.createElement("meta");
            metaDescription.setAttribute("name", "description");
            metaDescription.setAttribute(
                "content",
                this.singleproject.meta_description
            );
            document.head.appendChild(metaDescription);

            const metaKeyword = document.createElement("meta");
            metaKeyword.setAttribute("name", "keyword");
            metaKeyword.setAttribute(
                "content",
                this.singleproject.meta_keyword
            );
            document.head.appendChild(metaKeyword);

            const ogTitle = document.createElement("meta");
            ogTitle.setAttribute("property", "og:title");
            ogTitle.setAttribute("content", this.singleproject.og_title);
            document.head.appendChild(ogTitle);

            const ogDescription = document.createElement("meta");
            ogDescription.setAttribute("property", "og:description");
            ogDescription.setAttribute(
                "content",
                this.singleproject.og_description
            );
            document.head.appendChild(ogDescription);

            const ogImage = document.createElement("meta");
            ogImage.setAttribute("property", "og:image");
            ogImage.setAttribute("content", this.singleproject.og_image);
            document.head.appendChild(ogImage);
        },
    },
};
</script>
