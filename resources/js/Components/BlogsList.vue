<template>
    <div class="auto-container">
        <div class="row default_row">
            <!--===============spacing==============-->
            <div class="pd_top_90"></div>
            <!--===============spacing==============-->
            <main id="main" class="site-main" role="main">
                <article
                    class="clearfix service type-service status-publish has-post-thumbnail hentry"
                >
                    <div class="row grid_layout">
                        <div
                            class="col-lg-4 col-md-6 col-sm-12 col-xs-12 grid_box"
                            v-for="item in blogs"
                            :key="item.id"
                        >
                            <a
                                :href="
                                    route('front.blog', {
                                        blog: item.slug,
                                    })
                                "
                            >
                                <div
                                    class="news_box style_one blog_classic has_images"
                                >
                                    <div class="image">
                                        <img
                                            width="750"
                                            height="420"
                                            :src="item.blog_image"
                                            :style="{
                                                'background-image':
                                                    'url(' +
                                                    item.blog_image +
                                                    ')',
                                            }"
                                            class="wp-post-image"
                                            alt="blog-img"
                                        />
                                    </div>
                                    <div class="content_box">
                                        <h2 class="title">
                                            <a
                                                rel="bookmark"
                                                >{{ item.blog_name }}</a
                                            >
                                        </h2>
                                        <p style="color:black; cursor: default">
                                            {{ item.sub_description }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </article>
            </main>
            <!--===============spacing==============-->
            <div class="pd_bottom_90"></div>
            <!--===============spacing==============-->
        </div>
    </div>
</template>

<script>
export default {
    props: {
        blogs: Object,
    },
};
</script>

<style></style>
