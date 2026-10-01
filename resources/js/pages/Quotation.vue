<template>
    <body class="home theme-creote page-home-default-one">
        <div id="page" class="page_wapper hfeed site">
            <div id="wrapper_full" class="content_all_warpper img-fluid">
                <!----page-header----->
                <!----page-CONTENT----->
                <div id="content" class="site-content">
                    <section
                        class="coming-soon bg_op_1"
                        style="
                            background: url(front/assets/images/coming-soon-bg.jpg);
                        "
                    >
                        <!--===============spacing==============-->
                        <div class="pd_top_110"></div>
                        <div class="pd_top_110"></div>
                        <!--===============spacing==============-->
                        <div class="container">
                            <div class="row">
                                <div class="counter_section">
                                    <div class="upper_section">
                                        <div class="logo_sec">
                                            <Link
                                                :href="route('front.index')"
                                               
                                            >
                                                <img
                                                    v-if="
                                                        isValidImage &&
                                                        !notFound
                                                    "
                                                    v-bind:src="imageUrl"
                                                    alt="image"
                                                    decoding="async"
                                                    @error="notFound = true"
                                                />
                                                <h1
                                                    v-if="
                                                        !isValidImage ||
                                                        notFound
                                                    "
                                                   
                                                >
                                                    {{
                                                        $page.props.content[
                                                            "app_name"
                                                        ].value
                                                    }}
                                                </h1>
                                            </Link>
                                        </div>
                                        <div class="title">
                                            <h2>
                                                We are here with a new concept
                                            </h2>
                                            <p>
                                                Idea of denouncing pleasure and
                                                praising pain was born &amp; we
                                                will give you a complete account
                                                related to Quotation System.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="Countdown-timer">
                                        <div
                                            class="countdown text-left"
                                            data-date="July 1 2023 23:59:59"
                                        >
                                            <div class="item">
                                                <span data-days>0</span>
                                                <p>days</p>
                                                <small class="cuot">:</small>
                                            </div>
                                            <div class="item">
                                                <span data-hours>0</span>
                                                <p>hours</p>
                                                <small class="cuot">:</small>
                                            </div>
                                            <div class="item">
                                                <span data-minutes>0</span>
                                                <p>minutes</p>
                                                <small class="cuot">:</small>
                                            </div>
                                            <div class="item">
                                                <span data-seconds>0</span>
                                                <p>seconds</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_110"></div>
                        <div class="pd_bottom_110"></div>
                        <!--===============spacing==============-->
                    </section>
                </div>
            </div>
        </div>
    </body>
</template>

<script>
export default {};
</script>

<style></style>
