<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="grid grid-cols-3 gap-3 ml-2 my-5">
        @foreach($fetsh as $item)  
        <div class="max-w-sm bg-white border border-gray-200  rounded-lg shado">
           <div class="">
                <img  src="{{asset($item->path)}}" class="card-img-top w-full" style="height:200px">
           </div>   
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item->title}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$item->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>