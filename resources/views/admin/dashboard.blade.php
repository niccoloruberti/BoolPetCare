@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="fs-4  mt-4" style="color:#E04F00 ">
        {{ __('Welcome Back to BoolPetCare!') }}
    </h2>
    <p>
        We're delighted to see you return to BoolPetCare, your trusted veterinary practice management platform.
    </p>
    <div>
       <h3 class="fs-4  mt-5" style="color:#E04F00 "> Ready to Get Started?</h3>
        
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card mt-3">
                <div class="card-header text-white fw-bold" style="background-color: #00807C">{{ __('Explore our features and make the most of your veterinary practice:') }}</div>

                <div class="card-body">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <div class="mt-3 mb-5 col-4" >
                                <i class="fa-solid fa-paw fw-bold mx-2 fa-xl" style="color: #00e0d9;"></i>
                                <a href="{{route('admin.animals.index')}}" style="background-color: #E04F00" class="btn  btn-md  text-white fw-bold button-link">Patient Registry</a>
                            </div>
                            <div class="col-8">
                                <p>
                                    Add and manage your furry patients with ease. Keep their medical histories up-to-date and never miss an appointment.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="mt-3 mb-5 col-4" >
                                <i class="fa-solid fa-person fw-bold ms-3 me-2 fa-xl" style="color: #00e0d9;"></i>
                                <a href="{{route('admin.owners.index')}}"  style="background-color: #E04F00" class="btn  btn-md text-white fw-bold button-link pe-3">Owners Record</a>
                            </div>
                            <div class="col-8">
                                <p>
                                    Maintain essential information about your clients and their beloved pets. Seamless communication is just a click away.
                                </p>
                            </div>
                        </div>
                       
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row my-5 ">
        <div class="col-6 ">
            <h4 style="color: #00807C"><i class="fa-solid fa-otter fa-2xl"></i> Register Patients</h4>
            <ul class="mt-4 list-unstyled">
                <li><i class="fa-solid fa-paw" style="color: #00807C"></i> Add new patients</li>
                <li><i class="fa-solid fa-paw" style="color:#00807C "></i> View and update medical records</li>
                <li><i class="fa-solid fa-feather" style="color:#00807C "></i> Schedule appointments (coming soon!)</li>
            </ul>
        </div>
        <div class="col-6">
            <h4 style="color: #00807C"><i class="fa-solid fa-shield-cat fa-2xl"></i> Owners Records</h4>
            <ul class="mt-4 list-unstyled">
                <li><i class="fa-solid fa-person" style="color: #00807C"></i> Manage client information</li>
                <li><i class="fa-solid fa-person" style="color:#00807C "></i> Connect with pet owners effortlessly</li>
                <li><i class="fa-solid fa-person" style="color:#00807C "></i> Improve client satisfaction</li>
            </ul>
        </div>
        <div class="text-center mt-5">
            <p>
                Thank you for choosing <strong style="color: #E04F00">BoolPetCare</strong>  to support your veterinary practice. We're here to make your journey smoother, and your patients' lives happier and healthier.
            </p>
        </div>
    </div>
    
</div>
@endsection
