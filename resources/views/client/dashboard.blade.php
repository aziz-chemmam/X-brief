@extends('incfile.header')
@section('content')

    <div id="body" class="bg-slate-50 h-screen flex">
        <nav class="bg-white w-80  flex flex-col gap-10 border-r border-slate-100">
            <div class="logo text-2xl font-bold text-center h-16 flex items-center justify-center">EvenTo </div>
            <div class="user flex items-center justify-center flex-col gap-4 border-b border-emerald-slate-50 py-4">
                <img class="w-24 rounded-full shadow-xl"
                    src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png">
                <div class="flex flex-col items-center">
                    <span class="font-semibold uppercase text-lg text-emerald-700">{{ auth()->user()->fname }}</span>
                    <span class="text-slate-400 uppercase text-sm">{{ auth()->user()->role }} </span>
                </div>

            </div>

            <ul class="px-6 space-y-2">
                <li>
                    <a class="block
                        px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-700 hover:text-white rounded-lg"
                        href="#">Offers</a>
                </li>
                <li>
                    <a class="block
                        px-4 py-2.5 text-slate-800 font-semibold hover:bg-emerald-700 hover:text-white rounded-lg"
                        href="#">Reserve</a>
                </li>


                <li>
                    <a href="/hello"
                        class="text-red-600 hover:text-red-900 block px-4 py-2.5 text-slate-800 font-semibold hover:bg-red-500 hover:text-white rounded-lg">logout</a>

                </li>

            </ul>
        </nav>




       <form action="/search"  method="get">
        <div class= 'flex max-w-md mx-auto'>
            <div class="relative flex items-center w-full h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                <div class="grid place-items-center h-full w-12 text-gray-300">
                   
                </div>
        
                <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text" name="search" placeholder="Search something.." /> 
            </div>
            <BUtton type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 text-gray-300 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                  </svg>
                  
            </BUtton>
        </div>

       </form>
      
        
            <div id="cardContainer" class="flex flex-wrap w-full mt-36 ml-10 gap-8">
                @foreach ($annonce as $annonces)
                    <div class="flex-shrink-0">
                        <div
                            class="bg-white shadow-[0_8px_12px_-6px_rgba(0,0,0,0.2)] border p-2 w-96 h-66 max-w-sm rounded-lg font-[sans-serif] overflow-hidden mx-auto mt-4">
                            <h3 class="text-lg font-semibold">{{ $annonces->titre }}</h3>
                            <p class="mt-2 mb-3 text-sm text-gray-400">jnbhgv</p>
                            <p class="mt-2 mb-2 text-sm text-black">njhbgvcf</p>
                            <p class="mt-2 mb-2 text-sm text-black">bgvcfdx</p>


                            <div class="flex  ml-10">
                                <form method="post" action="{{ route('reservation.create') }}">
                                    @csrf
                                    <input type="hidden" name="annonce" value="{{ $annonces->id }}" />
                                    <button type="submit"
                                        class="px-6 py-2 w-36 mt-4 rounded-lg text-white text-sm tracking-wider font-semibold border-none outline-none bg-blue-700 hover:bg-blue-600">Reserve</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </form>


            



          
