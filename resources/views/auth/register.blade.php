<x-layout class="bg-white" style="height: 100vh; overflow: hidden">
    <div class="d-flex align-items-center justify-content-center position-relative" style="height: 100%; overflow: hidden">
        <div class="container ">
            <form>
                <div class="row">
                    <div class="col">
                        <x-input label="First name" />
                    </div>
                    <div class="col">
                        <x-input label="Last name" />
                    </div>
                </div>

                <x-input label="ID" />
                <x-input label="Email" />
                <x-input label="password" type="password" />
                <x-input label="retype password" type="password"/>

                
                <div class="row mb-4">
                    <div class="text-center">
                        <p class="m-0">Already have an account ?</p>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('login') }}">Sign in</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

            </form>
        </div>
        <img src="img/map 1.png" alt="" style="height:40vh; bottom: -115px; z-index: -1" class="position-absolute">
    </div>
</x-layout>