<x-layout class="bg-white" style="height: 100vh; overflow: hidden">
    <div class="d-flex align-items-center justify-content-center position-relative"
        style="height: 100%; overflow: hidden">

        
        <form action="{{ route('login') }}" method="POST" class="row g-4 container">
            @csrf
            <x-alert />

            <x-form.text-box label="ID" name="id" />
            <x-form.text-box name="password" label="Password" type="password" />


            <!-- 2 column grid layout for inline styling -->
            <div class="row my-4 col-lg-6 m-auto">
                <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check ">
                        <input class="form-check-input" type="checkbox" name="remember_me" value="yes" checked />
                        <label class="form-check-label" for="form2Example34"> Remember me </label>
                    </div>
                </div>

                <div class="text-center col-sm-12 col-md-6">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <div class="text-center">

                <button type="submit" class="btn btn-primary mb-4 col-5">Sign in</button>
            </div>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="{{ route('user.register') }}">Register</a></p>

            </div>
        </form>

    </div>
</x-layout>
