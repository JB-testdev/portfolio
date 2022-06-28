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
<div class="bg-slate-800">
    <head title="welcome"/>
    <div class="bg-gradient-to-r from-indigo-500/50 via-purple-500/50 to-pink-500/50 width-full">
        <header class="text-white w-full">
            <a href="#" class="pl-56 pt-4 text-lg w-24 absolute">Jeroen Bollen</a>
            <nav class="text-lg  w-full flex justify-center items-center">
                <div class="p-8"><a href="#" class="link link-underline link-underline-black">Projects</a></div>
                <div class="p-8"><a href="#" class="link link-underline link-underline-black">Contact</a></div>
                <div class="p-8"><a href="#" class="link link-underline link-underline-black ">About</a></div>
            </nav>
        </header>
    </div>
    <main>
        <div class="grid grid-cols-3 gap-5 place-content-center mt-16 ml-52 mr-52">
            <div class="p-5 text-white bg-slate-300/25 rounded-md text-center place-content-center pt-40">
                <h1 class="text-2xl font-heading mb-6 pt-2">    
                    Terras T'Hoekske
                </h1>
                <p >
                    It has become a lot more busy since the reopening of the catering industry, and because of this the owner of T'Hoekske wanted to expand his terrace. In doing so he needed to have a permit, so he asked me to draw this in 3D.  This has been laid out for the city and has been approved. 
                </p>
            </div>
            <div class="col-span-2">
                <img src="/images/render.png" class="object-contain rounded hover:opacity-50 duration-300 cursor-pointer shadow-lg abosolute"/>
            </div>
            <div>
                <img src="/images/portal.png" class="object-contain rounded hover:opacity-50 duration-300 cursor-pointer shadow-lg abosolute"/>
            </div>
            <div class="p-5 text-white bg-slate-300/25 rounded-md  text-center">
                <h1 class="text-2xl font-heading mb-6 pt-16">    
                    Portal
                </h1>
                <p >
                    It has become a lot more busy since the reopening of the catering industry, and because of this the owner of T'Hoekske wanted to expand his terrace. In doing so he needed to have a permit, so he asked me to draw this in 3D.  This has been laid out for the city and has been approved. 
                </p>
            </div>
            <div>
                <img src="/images/portal.png" class="object-contain rounded hover:opacity-50 duration-300 cursor-pointer shadow-lg abosolute"/>
            </div>
        </div>

   <!-- <div class="container mt-16 ml-52 mr-52 flex">   
        <div class="p-5 w-1/3 text-white bg-slate-300/25 mr-5 rounded-md text-center place-content-center">
            <h1 class="text-2xl font-heading mb-6">    
                Terras T'Hoekske
            </h1>
            <p>
               It has become a lot more busy since the reopening of the catering industry, and because of this the owner of T'Hoekske wanted to expand his terrace. In doing so he needed to have a permit, so he asked me to draw this in 3D.  This has been laid out for the city and has been approved. 
            </p>
        </div>

        <img src="/images/render.png" class="w-2/3 object-contain rounded hover:opacity-50 duration-300 cursor-pointer shadow-lg abosolute"/>
    </div>-->
            
    </main>
    <footer class="pl-3">

        footer
    </footer>
</div>


</template>