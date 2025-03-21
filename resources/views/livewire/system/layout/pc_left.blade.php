<div class="flex background flex-col gap-2 pt-2 border-r-1 custom-border h-full w-[265px]">
    <div class="flex items-center gap-3 rounded-md   px-3">
        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="">
        <div class="h-2 w-[1px] box"></div>
        <div class="font-medium">
            <div class="text-1 text-sm">Jese Leos</div>
            <div class="text-xs text-2">Joined in August 2014</div>
        </div>
    </div>
    
    <hr class="custom-border">
    <div class="p-2 text-sm flex box items-center gap-2 px-3">
        <i class="bi bi-house"></i>
        <span>Dashboard pc</span>
    </div>

    <!-- جعل العنصر ينزل للأسفل -->
    <div class="mt-auto text-3 select-none">
        <hr class="custom-border ">
        <div class="p-3 px-4 text-sm hover flex items-center gap-2" x-data="mood()">
            <i x-cloak x-on:click="toggle" x-show="brightness" class="bi bi-brightness-high cursor-pointer"></i>
            <i x-cloak x-on:click="toggle" x-show="moon" class="bi  bi-moon-stars cursor-pointer"></i>
            <div class="h-2 w-[1px] box"></div>
            <span class="">System Theme</span>
        </div>
    </div>
    
  
<script>
    function mood() {
        return {
            brightness: localStorage.getItem('theme') !== 'dark', // إذا كانت القيمة "dark" فهو ليل
            moon: localStorage.getItem('theme') === 'dark', // إذا كانت "dark" فهو ليل
            toggle() {
                this.brightness = !this.brightness;
                this.moon = !this.moon;
                
                // حفظ الحالة في localStorage
                if (this.moon) {
                    localStorage.setItem('theme', 'dark');
                    document.documentElement.classList.add('dark'); // تفعيل الوضع الليلي
                } else {
                    localStorage.setItem('theme', 'light');
                    document.documentElement.classList.remove('dark'); // تعطيل الوضع الليلي
                }
            }
        };
    }

    // التأكد من تطبيق الوضع الليلي عند تحميل الصفحة
    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
    }
</script>
    
</div>
