@extends('layouts.app')

@section('content')

<div class="content-header pb-2">
    <div class="container-fluid px-md-4">
        <div class="row mb-1">
            <div class="col-sm-6">
                <h3 class="m-0 font-weight-bold text-dark">Input Initiative Charter</h3>
            </div>
        </div>
    </div>
</div>

<div class="content pb-4">
    <div class="container-fluid px-md-4">

        <div class="card shadow-sm border-0 mb-0" style="border-radius: 12px; background-color: #FFFFFF;">

            <div class="card-header bg-transparent px-4 py-3 border-bottom" style="border-color: rgba(0,0,0,0.08) !important;">
                <h5 class="m-0 font-weight-bold text-dark">
                    <i class="fas fa-edit mr-2" style="color: #fc7a2f;"></i>Initiative Form
                </h5>
            </div>

            <form method="POST" action="#">
                @csrf

                <div class="card-body p-4">

                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-layer-group mr-1 text-orange" style="color: #fc7a2f;"></i> Type of Initiative
                            </label>
                            <select class="form-control border-0 shadow-sm" style="border-radius: 8px;" required>
                                <option disabled selected>-Select Type-</option>
                                <option>CORE</option>
                                <option>EFFICIENCY</option>
                                <option>OPERATION EXCELLENCE</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-lightbulb mr-1 text-orange" style="color: #fc7a2f;"></i> Initiative
                            </label>
                            <select class="form-control border-0 shadow-sm" style="border-radius: 8px;" required>
                                <option disabled selected>-Select Initiative-</option>
                                <option>Option 1</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-users-cog mr-1 text-orange" style="color: #fc7a2f;"></i> Group Initiative
                            </label>
                            <select class="form-control border-0 shadow-sm" style="border-radius: 8px;" required>
                                <option disabled selected>-Select Group-</option>
                                <option>Corporate Initiative</option>
                                <option>Divisional Initiative</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-chart-line mr-1 text-orange" style="color: #fc7a2f;"></i> Corporate KPI
                            </label>
                            <select class="form-control border-0 shadow-sm" style="border-radius: 8px;" required>
                                <option disabled selected>-Select KPI-</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-road mr-1 text-orange" style="color: #fc7a2f;"></i> Key Drivers
                            </label>
                            <select class="form-control border-0 shadow-sm" style="border-radius: 8px;" required>
                                <option disabled selected>-Select Drivers-</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-4">
                            <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                                <i class="fas fa-sitemap mr-1 text-orange" style="color: #fc7a2f;"></i> Division
                            </label>
                            <select class="form-control border-0 shadow-sm" style="border-radius: 8px;" required>
                                <option disabled selected>-Select Division-</option>
                                <option>Human Capital</option>
                                <option>Property & Development</option>
                                <option>IT</option>
                                <option>Finance</option>
                                <option>Marketing</option>
                                <option>Merchandising</option>
                                <option>Business Controlling</option>
                                <option>Operation</option>
                                <option>Logistic</option>
                                <option>Category</option>
                                <option>Purchasing & GA</option>
                            </select>
                        </div>
                    </div>

                    <hr class="my-4" style="border-top: 1px solid rgba(0,0,0,0.08);">

                    <div class="form-group mb-4">
                        <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                            <i class="fas fa-align-left mr-1 text-orange" style="color: #fc7a2f;"></i> Initiative Background
                        </label>
                        <textarea id="initiative_background" class="form-control border-0 shadow-sm" rows="4" style="border-radius: 8px;" placeholder="Describe the background..."></textarea>
                    </div>

                    <div class="form-group mb-0">
                        <label class="font-weight-bold text-muted small text-uppercase mb-2 d-block">
                            <i class="fas fa-bullseye mr-1 text-orange" style="color: #fc7a2f;"></i> Annual Target
                        </label>
                        <textarea id="annual_target" class="form-control border-0 shadow-sm" rows="4" style="border-radius: 8px;" placeholder="Specify the targets..."></textarea>
                    </div>

                </div>

                <div class="card-footer bg-transparent px-4 py-3 d-flex justify-content-end border-0" style="border-top: 1px solid rgba(0,0,0,0.08) !important;">
                    <button type="submit" class="btn px-5 shadow-sm font-weight-bold rounded-pill text-white" style="background-color: #17a2b8;">
                        <i class="fas fa-paper-plane mr-2"></i> Submit Charter
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
