<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>
<template>
<div class="bg-black">
    <head title="welcome"/>
    <div class="bg-gradient-to-r from-indigo-500/25 via-purple-500/25 to-pink-500/25 h-24">
        <header class="text-white flex w-full">
            <a href="#" class="p-8 text-lg absolute left-0">Jeroen Bollen</a>
            <nav class="text-lg static p-8 ">
                <a href="#" class="p-8">Projects</a>
                <a href="#" class="p-8">Contact</a>
                <a href="#" class="p-8">About</a>
            </nav> 
        </header>
    </div>
    <main>
        lorem ipsum 
    </main>
    <footer>

        footer
    </footer>
</div>


</template>