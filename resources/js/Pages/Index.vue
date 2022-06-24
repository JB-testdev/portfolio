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
<div class="">
    <head title="welcome"/>
    <div class="bg-gradient-to-r from-indigo-500/75 via-purple-500/75 to-pink-500/75 width-full">
        <header class="text-white flex w-full">
            <a href="#" class="p-8 text-lg w-24">Jeroen Bollen</a>
            <nav class="text-lg  w-full flex justify-center items-center">
                <a href="#" class="p-8 hover:underline underline-offset-8 ">Projects</a>
                <a href="#" class="p-8 hover:underline underline-offset-8">Contact</a>
                <a href="#" class="p-8 hover:underline underline-offset-8">About</a>
            </nav>
        </header>
    </div>
    <main >
    <div class="p-3 bg-white shadow rounded-lg w-1/2 h-50">
        <h3 class="text-xs ">font-serif</h3>
        <p class="font-serif ">
            The quick brown fox jumps over the lazy dog.
        </p>
    </div>
        <div class="space-y-5 p-3 relative">   
            <h1>    
                Terras T'Hoekske
            </h1>
            <p>
                The owner of T'Hoekske asked me to make a 3D drawing of his terrace with and without the extra compartment in order to get a permit. 
            </p>
        </div>
        <img src="/public/images/render.png"/>        
    </main>
    <footer>

        footer
    </footer>
</div>


</template>