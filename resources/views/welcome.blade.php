@extends('layouts.app')
@section('main')
<section class="banner-section d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-5">
                <h1 class="fw-bold display-5">
                    Crack Any Interview
                </h1>
                <p class="fs-5 mt-3">
                    India’s first all-in-one platform with 1000+ interview Q&A PDFs across every industry,
                    department, and experience level. Download. Prepare. Get Placed.
                </p>
                <button class="btn btn-role px-4 py-2 mt-3">
                    VIEW ALL ROLES
                </button>
            </div>
        </div>
    </div>
</section>
<section class="facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center text-light">
                <h4>5000+</h4>
                <h5>Job Seekers</h5>
            </div>
            <div class="col-lg-3 text-center text-light">
                <h4>1000+</h4>
                <h5>Role Specific PDFs</h5>
            </div>
            <div class="col-lg-3 text-center text-light">
                <h4>4.9/5</h4>
                <h5>Avg. Costomer Rating</h5>
            </div>
            <div class="col-lg-3 text-center text-light">
                <h4>100%</h4>
                <h5>Confidents</h5>
            </div>
        </div>
    </div>
</section>
<section class="unique">
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-lg-12 text-center my-5">
                <h1>What makes us Unique ?</h1>
            </div>
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('img/features/sectors.png') }}" alt="" class="img-fluid">
                        <h4>20+</h4>
                        <p>Sectors</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('img/features/building.png') }}" alt="" class="img-fluid">
                        <h4>100+</h4>
                        <p>Departments</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('img/features/roles.png') }}" alt="" class="img-fluid">
                        <h4>1000+</h4>
                        <p>Roles</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center my-5">
                <a href="#" class="btn btn-role">Explore now</a>
            </div>
        </div>
    </div>
</section>
<section class="interview-trail">
    <div class="container">
       <div class="row justify-content-evenly">
        <div class="col-lg-12 my-5 text-center">
            <h1>Who is Interview Trial for ?</h1>
        </div>
        <div class="col-lg-3">
            <div class="card p-0">
                <div class="card-body p-0">
                   <div class="img">
                    <img src="{{ asset('img/features/trail-01.png') }}" alt="" class="img-fluid">
                   </div>
                    <div class="detail">
                        <p>Freshers struggling with first interviews</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="img">
                        <img src="{{ asset('img/features/trail-02.png') }}" alt="" class="img-fluid">
                       </div>
                    <div class="detail">
                        <p>Freshers struggling with first interviews</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="img">
                        <img src="{{ asset('img/features/trail-03.png') }}" alt="" class="img-fluid">
                       </div>
                    <div class="detail">
                        <p>Freshers struggling with first interviews</p>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </div>
</section>
<section class="cta-section-01">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 my-auto">
                <h1 class="text-light">Try a Free <br>Sample Interview PDF</h1>
                <a href="#" class="btn btn-white-bg mt-3">GET YOUR FREE GUIDE</a>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('img/features/cta-section-01.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section class="mnc-section py-5 bg-white text-center">
    <div class="container-fluid">
        <h3 class="fw-bold mb-5" style="color:#1a3f85;">
            Hired by Top MNCs
        </h3>
        <!-- Scroll Row -->
        <div class="mnc-scroll d-flex align-items-center align-item-center gap-5">
            <img src="{{ asset('img/company/zoho.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/wipro.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/hdfc.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/tcs.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/accenture.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/deloitte.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/capgemini.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/accenture.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/deloitte.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/capgemini.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/accenture.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/deloitte.png') }}" class="mnc-logo" alt="">
            <img src="{{ asset('img/company/capgemini.png') }}" class="mnc-logo" alt="">
        </div>
    </div>
</section>
@endsection