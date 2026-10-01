<template>
    <div id="wrapper_full" class="content_all_warpper">
        <div id="content" class="site-content">
            <section class="project_all filt_style_two filter_enabled">
                <div class="pd_top_40"></div>
                <div class="container">
                    <div class="project_container clearfix">
                        <div class="row clearfix">
                            <div
                                class="project-wrapper grid-item col-lg-12 col-md-12 col-sm-12 col-xs-12 project_category-coaching"
                                v-for="item in products"
                                :key="item.id"
                            >
                                <a
                                    :href="
                                        route('front.product', {
                                            product: item.slug,
                                        })
                                    "
                                >
                                    <div
                                        class="project_box style_three clearfix"
                                    >
                                        <div class="content_inner">
                                            <div><a>BITLOGICX</a></div>
                                            <h2>
                                                <a>{{ item.product_name }}</a>
                                            </h2>
                                            <p class="short_desc">
                                                {{ item.sub_description }}
                                            </p>
                                            <a
                                                :href="item.product_link"
                                                target="_blank"
                                                class="read_more"
                                                >Visit<span
                                                    class="icon-right-arrow-long"
                                                ></span
                                            ></a>
                                        </div>
                                        <div class="image">
                                            <img
                                                loading="lazy"
                                                :src="item.product_image"
                                                :style="{
                                                    'background-image':
                                                        'url(' +
                                                        item.product_image +
                                                        ')',
                                                }"
                                                class="wp-post-image"
                                                alt="product-img"
                                            />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        products: Object,
    },
};
</script>

<style scoped>
/* Desktop view styles */
.project_box.style_three .content_inner {
    position: relative;
    float: left;
    width: 54%;
    padding: 5px 35px;
}

.project_box.style_three .image {
    position: relative;
    width: 46%;
    float: right;
    border-radius: 10px;
    overflow: hidden;
}

/* Mobile view styles */
@media (max-width: 992px) {
    .project_box.style_three .content_inner {
        position: relative;
        float: none;
        width: 100%;
        padding: 20px; /* Increase padding for mobile */
    }

    .project_box.style_three .image {
        position: relative;
        width: 100%;
        float: none;
        border-radius: 10px;
        overflow: hidden;
        text-align: center; /* Center the image on mobile */
        margin-top: 20px;
    }

    .project_box.style_three .image img {
        width: 100%;
        height: auto;
    }
}
.project_box.style_three:hover .image::before {
    opacity: 0;
}
</style>
