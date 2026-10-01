<template>
          <!---contact-->
          <section
            class="contact-section bg_op_1"
            style="background: url(front/assets/images/contact.png)"
          >
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                  <div class="image_box ">
                    <img
                      src="front/assets/images/hassan.png"
                      class="img-fluid"
                      alt="consult"
                    />
                  </div>
                </div>
                <div class="col-lg-7 col-md-12">
                  <!--===============spacing==============-->
                  <div class="pd_top_40"></div>
                  <!--===============spacing==============-->
                  <div class="title_all_box style_six dark_color">
                    <div class="title_sections">
                      <div class="before_title">
                        <span class="icon-briefcase icon"></span>
                        Looking forward to consult.
                      </div>
                      <div class="title">
                        Reach Our Expert Team
                      </div>
                      <p>
                       No matter where your company is located, we'll
                                provide you one time free consultancy in your
                                call.
                      </p>
                    </div>
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_0"></div>
                  <!--===============spacing==============-->
                  <div class="divider_2"></div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_5"></div>
                  <!--===============spacing==============-->
                    <div class="row gutter_25px">
                        <div class="col-lg-4 col-md-12">
                            <div class="theme_btn_all color_one">
                                <a
                                    :href="route('front.contact')"
                                    class="theme-btn one"
                                >
                                    Contact us
                                </a>
                            </div>
                            <!--===============spacing==============-->
                            <div class="pd_bottom_20"></div>
                            <!--===============spacing==============-->
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div
                                class="footer_contact_list dark_color type_one"
                            >
                                <div class="same_contact phone">
                                    <span class="icon-email"></span>
                                    <div class="content">
                                        <h6 class="titles">Email</h6>
                                        <a :href="emailLink">{{
                                                $page.props.content[
                                                    "contact_email"
                                                    ].value
                                            }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--===============spacing==============-->
                  <div class="pd_bottom_10"></div>
                  <!--===============spacing==============-->
                </div>
              </div>
            </div>
          </section>
          <!--contact end-->
</template>

<script>
export default {
    computed: {
        emailLink() {
            const email = this.$page.props.content["contact_email"].value;
            return `mailto:${email}`;
        },
    },
};
</script>

<style>
section {
    overflow: hidden;
    padding: 0px;
}
</style>
