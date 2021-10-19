<template>
    <div>
        <p class="text-center text-3xl font-bold">Completed tasks:</p>
    </div>
    <div class="grid grid-cols-2 gap-2" v-for="task in tasks" :key="task">
        <div class="flex justify-end">
            <CheckCircleIcon class="text-green-500 h-6 w-6"></CheckCircleIcon>
        </div>
        <div class="font-bold">{{ task.name }}</div>
    </div>
</template>

<script>
import { CheckCircleIcon } from "@heroicons/vue/solid"
import LayoutVue from '../Shared/Layout.vue';

export default {
    components: { CheckCircleIcon },

    layout: LayoutVue,
    props: {
        tasks: Array,
        title: String,
        meta: Array
    }
}
</script>
