<template>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div
                class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:space-x-10"
            >
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">ADI by Resideo</span>
                        <img class="h-8 w-auto sm:h-10" src="/images/adi logo.png" alt />
                    </a>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <Link
                        href="/"
                        class="text-base font-medium text-gray-500 hover:text-white p-3 rounded transition-all hover:bg-red-900"
                        :class="{'font-bold' : $page.url === '/home'}"
                    >Crear tareas</Link>
                    <Link
                        href="/complete"
                        class="text-base font-medium text-gray-500 hover:text-white p-3 rounded transition-all hover:bg-red-900"
                        :class="{'font-bold' : $page.url === '/complete'}"
                    >Tareas completadas</Link>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
import { ChevronDownIcon } from '@heroicons/vue/solid';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: { ChevronDownIcon, Link },
    props: {
        title: String
    }
}
</script>



<style>
</style>
