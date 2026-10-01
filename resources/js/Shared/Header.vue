<template>
    <!-- ======= Header ======= -->
    <div class="header_area" id="header_contents">
        <div class="header_style_six_nw ver_2" style="margin-top: 2px">
            <div class="top_bar style_six">
                <div class="container-fluid container-xl">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top_inner">
                                <div class="left_side common_css">
                                    <ul>
                                        <li>
                                            <a> Mail Us: </a>
                                            <a :href="emailLink">{{
                                                $page.props.content[
                                                    "contact_email"
                                                ].value
                                            }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="right_side common_css">
                                    <div class="rg_content_box">
                                        <div class="btn_lf_side">
                                            <Link
                                                :href="route('front.careers')"
                                                class="top_six_btn"
                                                target="_blank"
                                                rel="nofollow"
                                            >
                                                Career</Link
                                            >
                                            <Link
                                                :href="route('front.hire')"
                                                class="top_six_btn_long"
                                                style="margin-left: 10px"
                                                target="_blank"
                                                rel="nofollow"
                                            >
                                                Hire A Pro</Link
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <header
                id="header"
                class="header header_default style_one get_sticky_header header_area"
                style="margin-top:3px"
            >
                <div
                    class="container-fluid container-xl d-flex align-items-center justify-content-between"
                >
                    <div
                        class="col-lg-2 col-md-9 col-sm-9 col-xs-9 logo_column"
                    >
                        <div class="header_logo_box">
                            <Link
                                :href="route('front.index')"
                                class="logo d-flex align-items-center"
                            >
                                <img
                                    v-if="isValidImage && !notFound"
                                    v-bind:src="imageUrl"
                                    alt="image"
                                    @error="notFound = true"
                                />
                                <h1
                                    v-if="!isValidImage || notFound"
                                    class="d-flex align-items-center"
                                >
                                    {{ $page.props.content["app_name"].value }}
                                </h1>
                            </Link>
                        </div>
                    </div>
                    <i
                        class="mobile-nav-toggle mobile-nav-show bi bi-list"
                        style="margin-right: 20px"
                        :class="{ 'd-none': navShow }"
                        v-on:click="showNavBar"
                    ></i>
                    <i
                        id="hello"
                        class="mobile-nav-toggle mobile-nav-hide bi bi-x"
                        :class="{ 'd-none': navHide }"
                        v-on:click="hideNavBar"
                    ></i>
                    <nav id="navbar" class="navbar">
                        <div class="header_menu_box">
                            <div class="navigation_menu">
                                <ul id="myNavbar" class="navbar_nav">
                                    <li
                                        class="menu-item menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item mb-0"
                                    >
                                        <Link
                                            :href="route('front.index')"
                                            v-on:click="hideNavBar"
                                            class="dropdown-item nav-link"
                                        >
                                            <span>Home</span>
                                        </Link>
                                    </li>
                                    <li
                                        class="menu-item menu-item-has-children dropdown dropdown_full position-static mega_menu nav-item mb-0"
                                    >
                                        <Link
                                            :href="route('front.services')"
                                            v-on:click="hideNavBar"
                                            class="dropdown-item nav-link"
                                        >
                                            <span>Services</span>
                                        </Link>
                                    </li>
                                    <li
                                        class="menu-item menu-item-has-children dropdown nav-item mb-0"
                                    >
                                        <Link
                                            :href="route('front.our_product')"
                                            v-on:click="hideNavBar"
                                            class="dropdown-item nav-link"
                                        >
                                            <span>Products</span>
                                        </Link>
                                    </li>

                                    <li
                                        class="menu-item menu-item-has-children dropdown nav-item mb-0"
                                    >
                                        <Link
                                            :href="route('front.our_work')"
                                            v-on:click="hideNavBar"
                                            class="dropdown-item nav-link"
                                        >
                                            <span>Projects</span>
                                        </Link>
                                    </li>
                                    <li class="menu-item nav-item mb-0">
                                        <Link
                                            :href="route('front.about')"
                                            v-on:click="hideNavBar"
                                            class="dropdown-item nav-link"
                                        >
                                            <span>About Us</span>
                                        </Link>
                                    </li>
                                    <li class="menu-item nav-item mb-0">
                                        <Link
                                            :href="route('front.blogs')"
                                            v-on:click="hideNavBar"
                                            class="dropdown-item nav-link"
                                        >
                                            <span>Blogs</span>
                                        </Link>
                                    </li>
                                    <li class="menu-item nav-item mb-0">
                                        <Link
                                            :href="route('front.team')"
                                            v-on:click="hideNavBar"
                                            class="dropdown-item nav-link"
                                        >
                                            <span>Team</span>
                                        </Link>
                                    </li>
                                    <li
                                        class="menu-item menu-item-has-children dropdown nav-item mb-0"
                                    >
                                        <Link
                                            :href="route('front.contact')"
                                            v-on:click="hideNavBar"
                                            class="dropdown-item nav-link"
                                        >
                                            <span>Contact Us</span>
                                        </Link>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- .navbar -->
                </div>
            </header>
        </div>
    </div>
    <!-- End Header -->
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: { Link },

    data() {
        return {
            imageUrl: this.$page.props.content["app_logo"].value,
            notFound: false,
            navShow: false,
            navHide: true,
        };
    },
    mounted() {
        this.hasBodyClass();
    },

    computed: {
        isValidImage() {
            return /^(http|https):\/\/[^ "]+$/.test(this.imageUrl);
        },
        emailLink() {
            const email = this.$page.props.content["contact_email"].value;
            return `mailto:${email}`;
        },
    },
    created() {
        window.addEventListener("scroll", this.handleScroll);
    },
    destroyed() {
        window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
        hasBodyClass() {
            if (document.body.classList.contains("mobile-nav-active")) {
                this.navShow = true;
                this.navHide = false;
            }
        },
        showNavBar() {
            document.body.classList.toggle("mobile-nav-active");
            this.navShow = true;
            this.navHide = false;
        },
        hideNavBar() {
            document.body.classList.toggle("mobile-nav-active");
            this.navShow = false;
            this.navHide = true;
        },
        handleScroll(event) {
            // Any code to be executed when the window is scrolled
            let header = document.querySelector("#header");
            if (window.scrollY > 100) {
                header.classList.add("sticked");
            } else {
                header.classList.remove("sticked");
            }
        },
    },
};
</script>

<style>
.header_style_six_nw
    .top_bar.style_six
    .top_inner
    .common_css.left_side
    ul
    li::before {
    position: absolute;
    content: none;
    width: 4px;
    height: 4px;
    border-radius: 10px;
    background: #fff;
    opacity: 0.5;
    top: 0;
    left: 3px;
    bottom: 0;
    margin: auto;
}
.header_style_six_nw
    .top_bar.style_six
    .top_inner
    .common_css.left_side
    ul
    li::after {
    position: absolute;
    content: none;
    width: 10px;
    height: 10px;
    border-radius: 10px;
    background: transparent;
    border: 1px solid #fff;
    opacity: 0.5;
    top: 0;
    left: 0;
    bottom: 0;
    margin: auto;
}

</style>
