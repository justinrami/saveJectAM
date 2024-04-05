<x-layout>
    <body class="bg-red-300 text-center">

        <h1 class="text-4xl m-8 text-center font-black"> Sign up <h1>

                <form class="grid place-content-center" action="/register" method="POST">
                    @csrf
                    <div class="m-8">

                    <div class="">
                    <x-input titulo="Name" tipo="text" rex="name" />
                    </div>

                    <div class="m-8">
                    <x-input titulo="Email" tipo="text" rex="email" />
                    </div>

                    <div class="m-8">
                    <x-input titulo="Password" tipo="Password" rex="password" />
                    </div>

                    <div class="m-8">
                    <x-input titulo="Birthday" tipo="Date" rex="birthday" />
                    </div>

                    <div>
                    <button class=" font-black border border-neutral-800 bg-red-400 border border rounded-full px-10 hover:bg-red-600" type="submit ">Create account </button>
                    </div>
                </form>

    </body>
</x-layout>
