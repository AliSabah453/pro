<div class="flex background h-screen flex-col gap-2 pt-2 border-r-1 custom-border  w-[265px] relative overflow-y-auto">
    <div class="flex items-center gap-3 rounded-md px-3">
        <img class="w-7 h-7 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
        <div class="h-2 w-[1px] bg-black"></div>
        <div class="font-medium">
            <div class="text-1 text-sm">Jese Leos</div>
            <div class="text-sm text-2">Joined in August 2014</div>
        </div>
    </div>
    
    <hr class="custom-border">

    <div class="p-2 text-sm flex box items-center gap-2 px-3">
        <i class="bi bi-house"></i>
        <span>Dashboard phone</span>
    </div>

    <!-- العنصر الموجود في الأسفل -->
    <div class="absolute bottom-12 left-0 w-full hover text-1">
        <hr class="custom-border ">
        <div class="p-3 px-4 text-sm hover flex items-center gap-2" x-data="mood()">
            <i x-cloak x-on:click="toggle" x-show="brightness" class="bi bi-brightness-high cursor-pointer"></i>
            <i x-cloak x-on:click="toggle" x-show="moon" class="bi  bi-moon-stars cursor-pointer"></i>
            <div class="h-2 w-[1px] box"></div>
            <span class="">System Theme</span>
        </div>
    </div>
</div>
