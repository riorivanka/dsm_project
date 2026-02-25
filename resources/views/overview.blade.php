@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3>Overview</h3>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="container-fluid">
        <div class="card mb-4 p-3">
            <div class="row mt-3 justify-content-center">
                <div class="col-md-4 col-12 d-flex">
                    <div class="info-box align-items-start w-100" style="min-height: 190px;">
                        <div class="info-box-content">
                            <span class="font-weight-bold">Type Initiative</span>
                            <span>C → CORE</span>
                            <span>E → EFFICIENCY</span>
                            <span>O → OPERATION EXCELLENCE</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 d-flex">
                    <div class="info-box align-items-start w-100" style="min-height: 190px;">
                        <div class="info-box-content">
                            <span class="font-weight-bold">Traffic Light Initiative</span>
                            <div class="d-flex align-items-center"><span class="text-danger">●</span><i class="mx-1">→</i><span>PROJECT BEHIND TARGET</span></div>
                            <div class="d-flex align-items-center"><span class="text-warning">●</span><i class="mx-1">→</i><span>PROJECT WITH ISSUES</span></div>
                            <div class="d-flex align-items-center"><span class="text-success">●</span><i class="mx-1">→</i><span>PROJECT ON TARGET</span></div>
                            <div class="d-flex align-items-center"><span class="dot-outline">●</span><i class="mx-1">→</i><span>PROJECT NOT YET STARTED</span></div>
                            <div class="d-flex align-items-center"><span class="info-box-text">●</span><i class="mx-1">→</i><span>PROJECT CLOSED</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 justify-content-center">
                <div class="col-md-3 col-12">
                    <div class="info-box bg-primary"><div class="info-box-content text-center"><span class="font-weight-bold">ALL GROUP INITIATIVE</span></div></div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="info-box bg-primary"><div class="info-box-content text-center"><span class="font-weight-bold">GROUP CORPORATE INITIATIVE</span></div></div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="info-box bg-primary"><div class="info-box-content text-center"><span class="font-weight-bold">GROUP DIVISIONAL INITIATIVE</span></div></div>
                </div>
            </div>

            <div class="row mt-3 justify-content-center">
                <div class="col-md-3 col-12">
                    <div class="info-box d-flex justify-content-between align-items-center w-100" style="min-height: 190px;">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center"><span class="text-danger">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="text-warning">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="text-success">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="dot-outline">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                        </div>
                        <div class="text-center"><i class="fas fa-cog fa-5x text-dark"></i></div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center"><span>C</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>E</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>O</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12">
                    <div class="info-box d-flex justify-content-between align-items-center w-100" style="min-height: 190px;">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center"><span class="text-danger">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="text-warning">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="text-success">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="dot-outline">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                        </div>
                        <div class="text-center"><i class="fas fa-cog fa-5x text-dark"></i></div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center"><span>C</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>E</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>O</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12">
                    <div class="info-box d-flex justify-content-between align-items-center w-100" style="min-height: 190px;">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center"><span class="text-danger">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="text-warning">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="text-success">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="dot-outline">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                        </div>
                        <div class="text-center"><i class="fas fa-cog fa-5x text-dark"></i></div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center"><span>C</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>E</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>O</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-12">
                    <div class="info-box d-flex justify-content-between align-items-center w-100" style="min-height: 190px;">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center"><span class="text-danger">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="text-warning">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="text-success">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span class="dot-outline">●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>●</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                        </div>
                        <div class="text-center"><i class="fas fa-cog fa-5x text-dark"></i></div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center"><span>C</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>E</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                            <div class="d-flex align-items-center"><span>O</span><span class="mx-1">:</span><span>JUMLAH</span></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
