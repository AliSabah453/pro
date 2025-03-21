<div>
    <div class="sticky top-0 background flex justify-between  border-b-1 custom-border p-3">
        <div class=" flex gap-2  items-center">
            @include('livewire.system.layout.bt')
            <span class="text-1">Stores</span>
        </div>
        <div>2</div>
    </div>


    <div>
        
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 3xl:grid-cols-6 gap-4 px-4 py-4">
      @for ($i = 0; $i < 20; $i++)
      <div class="w-full hover h-24 border-1 custom-border rounded-md">1</div>
      @endfor
    </div>
</div>
