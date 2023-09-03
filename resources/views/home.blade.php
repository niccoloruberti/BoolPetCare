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
                Welcome to <span style="color:#E04F00"> BoolPetCare</span>: Your Cutting-Edge Veterinary Database Management System
            </h1>
        </div>
        <div class=" my-5 d-block d-md-flex">
            <div class="col-12 col-md-6 descrpition me-5 align-self-center">
               <p> If you're looking for a comprehensive and reliable solution for managing data related to your four-legged patients, you've come to the right place! <span style="color:#E04F00"> BoolPetCare</span> is the veterinary database management system designed to simplify your professional life.</p>
            </div>
            <div class="col-12 col-md-6 ms-5">
                <img src="{{asset('/vet-hospital.jpeg')}}" alt="Veterinary Hospital" width="300px">
            </div>
        </div>
        <div class=" my-md-5 d-block d-md-flex">
            <div class="col-12 col-md-6 ms-5 align-self-center">
                <img src="{{asset('/doggo-care.png')}}" alt="Veterinary Hospital" width="300px" height="300px" style="border:4px solid #E04F00">
            </div>
            <div class="col-12 col-md-6 descrpition me-5 align-self-center">
                <h2 style="color:#E04F00" class="mt-5 mt-md-0">What You Can Do with BoolPetCare:</h2>
                <ul class="mt-4 list-unstyled">
                    <li class="my-2">
                         <h4>                          <i class="fa-solid fa-paw" style="color: #00e0d9;">
                        </i>
                            Register and Monitor Patients:
                        </h4>
                          Keep track of detailed information about your patients, including personal data, owners, medical records, and more.
                    </li>
                    <li class="my-2">
                       
                        <h4>
                             <i class="fa-solid fa-paw" style="color: #00e0d9;">
                            </i>
                            Complete Medical History:
                        </h4>
                        Record and archive the complete medical history of each animal, including past visits, diagnoses, treatments, and prescriptions.
                   </li>
                   <li class="my-2 ">
                    <h4> <i class="fa-solid fa-paw" style="color: #00e0d9;">
                    </i>
                    Schedule Appointments:</h4>
                        Easily manage appoin
                        tments to ensure efficient scheduling for your patients' visits.
                    </li>
                    <li class="my-2">
                       
                        <h4>
                             <i class="fa-solid fa-paw" style="color: #00e0d9;">
                            </i>
                            Inventory Control:</h4>
                            Monitor medication and equipment inventory, receive restocking notifications, and manage orders.
                    </li>
                    <li class="my-2">
                       
                        <h4>
                             <i class="fa-solid fa-paw" style="color: #00e0d9;">
                            </i>
                            Reports and Statistics:</h4>
                      
                            Access powerful reporting tools to analyze your patients' data and enhance your veterinary practice.
                    </li>
                    <li class="my-2">
                       
                        <h4>
                             <i class="fa-solid fa-paw" style="color: #00e0d9;">
                            </i>
                            Secure Access:</h4>
                      
                            Data security is at the core of BoolPetCare. Your data will be protected and accessible only to authorized personnel.
                    </li>
                </ul>
            </div>
        </div>
        <div class=" my-5 d-block d-md-flex">
            <div class="col-12 col-md-6 descrpition me-5 align-self-center">
               <p> <span style="color:#E04F00">BoolPetCare</span> has been developed by veterinary industry experts for professionals like you. We are dedicated to simplifying your daily work, allowing you to focus on what you love most: caring for animals.</p>
            </div>
            <div class="col-12 col-md-6 ms-5">
                <img src="{{asset('/animals.jpg')}}" alt="Veterinary Hospital" width="300px">
            </div>
        </div>
    </div>
</div>
            
            
        

@endsection