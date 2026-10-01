<template>
    <a :href="whatsapp_link" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float mt-3"></i>
    </a>
</template>
<script>
export default {
    props: {
        whatsapp_link: String,
    },
};
</script>
