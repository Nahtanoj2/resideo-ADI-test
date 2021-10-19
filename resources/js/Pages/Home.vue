<template>
    <form @submit.prevent="submit" class="grid grid-cols-4 gap-4">
        <div class="col-span-3">
            <input
                id="new_task"
                v-model="form.new_task"
                class="rounded border-2 border-gray-500 w-full px-3 focus:border-red-900"
                placeholder="New task"
            />
        </div>
        <button
            type="submit"
            class="bg-blue-600 text-white rounded hover:bg-blue-900 transition-all"
        >Add</button>
    </form>

    <TaskVue v-for="task in tasks" :key="task" :task="task"></TaskVue>
</template>

<script>
import LayoutVue from '../Shared/Layout.vue';
import TaskVue from '../Components/Task.vue';
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import { useForm } from '@inertiajs/inertia-vue3';

export default {
    layout: LayoutVue,
    components: { TaskVue },
    props: {
        tasks: Array,
        title: String,
        meta: Array
    }
    , setup() {
        const form = useForm({
            new_task: null
        })

        function submit() {
            form.post('/', {
                onSuccess: () => {
                    form.reset();
                }
            });
        }

        return { form, submit }
    },

}
</script>
