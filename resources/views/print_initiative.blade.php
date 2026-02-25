@extends('layouts.app')

@section('content')

<style>
.table-clean {
    border-collapse: collapse;
    width: 100%;
}

.table-clean td {
    border-bottom: 1px solid #000;
    padding: 8px 6px;
}

.table-clean tr.no-border td {
    border-bottom: 0 !important;
}

.table-clean td:first-child {
    width: 30%;
}

/* Print optimization */
@media print {
    .table-clean td {
        border-bottom: 1px solid #000 !important;
        padding: 8px 6px !important;
    }
}
</style>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3>Initiative Charter</h3>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="card">
            {{-- Header --}}
            <div class="card-header">
                <h3 class="card-title">Print Preview</h3>
            </div>
            {{-- Body --}}
            <div class="card m-3 rounded-0 border border-dark border-2">
                <div class="card-body p-0">
                    <table class="table-clean mb-0">
                        <tbody>
                            <tr>
                                <td class="fw-normal">Initiative Title</td>
                                <td class="fw-normal text-end">Test Division Initiative</td>
                            </tr>
                            <tr>
                                <td class="fw-normal">Group Initiatives</td>
                                <td class="fw-normal text-end">Divisional Initiative</td>
                            </tr>
                            <tr>
                                <td class="fw-normal">Initiative Background</td>
                                <td class="fw-normal text-end">Background</td>
                            </tr>
                            <tr>
                                <td class="fw-normal">Initiative Objective</td>
                                <td class="fw-normal text-end">Objectives</td>
                            </tr>
                            <tr>
                                <td class="fw-normal">Initiative Deliverables</td>
                                <td class="fw-normal text-end">Cost</td>
                            </tr>
                            <tr class="no-border">
                                <td class="fw-normal"></i>Scope of Project</td>
                            </tr>
                            <tr class="no-border">
                                <td><i class="fas fa-angle-right mr-2"></i>Functional</td>
                            </tr>
                            <tr class="no-border">
                                <td><i class="fas fa-minus ml-4"></i></td>
                            </tr>
                            <tr>
                                <td colspan="2"><i class="fas fa-angle-right mr-2"></i>Technical</td>
                            </tr>
                            <tr class="no-border">
                                <td class="fw-normal">Etc</td>
                                <td class="fw-normal text-end">Etc</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-end mb-3 mr-4">
                <button class="btn btn-primary btn-sm mr-3">
                    Print
                </button>
                <button class="btn btn btn-warning">
                    Update Inititive Charter
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
