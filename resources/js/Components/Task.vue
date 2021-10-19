<template>
    <form @submit.prevent="submit" class="grid grid-cols-4 gap-4 mt-10">
        <div class="col-span-3">
            <input
                id="task_name"
                v-model="taskR.name"
                class="rounded border-2 border-gray-500 w-full px-3 focus:border-red-900"
                placeholder="Task name"
                @input="autoSave()"
            />
        </div>
        <button
            type="submit"
            class="flex justify-center"
        >
            <CheckCircleIcon class="text-green-500 h-6 w-6" v-if="!task.checked"></CheckCircleIcon>
        </button>
    </form>
</template>

<script>
import { CheckCircleIcon } from "@heroicons/vue/solid"
import { reactive } from '@vue/reactivity';
import axios from "axios";

export default {
    components: { CheckCircleIcon },

    props: {
        task: Object
    },
    setup(props) {
        const taskR = reactive(props.task)
        function submit() {
            axios.post('/complete/'+taskR.id, {}).then(data => taskR.checked = true).catch(error => console.log(error));
        }
        function autoSave(){
            axios.post('/tasks/'+taskR.id, taskR).then(data => {}).catch(error => console.log(error));
        }

        return { submit, autoSave, taskR }
    }
}
</script>

<style>
</style>
