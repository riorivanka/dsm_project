@extends('layouts.app')

@section('content')

<style>
    input[type="month"]::-webkit-clear-button,
    input[type="month"]::-webkit-inner-spin-button {
        display: none;
        -webkit-appearance: none;
    }
    
    input[type="month"]::-webkit-calendar-picker-indicator {
        display: none;
        -webkit-appearance: none;
    }
</style>

<div class="content-header pt-4 pb-2">
    <div class="container-fluid px-md-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
            
            <div class="mb-3 mb-md-0 d-flex align-items-center">
                <a href="{{ url()->previous() }}" class="d-flex align-items-center justify-content-center rounded-circle mr-3 text-decoration-none shadow-sm" style="width: 45px; height: 45px; background-color: #fff0e6; transition: all 0.2s;">
                    <i class="fas fa-arrow-left" style="color: #fc7a2f; font-size: 1.1rem;"></i>
                </a>
                <div>
                    <h3 class="m-0 font-weight-bold" style="color: #2d3748; font-size: 1.5rem;">List Initiatives</h3>
                    <p class="text-muted m-0 font-weight-bold" style="font-size: 0.75rem; letter-spacing: 0.5px;">CORPORATE GROUP INITIATIVE</p>
                </div>
            </div>
            
            <div class="d-flex align-items-center px-3 py-2 rounded-pill bg-white shadow-sm border-0" style="width: 100%; max-width: 320px;">
                <i class="fas fa-search text-muted mr-2" style="font-size: 0.9rem;"></i>
                <input type="text" class="form-control border-0 bg-transparent shadow-none p-0" placeholder="Search initiative..." style="font-size: 0.9rem; outline: none;">
            </div>
            
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid px-md-4">

        <div class="d-flex flex-column flex-xl-row justify-content-between align-items-xl-center mb-4 bg-white p-3 shadow-sm" style="border-radius: 16px;">
            <div class="mb-3 mb-xl-0 border-right-xl pr-xl-3" style="border-color: #edf2f7 !important;">
                <div class="d-flex align-items-center px-3 py-2 rounded-pill shadow-sm" 
                     style="background-color: #ffffff; border: 2px solid #edf2f7; transition: all 0.3s ease; cursor: pointer;"
                     onmouseover="this.style.borderColor='#fc7a2f'; this.style.boxShadow='0 4px 10px rgba(252, 122, 47, 0.15)'" 
                     onmouseout="this.style.borderColor='#edf2f7'; this.style.boxShadow='0 .125rem .25rem rgba(0,0,0,.075)'"
                     onclick="document.getElementById('monthPicker').showPicker()">
                    
                    <i class="far fa-calendar-alt mr-2" style="color: #fc7a2f; font-size: 1.2rem; pointer-events: none;"></i>
                    <input type="month" id="monthPicker" class="border-0 font-weight-bold p-0 bg-transparent m-0" 
                           value="{{ date('Y-m') }}" 
                           max="{{ date('Y-m') }}" 
                           style="font-size: 1.05rem; width: 135px; outline: none; accent-color: #fc7a2f; color: #2d3748; cursor: pointer;">
                    <i class="fas fa-chevron-down text-muted ml-1" style="font-size: 0.8rem; pointer-events: none;"></i> 
                </div>
            </div>

            <div class="d-flex flex-wrap align-items-center pl-xl-2">
                <a href="#" class="btn rounded-pill font-weight-bold mr-2 mb-2 mb-md-0 shadow-sm" style="background-color: #fc7a2f; color: #fff; font-size: 0.8rem; padding: 8px 22px; letter-spacing: 0.5px;">ALL</a>
                <a href="#" class="btn rounded-pill font-weight-bold text-muted mr-2 mb-2 mb-md-0" style="background-color: #f8fafc; border: 1px solid #edf2f7; font-size: 0.8rem; padding: 8px 22px; letter-spacing: 0.5px; transition: all 0.2s;">CORE</a>
                <a href="#" class="btn rounded-pill font-weight-bold text-muted mr-2 mb-2 mb-md-0" style="background-color: #f8fafc; border: 1px solid #edf2f7; font-size: 0.8rem; padding: 8px 22px; letter-spacing: 0.5px; transition: all 0.2s;">EFFICIENCY</a>
                <a href="#" class="btn rounded-pill font-weight-bold text-muted mb-2 mb-md-0" style="background-color: #f8fafc; border: 1px solid #edf2f7; font-size: 0.8rem; padding: 8px 22px; letter-spacing: 0.5px; transition: all 0.2s;">OPERATION EXCELLENCE</a>
            </div>
        </div>

        <div class="card border-0 shadow-sm mb-4" style="border-radius: 16px;">
            <div class="card-body p-4 d-flex align-items-center">
                
                <div class="d-flex flex-column justify-content-center border-right pr-4 mr-4" style="border-color: #edf2f7 !important;">
                    <a href="#" class="font-weight-bold text-uppercase mb-1 d-flex align-items-center text-decoration-none" 
                       style="font-size: 0.95rem; letter-spacing: 1px; transition: all 0.2s; padding: 6px 10px; border-radius: 6px; cursor: pointer; color: #000000 !important;"
                       onmouseover="this.style.backgroundColor='rgba(0, 151, 167, 0.1)'; this.style.color='#0097a7'" 
                       onmouseout="this.style.backgroundColor='transparent'; this.style.color='#000000'">
                        Main
                    </a>
                    <a href="#" class="font-weight-bold text-uppercase d-flex align-items-center text-decoration-none" 
                       style="font-size: 0.95rem; letter-spacing: 1px; transition: all 0.2s; padding: 6px 10px; border-radius: 6px; cursor: pointer; color: #000000 !important;"
                       onmouseover="this.style.backgroundColor='#fff0e6'; this.style.color='#fc7a2f'" 
                       onmouseout="this.style.backgroundColor='transparent'; this.style.color='#000000'">
                        Linkage
                    </a>
                </div>
                
                @php 
                    $circleStyle = "width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; font-weight: 700; transition: transform 0.2s ease-in-out;"; 
                @endphp
                
                <div class="d-flex flex-wrap align-items-start justify-content-end flex-grow-1">
                    
                    <div class="d-flex flex-column align-items-center mr-4 mt-2" style="cursor: pointer; width: 75px;" onmouseover="this.firstElementChild.style.transform='scale(1.15)'" onmouseout="this.firstElementChild.style.transform='scale(1)'">
                        <div style="{{ $circleStyle }} background-color: #dc3545; color: white; box-shadow: 0 4px 12px rgba(220,53,69,0.3);">24</div>
                        <span class="font-weight-bold text-uppercase text-center mt-2" style="font-size: 0.65rem; color: #dc3545; letter-spacing: 0.5px; line-height: 1.2;">BEHIND TARGET</span>
                    </div>

                    <div class="d-flex flex-column align-items-center mr-4 mt-2" style="cursor: pointer; width: 75px;" onmouseover="this.firstElementChild.style.transform='scale(1.15)'" onmouseout="this.firstElementChild.style.transform='scale(1)'">
                        <div style="{{ $circleStyle }} background-color: #ffc107; color: #2d3748; box-shadow: 0 4px 12px rgba(255,193,7,0.4);">28</div>
                        <span class="font-weight-bold text-uppercase text-center mt-2" style="font-size: 0.65rem; color: #d39e00; letter-spacing: 0.5px; line-height: 1.2;">WITH ISSUES</span>
                    </div>

                    <div class="d-flex flex-column align-items-center mr-4 mt-2" style="cursor: pointer; width: 75px;" onmouseover="this.firstElementChild.style.transform='scale(1.15)'" onmouseout="this.firstElementChild.style.transform='scale(1)'">
                        <div style="{{ $circleStyle }} background-color: #28a745; color: white; box-shadow: 0 4px 12px rgba(40,167,69,0.3);">32</div>
                        <span class="font-weight-bold text-uppercase text-center mt-2" style="font-size: 0.65rem; color: #28a745; letter-spacing: 0.5px; line-height: 1.2;">ON TARGET</span>
                    </div>

                    <div class="d-flex flex-column align-items-center mr-4 mt-2" style="cursor: pointer; width: 85px;" onmouseover="this.firstElementChild.style.transform='scale(1.15)'" onmouseout="this.firstElementChild.style.transform='scale(1)'">
                        <div style="{{ $circleStyle }} background-color: #ffffff; color: #2d3748; border: 2px solid #cbd5e0; box-shadow: 0 4px 12px rgba(0,0,0,0.04);">120</div>
                        <span class="font-weight-bold text-uppercase text-center mt-2" style="font-size: 0.65rem; color: #718096; letter-spacing: 0.5px; line-height: 1.2;">NOT YET STARTED</span>
                    </div>

                    <div class="d-flex flex-column align-items-center mt-2" style="cursor: pointer; width: 75px;" onmouseover="this.firstElementChild.style.transform='scale(1.15)'" onmouseout="this.firstElementChild.style.transform='scale(1)'">
                        <div style="{{ $circleStyle }} background-color: #1a202c; color: white; box-shadow: 0 4px 12px rgba(26,32,44,0.3);">0</div>
                        <span class="font-weight-bold text-uppercase text-center mt-2" style="font-size: 0.65rem; color: #1a202c; letter-spacing: 0.5px; line-height: 1.2;">CLOSED PROJECT</span>
                    </div>

                </div>
                
            </div>
        </div>

        <div class="card border-0 shadow-sm overflow-hidden" style="border-radius: 16px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-nowrap align-middle">
                        <thead style="background-color: #f8fafc;">
                            <tr>
                                <th class="text-center text-uppercase text-muted border-top-0 pl-4" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1.2rem 1rem; width: 5%;">No.</th>
                                <th class="text-uppercase text-muted border-top-0" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1.2rem 1rem;">Group Initiatives</th>
                                <th class="text-uppercase text-muted border-top-0" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1.2rem 1rem;">Initiative Name</th>
                                <th class="text-center text-uppercase text-muted border-top-0" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1.2rem 1rem;">Type</th>
                                <th class="text-uppercase text-muted border-top-0" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1.2rem 1rem;">Quantitative Measurement</th>
                                <th class="text-uppercase text-muted border-top-0 pr-4" style="font-size: 0.75rem; letter-spacing: 0.5px; border-bottom: 2px solid #edf2f7; padding: 1.2rem 1rem;">Target by End of Year</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center font-weight-bold text-muted pl-4" style="border-color: #edf2f7; padding: 1.2rem 1rem;">1</td>
                                <td class="font-weight-bold" style="color: #a0aec0; font-size: 0.8rem; border-color: #edf2f7; padding: 1.2rem 1rem;">CORPORATE INITIATIVE</td>
                                <td style="border-color: #edf2f7; padding: 1.2rem 1rem;">
                                    <a href="#" class="font-weight-bold text-dark text-decoration-none" style="font-size: 0.95rem; border-bottom: 1px solid #cbd5e0; padding-bottom: 2px; transition: border-color 0.2s;">
                                        Lingkage Gross Margin
                                    </a>
                                </td>
                                <td class="text-center" style="border-color: #edf2f7; padding: 1.2rem 1rem;">
                                    <span class="font-weight-bold rounded-pill" style="padding: 6px 14px; font-size: 0.7rem; letter-spacing: 0.5px; background-color: #fff0e6; color: #fc7a2f;">CORE</span>
                                </td>
                                <td style="font-size: 0.9rem; color: #4a5568; border-color: #edf2f7; padding: 1.2rem 1rem;">Growth Margin Value</td>
                                <td class="font-weight-bold text-dark pr-4" style="border-color: #edf2f7; padding: 1.2rem 1rem;">182.073.828.590</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection