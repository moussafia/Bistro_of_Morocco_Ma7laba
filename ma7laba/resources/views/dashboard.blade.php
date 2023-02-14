<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="my-10">
    <div class="flex justify-between px-5 py-3">
        <div>
            <form action="{{route('deleteALL')}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete All</button>
            </form>
        </div>
        <div>
          <a type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{route('addPlat')}}">Add</a>
        </div>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-md text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                       title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        image
                    </th>
                    <th scope="col" class="px-6 py-3">
                        event
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fetsh as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$item->title}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->description}}
                    </td>
                    <td class="px-6 py-4 h-10 w-10">
                        <img height="100" src="{{asset($item->path)}}">
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <a type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900" href="{{route('posts.edit',$item->id)}}" >Edit</a>
                          <form action="{{route('posts.destroy',$item->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                          </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

            </div>
        </div>
    </div>
</x-app-layout>
