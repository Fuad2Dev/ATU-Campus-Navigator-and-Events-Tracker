<x-layout class="bg-white" style="height: 100vh; overflow: hidden">
    <div class="d-flex align-items-center justify-content-center position-relative"
        style="height: 100%; overflow: hidden">

        <form action="{{ route('user.register') }}" method="POST" class="row g-4 container">
            @csrf
            <div class="row p-0 m-auto">
                <div class="col">
                    <x-form.text-box label="First name" name="first_name" />
                </div>
                <div class="col">
                    <x-form.text-box label="Last name" name="last_name" />
                </div>
            </div>

            <x-form.text-box label="ID" name="id" />
            <x-form.text-box label="Email" name="email" />
            <x-form.text-box label="password" type="password" name="password" />
            <x-form.text-box label="retype password" type="password" name="password_confirmation" />


            <div class="row my-4">
                <div class="text-center">
                    <p class="m-0">Already have an account ?</p>
                </div>
                <div class="text-center">
                    <a href="{{ route('login') }}">Sign in</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block m-0">Sign up</button>

        </form>
        
    </div>
</x-layout>
