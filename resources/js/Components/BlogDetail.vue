<template>
    <div id="content" class="site-content">
        <div class="auto-container">
            <div class="row default_row">
                <div
                    id="primary"
                    class="service col-lg-12 col-md-12 col-sm-12 col-xs-12"
                >
                    <main id="main" class="site-main" role="main">
                        <section class="blog_single_details_outer">

                                <div class="blog_feature_image">
                                    <img
                                        :src="singleblog.blog_image"
                                        class="wp-post-image center"
                                        alt="img"
                                    />
                                </div>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_20"></div>
                                <!--===============spacing==============-->
                                <div class="container-sm">
                                    <div class="widgets_grid_box">
                                        <div class="widget_post_box">
                                            <div
                                                class="blog_in clearfix image_in"
                                            >
                                                <div class="image">
                                                    <img
                                                        decoding="async"
                                                        :src="
                                                            singleblog.author_image
                                                        "
                                                        alt="img"
                                                    />
                                                </div>
                                                <div class="content_inner">
                                                    <p class="post-date">
                                                        Published on :
                                                        {{
                                                            formatDate(
                                                                singleblog.date
                                                            )
                                                        }}
                                                    </p>
                                                    <h3>
                                                        <a>{{
                                                            singleblog.author_name
                                                        }}</a>
                                                        <p class="author">
                                                            Author
                                                        </p>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--===============spacing==============-->
                                <div class="pd_bottom_20"></div>
                                <!--===============spacing==============-->
                                <div class="container-sm">
                                    <div class="post_single_content">
                                        <h1 style="text-align: center">
                                            {{ singleblog.blog_name }}
                                        </h1>
                                        <!--===============spacing==============-->
                                        <div class="pd_bottom_15"></div>
                                        <!--===============spacing==============-->
                                    </div>
                                    <div class="description_box">
                                        <p style="text-align: justify">
                                            {{ singleblog.sub_description }}
                                        </p>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_15"></div>
                                    <!--===============spacing==============-->
                                    <div
                                        class="description_box"
                                        v-html="singleblog.description"
                                    ></div>
                                </div>
                        </section>
                    </main>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { format } from "date-fns";

export default {
    props: {
        singleblog: Object,
    },
    data() {
        return {
            // blogBannerImg: "/front/assets/images/projects-bg.jpg",
            // blogImg: "/front/assets/images/blog/blog-image-9.jpg",
            cusImg: "/front/assets/images/blog/blog-image-9.jpg",
        };
    },
    methods: {
        formatDate(date) {
            return format(new Date(date), "dd-MM-yyyy");
        },
    },
};
</script>

<style scoped>
.container-sm {
    width: 80%;
    height: auto;
}
.post-date {
    float: right;
}

.author {
    margin-top: -13px;
}
.image {
    display: flex;
    justify-content: start;
}
</style>
