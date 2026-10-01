<template>
    <!--service-->
    <section>
        <div class="pd_top_10"></div>
        <div class="auto-container">
            <div class="col-lg-8 m-auto">
                <div class="title_all_box style_seven text-center">
                    <div class="title_sections">
                        <div class="before_title">
                            <span class="icon-briefcase icon"></span>
                            Clients & Partners
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div
                        class="owl-carousel owl-carousel3 owl-theme stage-margin mt-3"
                        data-plugin-options="{'items': 4, 'margin': 10, 'loop': true, 'nav': true, 'dots': false, 'stagePadding': 40}"
                    >
                        <div>
                            <a href="https://ibnfirnas.co/" target="_blank">
                                <img
                                    alt=""
                                    class="img-fluid"
                                    src="front/assets/images/clientspatners/cp1.png"
                                />
                            </a>
                        </div>
                        <div>
                            <a
                                href="https://tenderdragonco.com/"
                                target="_blank"
                            >
                                <img
                                    alt=""
                                    class="img-fluid"
                                    src="front/assets/images/clientspatners/cp4.png"
                                />
                            </a>
                        </div>
                        <div>
                            <a href="https://roadandstory.com/" target="_blank">
                                <img
                                    alt=""
                                    class="img-fluid"
                                    src="front/assets/images/clientspatners/cp5.png"
                                />
                            </a>
                        </div>
                        <div>
                            <a href="https://lcpsuk.com/" target="_blank">
                                <img
                                    alt=""
                                    class="img-fluid"
                                    src="front/assets/images/clientspatners/cp7.png"
                                />
                            </a>
                        </div>
                        <div>
                            <a
                                href="https://homedoctorusa.com/"
                                target="_blank"
                            >
                                <img
                                    alt=""
                                    class="img-fluid"
                                    src="front/assets/images/clientspatners/cp8.png"
                                />
                            </a>
                        </div>
                        <div>
                            <a href="http://dp.dptourism.com/" target="_blank">
                                <img
                                    alt=""
                                    class="img-fluid"
                                    src="front/assets/images/clientspatners/cp9.png"
                                />
                            </a>
                        </div>
                        <div>
                            <a
                                href="https://falconictech.com/"
                                target="_blank"
                            >
                                <img
                                    alt=""
                                    class="img-fluid"
                                    src="front/assets/images/clientspatners/cp10.png"
                                />
                            </a>
                        </div>
                        <div>
                            <a
                                href="https://voltage-digital.com/"
                                target="_blank"
                            >
                                <img
                                    alt=""
                                    class="img-fluid"
                                    src="front/assets/images/clientspatners/cp11.png"
                                />
                            </a>
                        </div>
                        <div>
                            <a href="https://iasks.org/" target="_blank">
                                <img
                                    alt=""
                                    class="img-fluid"
                                    src="front/assets/images/clientspatners/cp12.png"
                                />
                            </a>
                        </div>
                        <!-- Add other images with links here -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--service end-->
</template>

<script>
export default {
    mounted() {
        // Owl Carousel initialization
        $(".owl-carousel3").owlCarousel({
            items: 4,
            loop: true,
            margin: 30,
            dots: false,
            lazyload: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1800,
            responsive: {
                0: { items: "2" },
                768: { items: "3" },
                1000: { items: "4" },
            },
        });
    },
};
</script>

<style scoped>
.img-fluid {
    display: flex;
    justify-content: center;
    filter: grayscale(100%);
    transition: filter 0.3s ease;
    width: 110px; /* Set the desired width for the logo */
    height: 110px; /* Set the desired height for the logo */
    object-fit: contain; /* Preserve aspect ratio and fit the logo within the specified dimensions */
}

.img-fluid:hover {
    filter: grayscale(0%);
}
</style>

