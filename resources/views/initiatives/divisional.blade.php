@extends('layouts.app')

@section('content')

<div class="content-header pt-4 pb-2">
    <div class="container-fluid px-md-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            
            <div class="mb-3 mb-md-0 d-flex align-items-center">
                <a href="{{ url()->previous() }}" class="d-flex align-items-center justify-content-center rounded mr-3 text-decoration-none transition" style="width: 48px; height: 48px; background-color: #fff0e6;">
                    <i class="fas fa-arrow-left" style="color: #fc7a2f; font-size: 1.25rem;"></i>
                </a>
                <div>
                    <h3 class="m-0 font-weight-bold" style="color: #2d3748; font-size: 1.4rem;">List Initiatives</h3>
                    <p class="text-muted m-0 small font-weight-bold">DIVISIONAL GROUP INITIATIVE</p>
                </div>
            </div>
            
            <div class="d-flex align-items-center px-3 py-1 rounded-pill bg-light border" style="width: 100%; max-width: 300px; border-color: #edf2f7 !important;">
                <i class="fas fa-search text-muted mr-2"></i>
                <input type="text" class="form-control border-0 bg-transparent shadow-none px-1" placeholder="Search initiative..." style="font-size: 0.9rem; outline: none;">
            </div>
            
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid px-md-4">

        <div class="d-flex flex-column flex-xl-row justify-content-between align-items-xl-center mb-4 bg-white p-3 border-0 shadow-sm" style="border-radius: 14px;">
            
            <div class="d-flex align-items-center mb-3 mb-xl-0 px-2 border-right" style="border-color: #edf2f7 !important;">
                <div class="p-2 rounded-circle mr-2 d-flex align-items-center justify-content-center bg-light" style="width: 40px; height: 40px;">
                    <i class="far fa-calendar-alt text-dark" style="font-size: 1.1rem;"></i>
                </div>
                <input type="month" class="form-control border-0 font-weight-bold p-0 text-dark" 
                       value="{{ date('Y-m') }}" 
                       style="font-size: 1.25rem; background-color: transparent; width: 170px; cursor: pointer; box-shadow: none; outline: none;">
            </div>

            <div class="d-flex flex-wrap align-items-center pl-xl-2">
                <a href="#" class="btn rounded-pill font-weight-bold mr-2 mb-2 mb-md-0 shadow-sm" style="background-color: #fc7a2f; color: #fff; font-size: 0.85rem; padding: 6px 20px;">ALL</a>
                <a href="#" class="btn rounded-pill font-weight-bold text-muted mr-2 mb-2 mb-md-0" style="background-color: transparent; font-size: 0.85rem; padding: 6px 20px;">CORE</a>
                <a href="#" class="btn rounded-pill font-weight-bold text-muted mr-2 mb-2 mb-md-0" style="background-color: transparent; font-size: 0.85rem; padding: 6px 20px;">EFFICIENCY</a>
                <a href="#" class="btn rounded-pill font-weight-bold text-muted mb-2 mb-md-0" style="background-color: transparent; font-size: 0.85rem; padding: 6px 20px;">OPERATION EXCELLENCE</a>
            </div>
        </div>

        <div class="card border-0 shadow-sm mb-4" style="border-radius: 14px;">
            <div class="card-body p-4 d-flex align-items-center">
                
                <div class="d-flex flex-column justify-content-center border-right pr-4 mr-4" style="border-color: #edf2f7 !important;">
                    <span class="text-muted font-weight-bold text-uppercase mb-2" style="font-size: 0.7rem; letter-spacing: 1px;">Main</span>
                    <span class="text-muted font-weight-bold text-uppercase" style="font-size: 0.7rem; letter-spacing: 1px;">Linkage</span>
                </div>
                
                @php 
                    $circleStyle = "width: 55px; height: 55px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; font-weight: 800; margin-right: 15px;"; 
                @endphp
                <div class="d-flex flex-wrap">
                    <div style="{{ $circleStyle }} background-color: #dc3545; color: white; box-shadow: 0 4px 10px rgba(220,53,69,0.3);">24</div>
                    <div style="{{ $circleStyle }} background-color: #fc7a2f; color: white; box-shadow: 0 4px 10px rgba(252,122,47,0.3);">28</div> 
                    <div style="{{ $circleStyle }} background-color: #28a745; color: white; box-shadow: 0 4px 10px rgba(40,167,69,0.3);">32</div>
                    <div style="{{ $circleStyle }} background-color: #ffffff; color: #2d3748; border: 2px solid #e2e8f0;">120</div>
                    <div style="{{ $circleStyle }} background-color: #1a202c; color: white; box-shadow: 0 4px 10px rgba(26,32,44,0.3);">0</div>
                </div>
                
            </div>
        </div>

        <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 14px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-nowrap">
                        <thead class="bg-white">
                            <tr>
                                <th class="text-center text-uppercase text-muted border-top-0 pl-4" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1rem; width: 5%;">No.</th>
                                <th class="text-uppercase text-muted border-top-0" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1rem;">Group Initiatives</th>
                                <th class="text-uppercase text-muted border-top-0" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1rem;">Initiative Name</th>
                                <th class="text-center text-uppercase text-muted border-top-0" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1rem;">Type</th>
                                <th class="text-uppercase text-muted border-top-0" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1rem;">Quantitative Measurement</th>
                                <th class="text-uppercase text-muted border-top-0 pr-4" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1rem;">Target by End of Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center font-weight-bold text-muted align-middle pl-4" style="border-color: #edf2f7; padding: 1rem 0.75rem;">1</td>
                                <td class="font-weight-bold align-middle" style="color: #718096; font-size: 0.85rem; border-color: #edf2f7; padding: 1rem 0.75rem;">CORPORATE INITIATIVE</td>
                                <td class="align-middle" style="border-color: #edf2f7; padding: 1rem 0.75rem;">
                                    <a href="#" class="font-weight-bold text-dark text-decoration-none" style="font-size: 0.95rem; border-bottom: 1px dashed #cbd5e0;">
                                        Lingkage Gross Margin
                                    </a>
                                </td>
                                <td class="text-center align-middle" style="border-color: #edf2f7; padding: 1rem 0.75rem;">
                                    <span class="rounded font-weight-bold" style="padding: 6px 12px; font-size: 0.75rem; letter-spacing: 0.5px; background-color: #fff0e6; color: #fc7a2f;">CORE</span>
                                </td>
                                <td class="align-middle" style="font-size: 0.9rem; color: #4a5568; border-color: #edf2f7; padding: 1rem 0.75rem;">Growth Margin Value</td>
                                <td class="font-weight-bold text-dark align-middle pr-4" style="border-color: #edf2f7; padding: 1rem 0.75rem;">182.073.828.590</td>
                            </tr>
                            <tr>
                                <td class="text-center font-weight-bold text-muted align-middle pl-4" style="border-color: #edf2f7; padding: 1rem 0.75rem;">2</td>
                                <td class="font-weight-bold align-middle" style="color: #718096; font-size: 0.85rem; border-color: #edf2f7; padding: 1rem 0.75rem;">CORPORATE INITIATIVE</td>
                                <td class="align-middle" style="border-color: #edf2f7; padding: 1rem 0.75rem;">
                                    <a href="#" class="font-weight-bold text-dark text-decoration-none" style="font-size: 0.95rem; border-bottom: 1px dashed #cbd5e0;">
                                        [DSM 2026] TES DSM HARDCODE
                                    </a>
                                </td>
                                <td class="text-center align-middle" style="border-color: #edf2f7; padding: 1rem 0.75rem;">
                                    <span class="rounded font-weight-bold" style="padding: 6px 12px; font-size: 0.75rem; letter-spacing: 0.5px; background-color: #e6f4ea; color: #28a745;">EFFICIENCY</span>
                                </td>
                                <td class="align-middle" style="font-size: 0.9rem; color: #4a5568; border-color: #edf2f7; padding: 1rem 0.75rem;">786 toko menggunakan Mobile Store Support</td>
                                <td class="font-weight-bold text-dark align-middle pr-4" style="border-color: #edf2f7; padding: 1rem 0.75rem;">786</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection