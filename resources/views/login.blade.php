<x-layout>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h1 class="text-6x1"> sign in <h1>
            <form action="/login" method="POST">
                @csrf
                <div>
                    <x-input rex="email" titulo="email XD" tipo="text" />
                </div>
                <div>
                    <x-input rex="password" titulo="Password" tipo="password" />
                    <div>
                        <button type="submit">Log in</button>
            </form>
</x-layout>
