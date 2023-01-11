<div class="card-title text-light m-0" style="background-color: #EEEEEE;">
    <div class="container">
        <div class="row d-flex">
            <div class="col-4 justify-content-center text-center">
                <a href="#" id="drive3" class="my-3">
                    <i class="fas fa-signal my-3"></i>
                    <br>
                    <p class="d-flex justify-content-center text-center px-5">
                        Drive or deliver
                    </p>
                </a>
            </div>
            <div class="col-4 justify-content-center text-center">
                <a href="#" id="eat3" class="my-3">
                    <i class="fas fa-utensils my-3"></i>
                    <br>
                    <p class="d-flex justify-content-center text-center px-5">
                        Eat
                    </p>
                </a>

            </div>
            <div class="col-4 justify-content-center text-center card-active">
                <a id="ride3" class="my-3">
                    <i class="fas fa-car my-3"></i>
                    <br>
                    <p class="d-flex justify-content-center text-center px-5">
                        Ride
                    </p>
                </a>
            </div>
        </div>
    </div>
    <hr class="text-dark m-0">
</div>
<div class="card-body bg-white text-sm-start p-5 lh-lg fs-6">
    <h1 class="py-1">
        Request a ride now
    </h1>
    <p>
        Order delivery from restaurants you love.
    </p>
    <form action="">
        @csrf

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter pickup location"
                aria-label="Recipient's username" aria-describedby="basic-addon2">
            <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter destination" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
        </div>
    </form>
    <div class="d-grid gap-2 d-md-block pt-3 pb-5">
        <button type="button" class="btn btn-dark mx-1">
            Request now
        </button>
        <button type="button" class="btn text-dark mx-1" style="background-color:#EEEEED;">
            Schedule for later
        </button>
    </div>
</div>
