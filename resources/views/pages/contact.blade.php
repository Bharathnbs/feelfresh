@extends('layouts.site')

@section('contant')
    <div class="container py-4">
        <h1 class="text-center">Contact Us</h1>
        <div class="row" style="margin-top:50px">
            <div class="col-lg-6 col-sm-12 my-2">
                <div class="card" style="background-color: #ece7d3; border:none">
                    <div class="card-body my-3">
                        <div class="mx-4">
                            <div class="d-flex my-2">
                                <ion-icon name="location" style="font-size: 32px; margin-right:20px"></ion-icon>
                                <h2>Address</h2>
                            </div>
                            <address style="margin-left:50px">
                                <h5 class="card-title" style="color:#73c15d"><span class="text-black">Feel</span>Fresh</h5>
                                <p>No 8, Post office street</p>
                                <p>Polambakkam Village and Post</p>
                                <p>Chengalpattu Dt pincode - 603309</p>
                            </address>

                            <div class="d-flex my-2">
                                <ion-icon name="call" style="font-size: 32px; margin-right:20px"></ion-icon>
                                <h2>Contact</h2>
                            </div>
                            <address style="margin-left:50px">
                                <p>Mobile No : <a class="text-decoration-none" href="tel:+919894722642" style="color:#73c15d">9894722642</a></p>
                                <p>Whatsapp No : <a class="text-decoration-none" href="https://wa.me/+919894722642" style="color:#73c15d">9894722642</a></p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 my-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2064.0068522770803!2d79.88270464517917!3d12.427981518485382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a531078e6364f6d%3A0xee8a89c9c9b1d7d6!2sPolambakkam%2C%20Tamil%20Nadu%20603309!5e0!3m2!1sen!2sin!4v1690892538951!5m2!1sen!2sin" width="100%" height="410" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
