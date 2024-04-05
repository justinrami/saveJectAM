<x-layout>
    <body class="bg-red-300 text-center">
        <div class="mt-8" >
    <h1 class="font-black text-4xl text-center m-16 bg-black-300 ">Sign in <h1>

    <form class="mt-6 grid place-content-center" action="/login" method="POST">
     @csrf
      <div >
        <x-input rex="email" titulo="Email" tipo="text" />
      </div>
      <div class="">
        <x-input rex="password" titulo="Password" tipo="password" />
      </div>
      <div>
          <button class=" font-black border border-neutral-800 bg-red-400 border border rounded-full px-10 hover:bg-red-600" type="submit ">Log in </button>
        </div>

    </form>
    </body>
 </x-layout>
