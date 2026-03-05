@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container-fluid px-md-4">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h3 class="m-0 font-weight-bold text-dark">Dashboard Overview</h3>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid px-md-4">

        <div class="row mb-4">

            <div class="col-md-5 col-12 mb-4 mb-md-0">
                <div class="p-3 h-100 shadow-sm border-0" style="background-color: #d4edda; border-radius: 12px;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 bg-white rounded-circle mr-3 d-flex align-items-center justify-content-center shadow-sm" style="width: 32px; height: 32px;">
                            <i class="fas fa-tags text-dark" style="font-size: 0.8rem;"></i>
                        </div>
                        <h6 class="font-weight-bold text-uppercase mb-0 text-dark small" style="letter-spacing: 0.5px; font-size: 0.8rem;">Type Initiative</h6>
                    </div>

                    <div class="pl-1">
                        <div class="d-flex align-items-center mb-2">
                            <span class="text-orange mr-2 text-center font-weight-bold" style="width: 20px; font-size: 1.0rem; color: #fc7a2f;">C</span>
                            <span class="text-muted small font-weight-bold">CORE INITIATIVE</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <span class="text-orange mr-2 text-center font-weight-bold" style="width: 20px; font-size: 1.0rem; color: #fc7a2f;">E</span>
                            <span class="text-muted small font-weight-bold">EFFICIENCY INITIATIVE</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="text-orange mr-2 text-center font-weight-bold" style="width: 20px; font-size: 1.0rem; color: #fc7a2f;">O</span>
                            <span class="text-muted small font-weight-bold">OPERATION EXCELLENCE</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-12">
                <div class="p-3 h-100 shadow-sm border-0" style="background-color: #d4edda; border-radius: 12px;">
                    <div class="d-flex align-items-center mb-3">
                        <div class="p-2 bg-white rounded-circle mr-3 d-flex align-items-center justify-content-center shadow-sm" style="width: 32px; height: 32px;">
                            <i class="fas fa-traffic-light text-dark" style="font-size: 0.8rem;"></i>
                        </div>
                        <h6 class="font-weight-bold text-uppercase mb-0 text-dark small" style="letter-spacing: 0.5px; font-size: 0.8rem;">Traffic Light Status</h6>
                    </div>

                    <div class="row pl-1 font-weight-bold">
                        @php $dotBase = "display: inline-block; width: 12px; height: 12px; border-radius: 50%; margin-right: 10px; border: 1px solid rgba(0,0,0,0.1); flex-shrink: 0;"; @endphp

                        <div class="col-md-6 col-12">
                            <div class="d-flex align-items-center mb-2">
                                <span style="{{ $dotBase }} background-color: #dc3545;"></span>
                                <span class="text-muted small">BEHIND TARGET</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <span style="{{ $dotBase }} background-color: #ffc107;"></span>
                                <span class="text-muted small">WITH ISSUES</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <span style="{{ $dotBase }} background-color: #28a745;"></span>
                                <span class="text-muted small">ON TARGET</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="d-flex align-items-center mb-2">
                                <span style="display: inline-block; width: 12px; height: 12px; border-radius: 50%; margin-right: 10px; border: 1.5px solid #6c757d; flex-shrink: 0;"></span>
                                <span class="text-muted small">NOT YET STARTED</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <span style="{{ $dotBase }} background-color: #343a40;"></span>
                                <span class="text-muted small">CLOSED PROJECT</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mb-4">
            @php
                $btnClass = "btn w-100 py-3 shadow-sm text-uppercase font-weight-bold text-white d-flex align-items-center justify-content-center";
                $btnStyle = "background-color: #0097a7; border-radius: 12px; font-size: 0.9rem; letter-spacing: 0.5px; border: none; text-decoration: none; min-height: 60px;";
            @endphp

            <div class="col-md-6 col-12 mb-3 mb-md-0">
                <a href="{{ route('initiative.corporate') }}" class="{{ $btnClass }}" style="{{ $btnStyle }}">
                    Corporate Group Initiative
                </a>
            </div>
            
            <div class="col-md-6 col-12">
                <a href="{{ route('initiative.divisional') }}" class="{{ $btnClass }}" style="{{ $btnStyle }}">
                    Divisional Group Initiative
                </a>
            </div>
        </div>

        <div class="row justify-content-center">
            @php
                $icons = [
                    ['icon' => 'fas fa-chart-line', 'title' => 'Business Controlling'],
                    ['icon' => 'fas fa-layer-group', 'title' => 'Category'],
                    ['icon' => 'fas fa-money-bill-wave', 'title' => 'Finance'],
                    ['icon' => 'fas fa-users', 'title' => 'Human Capital'],
                    ['icon' => 'fas fa-laptop-code', 'title' => 'IT'],
                    ['icon' => 'fas fa-truck', 'title' => 'Logistic'],
                    ['icon' => 'fas fa-bullhorn', 'title' => 'Marketing'],
                    ['icon' => 'fas fa-tags', 'title' => 'Merchandising'],
                    ['icon' => 'fas fa-cogs', 'title' => 'Operation'],
                    ['icon' => 'fas fa-building', 'title' => 'Property & Development'],
                    ['icon' => 'fas fa-file-invoice-dollar', 'title' => 'Purchasing & GA'],
                ];
                $cardDot = "display: inline-block; width: 8px; height: 8px; border-radius: 50%;";
            @endphp

            @foreach($icons as $data)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card border-0 shadow-sm h-100 position-relative overflow-hidden" style="border-radius: 12px;">
                    <i class="{{ $data['icon'] }}" style="position: absolute; bottom: -8px; right: 0px; opacity: 0.31; font-size: 4.5rem; transform: rotate(-10deg); color: #fc7a2f; pointer-events: none; z-index: 0;"></i>

                    <div class="card-body position-relative p-3" style="z-index: 1; background: transparent;">
                        <h6 class="font-weight-bold text-uppercase mb-2 border-bottom pb-2 text-dark" style="font-size: 0.75rem; letter-spacing: 0.5px;">{{ $data['title'] }}</h6>

                        <div class="row no-gutters text-muted font-weight-bold" style="font-size: 0.8rem;">
                            <div class="col-7 pr-2">
                                <div class="d-flex justify-content-between align-items-center mb-1"><span style="{{ $cardDot }} background-color: #dc3545;"></span> <span class="text-dark">0</span></div>
                                <div class="d-flex justify-content-between align-items-center mb-1"><span style="{{ $cardDot }} background-color: #ffc107;"></span> <span class="text-dark">0</span></div>
                                <div class="d-flex justify-content-between align-items-center mb-1"><span style="{{ $cardDot }} background-color: #28a745;"></span> <span class="text-dark">0</span></div>
                                <div class="d-flex justify-content-between align-items-center mb-1"><span style="{{ $cardDot }} border: 1px solid #6c757d;"></span> <span class="text-dark">0</span></div>
                                <div class="d-flex justify-content-between align-items-center"><span style="{{ $cardDot }} background-color: #343a40;"></span> <span class="text-dark">0</span></div>
                            </div>
                            <div class="col-5 pl-3 border-left" style="border-color: #f0f0f0 !important;">
                                <div class="d-flex justify-content-between mb-1"><span class="text-primary">C</span> <span class="text-dark">0</span></div>
                                <div class="d-flex justify-content-between mb-1"><span class="text-primary">E</span> <span class="text-dark">0</span></div>
                                <div class="d-flex justify-content-between"><span class="text-primary">O</span> <span class="text-dark">0</span></div>
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
