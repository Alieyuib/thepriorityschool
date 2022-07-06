@extends('layouts.app')

@section('content')
    <div class="dashboard-view col-md-10 bg-light">
        <div class="dashboard-header row bg-success">
            <div class="username-div col-md-6">
                <h5 class="user-text">
                    <strong>LoggedIN As:</strong>
                    <span class="text-warning">userxyz</span>
                </h5>
            </div>
            <ul class="dashboard-header-link col-md-6">
                <li>
                    <a href="" class=""><i class="bi bi-person-badge h5"></i></a>
                </li>
                <li>
                    <a href="" class=""><i class="bi bi-box-arrow-in-left h5"></i></a>
                </li>
                <li>
                    <a href="" class=""><i class="bi bi-gear h5"></i></a>
                </li>
            </ul>
        </div>
        <div class="row main-dashboard">
            <div class="col-md-3 dash-box">
                <div class="row">
                    <div class="col-md-4 icon-div">
                        <p class="fs-1">
                            <i class="bi bi-file-person text-danger"></i>
                        </p>
                    </div>
                    <div class="col-md-8 bg-success">

                    </div>
                </div>
            </div>
            <div class="col-md-3 dash-box">
                <div class="row">
                    <div class="col-md-4 icon-div">
                        <p class="fs-1">
                            <i class="bi bi-person-workspace text-warning"></i>
                        </p>
                    </div>
                    <div class="col-md-8 bg-success">

                    </div>
                </div>
            </div>
            <div class="col-md-3 dash-box">
                <div class="row">
                    <div class="col-md-4 icon-div">
                        <p class="fs-1">
                            <i class="bi bi-file-person text-primary"></i>
                        </p>
                    </div>
                    <div class="col-md-8 bg-success">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection