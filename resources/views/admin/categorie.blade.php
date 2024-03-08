@extends('incfile.header')
@include('incfile.sideBarAdm')
<div class="w-full">
    <form action="{{ route('addCategorie') }}" method="post" class="w-full">
        @csrf
        <div class="flex w-full bg-gray-900 gap-24 justify-center h-fit ">
            <div class="flex gap-8">
                <div class="mb-5 ">
                    <input type="text" id="base-input" name="name" placeholder="Categorie...."
                        class="bg-gray-50 mt-7 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="mt-8 bg-gray-900 text-white rounded-md px-8 py-1 h-fit border-2 ">
                <button type="submit">add</button>
            </div>
        </div>
    </form>

    <div id="cardContainer" class="flex flex-wrap w-full  gap-4">

        @foreach ($categorie as $categories)
            <div class="flex-shrink-0 ml-8 mt-8">
                <div
                    class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-96 h-66 max-w-sm rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                    <h3 class="text-lg flex uppercase  justify-center justify-items-center font-semibold">{{ $categories->name }}</h3>
                    <div class="flex ml-10">
                        <a href=""
                            class="h-9 py-2 px-14 mt-4 w-36 rounded-lg text-white text-sm tracking-wider font-semibold border-none outline-none bg-green-900 hover:bg-green-700">Edit</a>
                        <form method="post" action="/categories/{{ $categories->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-6 py-2 w-36 mt-4 rounded-lg text-white text-sm tracking-wider font-semibold border-none outline-none bg-red-700 hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
