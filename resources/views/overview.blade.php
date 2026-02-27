@extends('layouts.app')

@section('content')

<style>
    .hover-card {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        border-radius: 12px;
        border: none;
        overflow: hidden; 
        position: relative;
        background-color: #ffffff;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.12) !important;
    }

    /* traffic light dots */
    .dot-outline {
        color: transparent;
        border: 2px solid #6c757d;
        border-radius: 50%;
        display: inline-block;
        width: 12px;
        height: 12px;
        margin-right: 2px;
    }
    .dot-solid {
        font-size: 14px;
        line-height: 1;
    }

    /* watermark icon di card */
    .icon-watermark {
        position: absolute;
        bottom: -5px;
        right: 5px;
        opacity: 0.25; 
        font-size: 6rem; 
        transform: rotate(-10deg);
        z-index: 0;
        pointer-events: none; 
    }

    .card-body {
        position: relative;
        z-index: 1; 
        background: transparent !important; 
    }

    /* legend box */
    .legend-box {
        background: #ffffff;
        border-radius: 10px;
        padding: 15px 20px;
        height: 100%;
        border-left: 5px solid;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    }
    .legend-badge {
        font-size: 0.75rem;
        letter-spacing: 1px;
        margin-bottom: 10px;
        display: inline-block;
    }

    /* buttons */
    .btn-initiative {
        transition: all 0.3s ease;
        border-radius: 8px;
        padding: 12px 20px;
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        border: none;
    }
    .btn-initiative:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.15);
        filter: brightness(110%);
    }

    /* utility perataan angka */
    .data-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 6px;
        font-size: 0.9rem;
    }
</style>

<div class="content-header">
    <div class="container-fluid px-md-4">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 font-weight-bold text-dark">Dashboard Overview</h3>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid px-md-4">  

        <div class="row mb-5">
            <div class="col-md-5 col-12 mb-3 mb-md-0">
                <div class="legend-box" style="border-left-color: #007bff;">
                    <span class="badge badge-primary legend-badge px-2 py-1"><i class="fas fa-info-circle mr-1"></i> PEMBERITAHUAN</span>
                    <h6 class="font-weight-bold text-uppercase mb-3"><i class="fas fa-tags mr-2 text-primary"></i>Type Initiative</h6>
                    <div class="row">
                        <div class="col-12 text-muted">
                            <div class="mb-1"><strong>C</strong> <i class="fas fa-arrow-right mx-2 text-secondary" style="font-size: 0.8em;"></i> CORE</div>
                            <div class="mb-1"><strong>E</strong> <i class="fas fa-arrow-right mx-2 text-secondary" style="font-size: 0.8em;"></i> EFFICIENCY</div>
                            <div><strong>O</strong> <i class="fas fa-arrow-right mx-2 text-secondary" style="font-size: 0.8em;"></i> OPERATION EXCELLENCE</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-12">
                <div class="legend-box" style="border-left-color: #28a745;">
                    <span class="badge badge-success legend-badge px-2 py-1"><i class="fas fa-info-circle mr-1"></i> PEMBERITAHUAN</span>
                    <h6 class="font-weight-bold text-uppercase mb-3"><i class="fas fa-traffic-light mr-2 text-success"></i>Traffic Light Initiative</h6>
                    <div class="row text-muted" style="font-size: 0.95rem;">
                        <div class="col-md-6 col-12">
                            <div class="d-flex align-items-center mb-2"><span class="text-danger dot-solid mr-2">●</span> PROJECT BEHIND TARGET</div>
                            <div class="d-flex align-items-center mb-2"><span class="text-warning dot-solid mr-2">●</span> PROJECT WITH ISSUES</div>
                            <div class="d-flex align-items-center mb-2"><span class="text-success dot-solid mr-2">●</span> PROJECT ON TARGET</div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="d-flex align-items-center mb-2"><span class="dot-outline mr-2"></span> PROJECT NOT YET STARTED</div>
                            <div class="d-flex align-items-center mb-2"><span class="text-dark dot-solid mr-2">●</span> PROJECT CLOSED</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5 justify-content-center">
            <div class="col-md-4 col-12 mb-3">
                <button type="button" class="btn btn-primary btn-block btn-initiative shadow-sm text-uppercase">
                    All Group Initiative
                </button>
            </div>
            <div class="col-md-4 col-12 mb-3">
                <button type="button" class="btn btn-info btn-block btn-initiative shadow-sm text-uppercase text-white">
                    Group Corporate Initiative
                </button>
            </div>
            <div class="col-md-4 col-12 mb-3">
                <button type="button" class="btn btn-secondary btn-block btn-initiative shadow-sm text-uppercase">
                    Group Divisional Initiative
                </button>
            </div>
        </div>

        <div class="row">
            @php
                $icons = [
                    ['icon' => 'fas fa-laptop-code text-primary', 'title' => 'IT & Systems'],
                    ['icon' => 'fas fa-money-bill-wave text-success', 'title' => 'Finance'],
                    ['icon' => 'fas fa-users text-warning', 'title' => 'Human Resources'],
                    ['icon' => 'fas fa-bullhorn text-danger', 'title' => 'Marketing'],
                    ['icon' => 'fas fa-chart-line text-info', 'title' => 'Sales'],
                    ['icon' => 'fas fa-cogs text-secondary', 'title' => 'Operations'],
                    ['icon' => 'fas fa-truck text-dark', 'title' => 'Logistics'],
                    ['icon' => 'fas fa-building text-primary', 'title' => 'Corporate'],
                    ['icon' => 'fas fa-leaf text-success', 'title' => 'Sustainability'],
                    ['icon' => 'fas fa-shield-alt text-danger', 'title' => 'Legal & Compliance'],
                    ['icon' => 'fas fa-globe text-info', 'title' => 'Expansions'],
                    ['icon' => 'fas fa-boxes text-warning', 'title' => 'Inventory']
                ];
            @endphp

            @foreach($icons as $data)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card hover-card shadow-sm h-100">
                    
                    <i class="{{ $data['icon'] }} icon-watermark"></i>
                    
                    <div class="card-body">
                        <h6 class="font-weight-bold text-uppercase mb-3 border-bottom pb-2">{{ $data['title'] }}</h6>
                        
                        <div class="row text-muted font-weight-bold">
                            <div class="col-7 pr-3">
                                <div class="data-row">
                                    <span class="text-danger dot-solid">●</span> 
                                    <span class="text-dark">0</span>
                                </div>
                                <div class="data-row">
                                    <span class="text-warning dot-solid">●</span> 
                                    <span class="text-dark">0</span>
                                </div>
                                <div class="data-row">
                                    <span class="text-success dot-solid">●</span> 
                                    <span class="text-dark">0</span>
                                </div>
                                <div class="data-row">
                                    <span class="dot-outline"></span> 
                                    <span class="text-dark">0</span>
                                </div>
                                <div class="data-row">
                                    <span class="text-dark dot-solid">●</span> 
                                    <span class="text-dark">0</span>
                                </div>
                            </div>
                            
                            <div class="col-5 pl-3 border-left" style="border-color: #f0f0f0 !important;">
                                <div class="data-row">
                                    <span class="text-primary">C</span> 
                                    <span class="text-dark">0</span>
                                </div>
                                <div class="data-row">
                                    <span class="text-primary">E</span> 
                                    <span class="text-dark">0</span>
                                </div>
                                <div class="data-row">
                                    <span class="text-primary">O</span> 
                                    <span class="text-dark">0</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection