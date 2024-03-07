@extends('incfile.header')
@include('incfile.sideBarAdm')

<form action="" method="post" class="w-full">
    <div class="flex w-full bg-gray-900 gap-24 justify-center h-fit ">
        <div class="flex gap-8">
            <div class="mb-5 ">
                <input type="text" id="base-input" name="name" placeholder="Categorie...."
                    class="bg-gray-50 mt-7 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
        </div>
        <div class="mt-8 bg-gray-900 text-white rounded-md px-8 py-1 h-fit border-2 ">
            <input type="submit" value="Add Categorie">
        </div>
    </div>
</form>
