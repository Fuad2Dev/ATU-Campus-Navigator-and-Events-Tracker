<x-layout class="bg-white" style="height: 100vh; overflow: hidden" >
    <div class="d-flex align-items-center justify-content-center position-relative" style="height: 100%; overflow: hidden">
        <div class="container ">
            <form>
                <!-- Email input -->
                {{-- <div class="form-outline mb-4">
                  <input type="text" id="form2Example1" class="form-control" />
                  <label class="form-label text-white" for="form2Example1">ID</label>
                </div> --}}

                <x-input label="ID"/>
                <x-input label="Password" type="password"/>
              
              
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4 col-lg-6 m-auto">
                  <div class="col-sm-12 col-md-6 d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check ">
                      <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
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
                  <p>Not a member? <a href="{{ route('register')}}">Register</a></p>
                  
                </div>
              </form>
            </div>
            {{-- <img src="img/map 1.png" alt="" style="bottom: -115px; z-index: -1" class="position-absolute col-2"> --}}
        </div>
</x-layout>
