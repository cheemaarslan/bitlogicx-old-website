<template>
    <!--services-->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="title_all_box style_seven text-center dark_color"
                    >
                        <div class="title_sections">
                            <div class="before_title">
                                <span class="icon-briefcase icon"></span>
                                Our Services
                            </div>
                            <div class="title">We Offer Different Services</div>

                            <p class="description_text">
                                We can help you create positive and permanent
                                changes in your life.<br />
                                Let’s Create Something new and awesome Together.
                            </p>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_10"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-lg-4 col-md-6 col-sm-6 col-xs-12"
                    v-for="item in services"
                    :key="item.id"
                >
                    <a :href="route('front.service', { service: item.slug })">
                        <div
                            class="icon_box_new_box type_two"
                            @mouseover="handleMouseOver(item.id)"
                            @mouseleave="handleMouseLeave(item.id)"
                        >
                            <span class="borders"></span>

                            <img
                                :src="item.service_image"
                                :style="{
                                    'background-image':
                                        'url(' + item.service_image + ')',
                                }"
                                class="wp-post-image mb-3"
                                style="border-radius: 10px"
                                alt="service-image"
                            />

                            <div class="content">
                                <h2>
                                    <a>{{ item.service_name }}</a>
                                </h2>
                                <transition name="delayed-fade">
                                    <p
                                        v-if="getHoveredState(item.id)"
                                        class="description"
                                    >
                                        {{ item.sub_description }}
                                    </p>
                                </transition>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!---services end-->
</template>

<script>
export default {
    props: {
        services: Object,
    },
    data() {
        return {
            hoveredItems: {},
        };
    },
    computed: {
        getHoveredState() {
            return (itemId) => this.hoveredItems[itemId];
        },
    },
    methods: {
        handleMouseOver(itemId) {
            setTimeout(() => {
                this.setHoveredState(itemId, true);
            }, 300); // Delay of 300ms (adjust as needed)
        },
        handleMouseLeave(itemId) {
            setTimeout(() => {
                this.setHoveredState(itemId, false);
            }, 300); // Delay of 300ms (adjust as needed)
        },
        setHoveredState(itemId, isHovered) {
            this.hoveredItems = {
                ...this.hoveredItems,
                [itemId]: isHovered,
            };
        },
    },
};
</script>

<style scoped>
.delayed-fade-enter-active,
.delayed-fade-leave-active {
    transition: opacity 0.3s ease-in-out;
}

.delayed-fade-enter {
    opacity: 0;
}

.delayed-fade-leave-to {
    opacity: 0;
}

.description {
    opacity: 1;
}
</style>
