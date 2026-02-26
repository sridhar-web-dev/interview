@extends('layouts.app')
@section('main')
<section class="banner-section plain d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-12">
                <h1 class="fw-bold display-5">
                    Information Technology
                </h1>
                <h2>Product Strategy</h2>
                <p class="fs-5 mt-3">
                    Product strategy defines the vision, direction, and roadmap for how a product will achieve both customer satisfaction and business success. It connects market insight with organizational goals to ensure every product decision drives long-term value.
                </p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-graduation-cap me-2"></i>24 Questions</li>
                    <li><i class="fa fa-clock me-2"></i>10 Hours</li>
                    <li><i class="fa fa-users me-2"></i>49.5k Learners</li>
                </ul>
                <div class="bar d-flex justify-content-between w-100">
                    <div class="w-75">
                        <h5><i class="fa fa-clock me-2"></i>Your Progress : <span class="text-success">0% Completed</span></h5>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 0%"></div>
                          </div>
                    </div>
                    <button class="btn btn-role px-4 py-2 mt-3">
                        Start Learning
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="question">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</section>
<section class="roles-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Other categories</h1>
                <br>
                <form action="" method="post">
                </form>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('img/features/roles-list.png') }}" alt="" class="img-fluid">
                        <h4 class="my-3">Wealth Manager / Investment Analyst</h4>
                        <h5 class="text-muted">Wealth Management / Investment BankingBanking</h5>
                        <p>Banking, Financial Services & Insurance</p>
                    </div>
                    <div class="card-footer">
                        <div class="price">
                            <h3><span>$1500</span> $455</h3>
                        </div>
                        <p>4 years Exp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
