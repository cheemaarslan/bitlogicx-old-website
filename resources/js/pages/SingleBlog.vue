<template>
    <Layout>
        <main id="main">
            <body class="theme-creote left-sidebar">
                <div id="page" class="page_wapper hfeed site">
                    <!---============== wrapper_full =================-->
                    <div id="wrapper_full" class="content_all_warpper">
                        <BlogDetail
                            :singleblog="singleblog"
                            :allBlog="allBlog"
                        />
                    </div>
                </div>
            </body>
        </main>
    </Layout>
</template>

<script>
import Layout from "../Shared/Layout.vue";
import BlogDetail from "../Components/BlogDetail.vue";
export default {
    components: {
        Layout,
        BlogDetail,
    },
    props: {
        singleblog: Object,
        allBlog: Array,
    },

    mounted() {
        this.setMetaTags();
    },
    methods: {
        setMetaTags() {
            const metaTitle = document.createElement("meta");
            metaTitle.setAttribute("name", "title");
            metaTitle.setAttribute("content", this.singleblog.meta_title);
            document.head.appendChild(metaTitle);

            const metaTag = document.createElement("meta");
            metaTag.setAttribute("name", "tag");
            metaTag.setAttribute("content", this.singleblog.meta_tag);
            document.head.appendChild(metaTag);

            const metaDescription = document.createElement("meta");
            metaDescription.setAttribute("name", "description");
            metaDescription.setAttribute(
                "content",
                this.singleblog.meta_description
            );
            document.head.appendChild(metaDescription);

            const metaKeyword = document.createElement("meta");
            metaKeyword.setAttribute("name", "keyword");
            metaKeyword.setAttribute("content", this.singleblog.meta_keyword);
            document.head.appendChild(metaKeyword);

            const ogTitle = document.createElement("meta");
            ogTitle.setAttribute("property", "og:title");
            ogTitle.setAttribute("content", this.singleblog.og_title);
            document.head.appendChild(ogTitle);

            const ogDescription = document.createElement("meta");
            ogDescription.setAttribute("property", "og:description");
            ogDescription.setAttribute(
                "content",
                this.singleblog.og_description
            );
            document.head.appendChild(ogDescription);

            const ogImage = document.createElement("meta");
            ogImage.setAttribute("property", "og:image");
            ogImage.setAttribute("content", this.singleblog.og_image);
            document.head.appendChild(ogImage);
        },
    },
};
</script>
