<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center items-center">
        <div class="max-w-screen-xl h-[70vh] sm:m-10 bg-white rounded-lg shadow sm: flex justify-center flex-1">
            <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
                <div class=" w-full h-full mt-28  bg-contain bg-center bg-no-repeat">
                    <img src="{{ asset('image/event.gpj.jpg') }}" alt="">
                </div>
            </div>
            <div class=" lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <div>
                    <img src="{{ asset('image/Evento.png') }}" class="h-36 w-48 ml-[30%] " alt="">
                </div>
                @if (session('success'))
                <div id="success-message" class="bg-red-600 rounded-md  fixed ml-24 mt-96  top-50 z-50 text-white p-4 text-center animate-bounce mb-4">
                    {{ session('success') }}
                </div>
  
            
            @endif
                <div class="mt-12 flex flex-col items-center">
                    <h1 class="text-2xl xl:text-2xl font-bold">
                        Sign In
                    </h1>
                    <div class="w-full flex-1 mt-8">
                        <form  method="POST" action="/home" >
                            @csrf
                            <div class="mx-auto max-w-xs">

                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white @error('email') is-invalid @enderror "
                                    type="text" placeholder="Email Or Username"
                                    id= "email"
                                    name="email"
                                />
                                <span id="emailErr" class="text-red-500"></span>

                                <input
                                    class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                    id= "pw"
                                    name="password"
                                    type="password" placeholder="Password"/>
                                <span id="pwErr" class="text-red-500"></span>

                                

                                <a href="/register">
                                    <p class="underline text-gray-500 mt-[0.75rem]">Don't have an account ? create One</p>
                                </a>
                                <button type="submit"
                                        class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    <span class="ml-3">
                                        Sign In
                                    </span>
                                </button>
                                <span id="formError" class="text-red-500 font-medium mt-[0.75rem]"></span>
                                <a href="/" class="text-center"><p class="underline text-gray-500 mt-[1rem]">Back To Home Page</p> </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
        </div>
    </div>


    
    <script>
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
        }, 5000);
    </script>
</body>
</html>