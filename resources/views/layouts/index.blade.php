@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <h4>Wybierz kategorię</h4>
    </div>
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio <span class="badge badge-pill badge-primary">1</span></li>
                <li class="list-group-item">Dapibus ac facilisis in <span class="badge badge-pill badge-primary">231</span></li>
                <li class="list-group-item">Morbi leo risus <span class="badge badge-pill badge-primary">1300</span></li>
                <li class="list-group-item">Porta ac consectetur ac <span class="badge badge-pill badge-primary">151</span></li>
                <li class="list-group-item">Vestibulum at eros <span class="badge badge-pill badge-primary">32354</span></li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio <span class="badge badge-pill badge-primary">1123</span></li>
                <li class="list-group-item">Dapibus ac facilisis in <span class="badge badge-pill badge-primary">113</span></li>
                <li class="list-group-item">Morbi leo risus <span class="badge badge-pill badge-primary">693</span></li>
                <li class="list-group-item">Porta ac consectetur ac <span class="badge badge-pill badge-primary">7421</span></li>
                <li class="list-group-item">Vestibulum at eros <span class="badge badge-pill badge-primary">6133</span></li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio <span class="badge badge-pill badge-primary">1682</span></li>
                <li class="list-group-item">Dapibus ac facilisis in <span class="badge badge-pill badge-primary">5312</span></li>
                <li class="list-group-item">Morbi leo risus <span class="badge badge-pill badge-primary">56712</span></li>
                <li class="list-group-item">Porta ac consectetur ac <span class="badge badge-pill badge-primary">1234</span></li>
                <li class="list-group-item">Vestibulum at eros <span class="badge badge-pill badge-primary">69223</span></li>
            </ul>
        </div>
    </div>

    <div class="row mt-4">
        <h4>Ostatnio dodane ogłoszenia</h4>
    </div>
    
    <div class="row">
        <div class="card mx-auto" style="width: 18rem;">
            <img class="card-img-top" src="http://via.placeholder.com/286x180" alt="Card image cap">
            <div class="card-body">
                <a href"#">Tytuł ogłoszenia</a> | 2500 zł
            </div>
        </div>
        <div class="card mx-auto" style="width: 18rem;">
            <img class="card-img-top" src="http://via.placeholder.com/286x180" alt="Card image cap">
            <div class="card-body">
                <a href"#">Tytuł ogłoszenia</a> | 2500 zł
            </div>
        </div>
        <div class="card mx-auto" style="width: 18rem;">
            <img class="card-img-top" src="http://via.placeholder.com/286x180" alt="Card image cap">
            <div class="card-body">
                <a href"#">Tytuł ogłoszenia</a> | 2500 zł
            </div>
        </div>
    </div>
</div>
@endsection