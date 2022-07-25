<x-layout class="bg-white" >
    <div class="d-flex align-items-center justify-content-center position-relative" style="height: 100vh; overflow: hidden">
        <div class="container ">
            <form>
                <!-- Email input -->
                {{-- <div class="form-outline mb-4">
                  <input type="text" id="form2Example1" class="form-control" />
                  <label class="form-label text-white" for="form2Example1">ID</label>
                </div> --}}

                <x-input label="ID"/>
                <x-input label="Password"/>
              
              
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                      <label class="form-check-label" for="form2Example34"> Remember me </label>
                    </div>
                  </div>
              
                  <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
              
                <!-- Register buttons -->
                <div class="text-center">
                  <p>Not a member? <a href="#!">Register</a></p>
                  
                </div>
              </form>
            </div>
            <img src="img/map 1.png" alt="" style="height:40vh; bottom: -115px" class="position-absolute">
        </div>
</x-layout>
