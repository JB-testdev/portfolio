<template>
<link rel="stylesheet" href="https://unpkg.com/vue-agile/dist/VueAgile.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
<div class="bg-slate-800">
    <head title="welcome font-Montserrat"/>
    <div class="bg-gradient-to-r from-indigo-500/50 via-purple-500/50 to-pink-500/50 width-full">
        <header class="text-white w-full">
            <a href="#" class="pl-56 pt-4 text-lg w-24 absolute">Jeroen Bollen</a>
            <nav class="text-lg  w-full flex justify-center items-center">
                <div class="p-8"><a href="#" class="link link-underline link-underline-black">3D Projects</a></div>
                <div class="p-8"><a href="#" class="link link-underline link-underline-black">Game Design</a></div>
                <div class="p-8"><a href="#" class="link link-underline link-underline-black">Contact</a></div>
                <div class="p-8"><a href="#" class="link link-underline link-underline-black ">About</a></div>
            </nav>
        </header>
    </div>
    <main>
        <div class="mt-16 ml-52 mr-52 font-Montserrat">
            <div class="border-t-2 border-b-2 mt-16 mb-16 pt-6 pb-6 w-full rounded ">
                <h1 class="text-white text-center text-6xl">3D Projects</h1>
            </div>
            <div class="grid grid-cols-3 gap-5 place-content-center ">
                <div class="p-5 text-white bg-slate-300/25 rounded-md text-center place-content-center pt-40">
                    <h1 class="text-2xl font-heading mb-6 pt-2">Terras T'Hoekske</h1>
                    <p >
                        It has become a lot more busy since the reopening of the catering industry, and because of this the owner of T'Hoekske wanted to expand his terrace. In doing so he needed to have a permit, so he asked me to draw this in 3D.  This has been laid out to the city and has been approved. 
                    </p>
                </div>   
                <div class="col-span-2 ">
                    <agile>
                        <div class="slide h-full">
                            <img src="/images/t'hoekske/render.png" class="h-full contain rounded  shadow-lg "/>
                        </div>
                        <div class="slide h-full">
                            <img src="/images/portal/portal.png" class="contain rounded hover:opacity-50 duration-300 cursor-pointer shadow-lg"/>
                        </div>
                        <template #prevButton>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-2 text-white hover:bg-black/50 rounded-l" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                            </svg>
                        </template>
                        <template #nextButton>
                            <svg xmlns="http://www.w3.org/2000/svg" class="  h-6 w-6 mt-2 text-white hover:bg-black/50 rounded-r" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="px" viewBox="0 0 50 80" xml:space="preserve">
                                <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="0.375,0.375 45.63,38.087 0.375,75.8 "/>
                            </svg>
                        </template>
                    </agile>
                </div>
                <div>
                    <img src="/images/portal/portal.png" class="object-cover rounded hover:opacity-50 duration-300 cursor-pointer shadow-lg"/>
                </div>
                <div class="p-5 text-white bg-slate-300/25 rounded-md  text-center">
                    <h1 class="text-2xl font-heading mb-6 pt-12">    
                        Portal
                    </h1>
                    <p >
                        This was an experiment in blender to try and model a "stylized" object. With this simplicity of an object stands at the center of the model while also adding some detail here and there to make it look a bit used. Lighting was the most challenging part of this project to bring out the light in this model.
                    </p>
                </div>
                <div>
                    <img src="/images/portal/portal.png" class="object-cover rounded hover:opacity-50 duration-300 cursor-pointer shadow-lg"/>
                </div>
            </div>          
                <div class="max-w-5xl mx-auto">
            </div>
            <div class="border-t-2 border-b-2 mt-16 mb-16 pt-6 pb-6 w-full rounded ">
                <h1 class="text-white text-center text-6xl">Game Design</h1>
            </div>
            <div class="grid grid-cols-3 gap-5 place-content-center ">
                <div class="col-span-2">
                    <agile>
                        <div class="slide h-full">
                            <img src="/images/gravity skew/jeroen-bollen-startup-gs.jpg" class="h-full contain rounded  shadow-lg "/>
                        </div>
                        <div class="slide h-full">
                            <img src="/images/gravity skew/jeroen-bollen-lvl1-2-gs.jpg" class="h-full contain rounded  shadow-lg "/>
                        </div>
                        <div class="slide h-full">
                            <img src="/images/gravity skew/jeroen-bollen-lvl2-gs.jpg" class="h-full contain rounded  shadow-lg "/>
                        </div>
                        <div class="slide h-full">
                            <img src="/images/gravity skew/jeroen-bollen-lvl3-gs.jpg" class="h-full contain rounded  shadow-lg "/>
                        </div>
                        <div class="slide h-full">
                            <img src="/images/gravity skew/jeroen-bollen-lvl4-gs.jpg" class="h-full contain rounded  shadow-lg "/>
                        </div>
                        <div class="slide h-full">
                            <img src="/images/gravity skew/jeroen-bollen-lvl5-gs.jpg" class="h-full contain rounded  shadow-lg "/>
                        </div>
                        <template #prevButton>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-2 text-white hover:bg-black/50 rounded-l" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                            </svg>
                        </template>
                        <template #nextButton>
                            <svg xmlns="http://www.w3.org/2000/svg" class="  h-6 w-6 mt-2 text-white hover:bg-black/50 rounded-r" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="px" viewBox="0 0 50 80" xml:space="preserve">
                                <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="0.375,0.375 45.63,38.087 0.375,75.8 "/>
                            </svg>
                        </template>
                    </agile>
                </div>
                <div class="p-5 text-white bg-slate-300/25 rounded-md  text-center">
                    <h1 class="text-2xl font-heading mb-6 pt-20">    
                        Gravity Skew
                    </h1>
                    <p>
                        Gravity Skew is a mobile game made in unity at a bootcamp in school together with 3 other students. This was a one-week project where we got the theme "retro game" on the day we started, so with no real preparation. The first day consisted of brainstorming and figuring out the mechanics of the game. We decided to make a game where if you tap the screen, you change the gravity to the top of the map and otherwise. This game was designed to make your way through the "dungeon" while juggling the gravity while the levels got consistently harder. At the end of the bootcamp, we won the prize of the best game made.  
                    </p>
                </div>
            </div>
        </div>
    </main>




    <footer class="pl-3">

        footer
    </footer>
</div>


</template>
<script>
import { VueAgile } from 'vue-agile'

export default { 
    components: {
        agile: VueAgile 
    }
}
</script>