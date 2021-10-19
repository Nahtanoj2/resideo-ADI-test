<template>
    <NavVue :title="meta.title"></NavVue>
    <section class="flex justify-center">
        <div class="w-1/3 mt-10 shadow-lg rounded p-10">
            <slot />
        </div>
    </section>
</template>

<script>
import NavVue from "./Nav.vue"
export default {
    components: { NavVue },
    props: {
        title: String,
        meta: Object,
        tasks: Array
    }
}
</script>

<style>
</style>
