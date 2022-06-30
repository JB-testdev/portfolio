<template>
<link rel="stylesheet" href="https://unpkg.com/vue-agile/dist/VueAgile.css">
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

            
            <div class="col-span-2 ">
                <agile>
                    <div class="slide h-full">
                        <img src="/images/render.png" class="h-full contain rounded  shadow-lg "/>
                    </div>
                    <div class="slide h-full">
                        <img src="/images/portal.png" class="contain rounded hover:opacity-50 duration-300 cursor-pointer shadow-lg"/>
                    </div>
                    <template #prevButton>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-16 absolute text-white hover:bg-black/50 rounded-l" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                        </svg>
                    </template>
                    <template #nextButton>
                        <svg xmlns="http://www.w3.org/2000/svg" class=" absolute h-full w-16 mt-2 text-white hover:bg-black/50 rounded-r" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="px" viewBox="0 0 50 80" xml:space="preserve">
                            <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="0.375,0.375 45.63,38.087 0.375,75.8 "/>
                        </svg>
                       <!-- <svg xmlns="http://www.w3.org/2000/svg" class=" absolute h-full w-16 mt-2 text-white hover:bg-black/50 rounded-r" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>-->
                    </template>
                </agile>         
            </div>
            <div>
                 <img src="/images/portal.png" class="object-cover rounded hover:opacity-50 duration-300 cursor-pointer shadow-lg"/>
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
                <img src="/images/portal.png" class="object-cover rounded hover:opacity-50 duration-300 cursor-pointer shadow-lg"/>
            </div>
        </div>          
            <div class="max-w-5xl mx-auto">

                 
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