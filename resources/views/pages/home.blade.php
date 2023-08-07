@extends('layouts.site')

@section('contant')

<section>
    <div class="banner">
        <img class="banner-image mt-3" style="width: 100%; height: auto; max-height: 410px; object-fit:cover" src="{{asset('images/banner.png')}}" alt="">
    </div>
</section>

<section>
    <div class="container mt-5">
        <h2 class="mb-4">Top our Products</h2>
        <div class="row">
            <div class="col-lg-3 py-4">
                <div class="card">
                    <img src="{{asset('images/products/dairy.jpg')}}" class="card-img-top" alt="Dairy-Products">
                    <div class="card-body">
                      <h5 class="card-text text-center">Dairy Products</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-4">
                <div class="card">
                    <img src="{{asset('images/products/provisional.jpg')}}" class="card-img-top" alt="Provisionals">
                    <div class="card-body">
                      <h5 class="card-text text-center">Provisional</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-4">
                <div class="card">
                    <img src="{{asset('images/products/vegitable.jpg')}}" class="card-img-top" alt="Vagitables">
                    <div class="card-body">
                      <h5 class="card-text text-center">Vagetables</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-4">
                <div class="card">
                    <img src="{{asset('images/products/meats.jpg')}}" class="card-img-top" alt="Meats">
                    <div class="card-body">
                      <h5 class="card-text text-center">Meats</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5">
        <h2 class="mb-4">Our Categories</h2>
        <div class="row">
            <div class="col-lg-3 py-3">
                <div class="card" style="background-color:  #D0E3C4; border:none">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dairy</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-3">
                <div class="card" style="background-color:  #D0E3C4; border:none">
                    <div class="card-body text-center">
                        <h5 class="card-title">Provisional</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-3">
                <div class="card" style="background-color:  #D0E3C4; border:none">
                    <div class="card-body text-center">
                        <h5 class="card-title">Vegetable</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-3">
                <div class="card" style="background-color:  #D0E3C4; border:none">
                    <div class="card-body text-center">
                        <h5 class="card-title">Meats</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-3">
                <div class="card" style="background-color:  #D0E3C4; border:none">
                    <div class="card-body text-center">
                        <h5 class="card-title">Organic Products</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-3">
                <div class="card" style="background-color:  #D0E3C4; border:none">
                    <div class="card-body text-center">
                        <h5 class="card-title">Skin Care</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-3">
                <div class="card" style="background-color:  #D0E3C4; border:none">
                    <div class="card-body text-center">
                        <h5 class="card-title">Aurvadic</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-3">
                <div class="card" style="background-color:  #D0E3C4; border:none">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cattle Foods</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5">
        <h2 class="mb-4">Offer Products</h2>
        <div class="row">
            <div class="col-lg-3 py-4">
                <div class="card">
                    <img src="{{asset('images/offer/rice.jpg')}}" class="card-img-top" alt="Rice">
                    <div class="card-body text-center">
                      <h5 class="card-text">Rice</h5>
                      <h6><span class="mx-2 text-secondary">25kg</span>Rs 950</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-4">
                <div class="card">
                    <img src="{{asset('images/offer/tomatoes.jpg')}}" class="card-img-top" alt="Tomatoes" >
                    <div class="card-body  text-center">
                      <h5 class="card-text">Tomatoes</h5>
                      <h6><span class="mx-2 text-secondary">1kg</span>Rs 50</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-4">
                <div class="card">
                    <img src="{{asset('images/offer/oil.jpg')}}" class="card-img-top" alt="Olive-Oil">
                    <div class="card-body text-center">
                      <h5 class="card-text">Olive-Oil</h5>
                      <h6><span class="mx-2 text-secondary">1 Liter</span>Rs 250</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 py-4">
                <div class="card">
                    <img src="{{asset('images/offer/meat.jpg')}}" class="card-img-top" alt="Mutton-Meat">
                    <div class="card-body text-center">
                      <h5 class="card-text">Mutton Meat</h5>
                      <h6><span class="mx-2 text-secondary">1kg</span>Rs 600</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
