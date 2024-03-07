@extends('incfile.header')
@section('content')
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center items-center">
        <div class="max-w-screen-xl h-[70vh] sm:m-10 bg-white rounded-lg shadow sm: flex justify-center flex-1">
            <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
                <div class=" w-full h-full mt-28  bg-contain bg-center bg-no-repeat">
                    <img src="{{ asset('image/taxi1.jpg') }}" alt="">
                </div>
            </div>
            <div class=" xl:w-5/12  ">
                <div>
                <img src="{{ asset('image/Evento.png') }}" class="h-36 w-48 ml-[30%] " alt="">
                </div>
                <div class=" flex flex-col items-center">
                    <h1 class="text-2xl text-indigo-500  xl:text-2xl font-bold">
                        Sign Up
                    </h1>
                    <div class="w-full flex-1 mt-8">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="mx-auto max-w-xs">

                                <div class="flex gap-4">
                                    <input
                                        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="text" placeholder="first Name" id= "fname" name="fname" />
                                    <span id="fname" class="text-red-500"></span>

                                    <input
                                        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white "
                                        id= "lname" name="lname" type="lname" placeholder="Last Name" />
                                    <span id="lname" class="text-red-500"></span>
                                </div>

                                <div class="flex gap-4 mt-5">
                                    <input
                                        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        type="text" placeholder="Phone" id= "phone" name="phone" />
                                    <span id="phone" class="text-red-500"></span>

                                    <select name="role"
                                        class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                        id="role">

                                        {{-- <option value="admin">admin</option> --}}
                                        <option value="client">client</option>
                                        <option value="organisateure">organisateure</option>

                                    </select>
                                </div>



                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    type="text" placeholder="email" id= "email" name="email" />
                                <span id="email" class="text-red-500"></span>



                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    id= "password" name="password" type="password" placeholder="Password" />
                                <span id="password" class="text-red-500"></span>

                                <button type="submit"
                                    class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <span class="ml-3">
                                        Sign up
                                    </span>
                                </button>
                                <span id="formError" class="text-red-500 font-medium mt-[0.75rem]"></span>
                                <a href="" class="text-center">
                                    <p class="underline text-gray-500 mt-[1rem]">Back To Home Page</p>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
