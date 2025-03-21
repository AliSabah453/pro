<!DOCTYPE html>
<html  lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | MyApp</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/heroicons@1.0.6/outline.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @livewireStyles
</head>

<body x-data="{ open: false }" class="flex  "> <!-- اضف h-screen لملء الشاشة -->
    <div class="sm:block hidden h-screen sticky top-0">
        @include('livewire.system.layout.pc_left')
    </div>

    <div :class="open ? 'translate-x-0' : '-translate-x-full'" class="sm:hidden fixed h-screen  top-12   transform transition-all duration-300">
        @include('livewire.system.layout.phone_left')
    </div>

    <div class="flex-1 mx-auto  max-w-[2000px]"> <!-- استخدم flex-1 لجعل هذا العنصر يأخذ المساحة المتاحة -->
        {{ $slot }}
    </div>
    @livewireScripts
<script>
    document.addEventListener("keydown", function(event) {
    if (event.ctrlKey && (event.key === "+" || event.key === "-" || event.key === "0")) {
        event.preventDefault();
    }
});

document.addEventListener("wheel", function(event) {
    if (event.ctrlKey) {
        event.preventDefault();
    }
}, { passive: false });
</script>
</body>

</html>
