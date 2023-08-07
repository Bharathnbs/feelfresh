<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="{{asset('images/feelfresh.png')}}" alt="FeelFresh-logo"></a>
      <button class="navbar-toggler" style="border: none; color: white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav text-center mt-4" style="margin-right: 50px; margin-left: 50px">
          <li class="nav-item mx-5">
            <a class="nav-link active fw-bold" aria-current="page" href="{{ route('home')}}">Home</a>
          </li>
          <li class="nav-item mx-5">
            <a class="nav-link fw-bold" href="{{ route('our-products') }}">Products</a>
          </li>
          <li class="nav-item mx-5">
            <a class="nav-link fw-bold" href="{{ route('contact-us') }}">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
