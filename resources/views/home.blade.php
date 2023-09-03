@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <div class="logo-container">
                <img src="{{asset('./logoBoolPet.png')}}" alt="">
            </div>
        </div>
        <div class="col-12 my-3">
            <h1 class="text-center">
                Welcome to BoolPetCare: Your Cutting-Edge Veterinary Database Management System
            </h1>
        </div>
        <div class=" my-5 d-flex">
            <div class="col-12 col-md-6 descrpition me-5 align-self-center">
               <p> If you're looking for a comprehensive and reliable solution for managing data related to your four-legged patients, you've come to the right place! BoolPetCare is the veterinary database management system designed to simplify your professional life.</p>
            </div>
            <div class="col-12 col-md-6 ms-5">
                <img src="{{asset('/vet-hospital.jpeg')}}" alt="Veterinary Hospital" width="300px">
            </div>
        </div>
        <div class=" my-5 d-flex">
            <div class="col-12 col-md-6 ms-5">
                <img src="{{asset('/vet-hospital.jpeg')}}" alt="Veterinary Hospital" width="300px">
            </div>
            <div class="col-12 col-md-6 descrpition me-5 align-self-center">
               <p> If you're looking for a comprehensive and reliable solution for managing data related to your four-legged patients, you've come to the right place! BoolPetCare is the veterinary database management system designed to simplify your professional life.</p>
            </div>
        </div>
    </div>
</div>
            
            
        

@endsection