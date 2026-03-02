@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container-fluid px-md-4">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 font-weight-bold text-dark">Input Initiative Charter</h3>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid px-md-4">

        <div class="card shadow-sm border-0 rounded-lg overflow-hidden">
            
            <div class="card-header bg-white py-3 border-bottom">
                <h5 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-edit mr-2"></i>Initiative Form
                </h5>
            </div>

            <form method="POST" action="#">
                @csrf

                <div class="card-body p-4">

                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-layer-group mr-1 text-orange"></i> Type of Initiative
                            </label>
                            <select class="form-control border-secondary-50 shadow-none" style="border-radius: 8px;" required>
                                <option disabled selected>-Select Type-</option>
                                <option>CORE</option>
                                <option>EFFICIENCY</option>
                                <option>OPERATION EXCELLENCE</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-lightbulb mr-1 text-orange"></i> Initiative
                            </label>
                            <select class="form-control border-secondary-50 shadow-none" style="border-radius: 8px;" required>
                                <option disabled selected>-Select Initiative-</option>
                                <option>Option 1</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-users-cog mr-1 text-orange"></i> Group Initiative
                            </label>
                            <select class="form-control border-secondary-50 shadow-none" style="border-radius: 8px;" required>
                                <option disabled selected>-Select Group-</option>
                                <option>Corporate Initiative</option>
                                <option>Divisional Initiative</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-chart-line mr-1 text-orange"></i> Corporate KPI
                            </label>
                            <select class="form-control border-secondary-50 shadow-none" style="border-radius: 8px;" required>
                                <option disabled selected>-Select KPI-</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-road mr-1 text-orange"></i> Key Drivers
                            </label>
                            <select class="form-control border-secondary-50 shadow-none" style="border-radius: 8px;" required>
                                <option disabled selected>-Select Drivers-</option>
                            </select>
                        </div>
                    </div>

                    <hr class="my-4 border-light">

                    <div class="form-group mb-4">
                        <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                            <i class="fas fa-align-left mr-1 text-orange"></i> Initiative Background
                        </label>
                        <textarea id="initiative_background" class="form-control shadow-none" rows="4" style="border-radius: 8px;" placeholder="Describe the background..."></textarea>
                    </div>

                    <div class="form-group mb-4">
                        <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                            <i class="fas fa-bullseye mr-1 text-orange"></i> Annual Target
                        </label>
                        <textarea id="annual_target" class="form-control shadow-none" rows="4" style="border-radius: 8px;" placeholder="Specify the targets..."></textarea>
                    </div>

                </div>

                <div class="card-footer bg-light p-4 d-flex justify-content-end border-0">
                    <button type="submit" class="btn btn-info px-5 shadow-sm font-weight-bold rounded-pill text-white">
                        <i class="fas fa-paper-plane mr-2"></i> Submit Charter
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection