<template>
    <!--process-->
    <section class="process-section">
         <!--===============spacing==============-->
                        <div class="pd_bottom_40"></div>
                        <!--===============spacing==============-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div
                        class="title_all_box style_seven text-center dark_color"
                    >
                        <div class="title_sections">
                            <div class="before_title">Way of Working</div>
                            <div class="title">Our Working Process</div>
                            
                        </div>
                        <!--===============spacing==============-->
                        <div class="pd_bottom_40"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div
                    class="col-lg-4 col-md-6 col-sm-6 col-xs-12"
                    v-for="(item, index) in processes"
                    :id="item.id"
                >
                    <div class="choose_box type_two">
                        <div class="icon_box">
                            <div class="icon_image">
                                <img
                                    v-bind:src="item.process_image"
                                    class="img-fluid svg_image"
                                    alt="icon png"
                                />
                            </div>
                            <span class="icon_bg_rotate"></span>
                        </div>
                        <div class="content_box">
                            <h2>
                                <a style="cursor: default"> {{ item.process_name }} </a>
                            </h2>
                            <p>
                                {{ item.description }}
                            </p>
                        </div>
                        <div class="step">
                        <h6 class="step_no">{{ (index + 1).toString().padStart(2, '0') }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
    <!---process end-->
</template>

<script>
export default {
    props: {
        processes: Object,
    },
};
</script>
