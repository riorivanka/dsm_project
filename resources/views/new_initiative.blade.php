@extends('layouts.app')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="mb-0">Input Initiative Charter</h3>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Initiative Form</h3>
            </div>

            <form method="POST" action="#">
                @csrf

                <div class="card-body">

                    <div class="form-row">
                        <div class="form-group col">
                            <label>Type of Initiative</label>
                            <select class="form-control" required>
                                <option disabled selected>-Select Type of Initiative-</option>
                                <option>Option 1</option>
                            </select>
                        </div>

                        <div class="form-group col">
                            <label>Initiative</label>
                            <select class="form-control" required>
                                <option disabled selected>-Select Initiative-</option>
                            </select>
                        </div>

                        <div class="form-group col">
                            <label>Group Initiative</label>
                            <select class="form-control" required>
                                <option disabled selected>-Select Group Initiative-</option>
                            </select>
                        </div>

                        <div class="form-group col">
                            <label>Corporate KPI</label>
                            <select class="form-control" required>
                                <option disabled selected>-Select Corporate KPI-</option>
                            </select>
                        </div>

                        <div class="form-group col">
                            <label>Key Drivers</label>
                            <select class="form-control" required>
                                <option disabled selected>-Select Key Drivers-</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                      <label>Initiative background</label>
                      <textarea id="initiative_background" class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Annual targel</label>
                      <textarea id="annual_target" class="form-control" aria-label="With textarea"></textarea>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection
