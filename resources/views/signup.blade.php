<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h1 class="text-3x1"> sign in <h1>
            <form action="/register" method="POST">
                @csrf
                <div>
                    <label for="">name</label>
                    <input name="name" type="text">
                    @error('name')
                        <span> {{ $message }}</span>
                    @enderror
                </div>


                <div>

                    <label for="">email</label>
                    <input name="email" type="text">
                    @error('email')
                        <span> {{ $message }}</span>
                    @enderror
                </div>


                <div>
                    <label for="">password</label>
                    <input name="password" type="text">
                    @error('password')
                        <span> {{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="">birthday</label>
                    <input name="birthday" type="date">
                    @error('birthday')
                        <span> {{ $message }}</span>
                    @enderror

                </div>

                <div>
                    <button type="submit">create account</button>
                </div>


</div>
