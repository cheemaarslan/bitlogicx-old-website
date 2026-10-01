<template>
    <div class="container">
        <section class="service-section">
            <div class="row">
                <div
                    class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12"
                    style="padding-bottom: 40px"
                    v-for="(item, index) in careers"
                    :key="item.id"
                >
                    <div class="service_box style_three dark_color">
                        <div class="service_content">
                            <div class="content_inner">
                                <span
                                    class="icon-news"
                                    style="background-color: #af0820"
                                    ><i></i
                                ></span>
                                <small class="nom">{{
                                    formatNumber(index + 1)
                                }}</small>
                                <h2>
                                    <a>{{ item.career_name }}</a>
                                </h2>
                                <p>{{ item.description }}</p>
                                <a
                                    :href="route('front.career.create', item)"
                                    class="read_more"
                                    >Apply <i class="icon-right-arrow"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    props: {
        careers: Object,
    },
    methods: {
        formatNumber(number) {
            return number.toString().padStart(2, "0");
        },
    },
};
</script>

<style></style>
