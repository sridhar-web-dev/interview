@extends('layouts.app')
@section('main')
<section class="banner-section roles d-flex align-items-center">
</section>
<section class="roles-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">All Roles</h1>
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
