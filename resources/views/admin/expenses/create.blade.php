@extends('admin.layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection
@section('title')
    Add Bill
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Bills</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Add Bill</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('expenses.store') }}" method="post" enctype="multipart/form-data"
                          autocomplete="off">
                        {{ csrf_field() }}
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="expenses_name" class="control-label">Expenses Name</label>
                                <input type="text" class="form-control @error('expenses_name') is-invalid @enderror"
                                       id="expenses_name" name="expenses_name"
                                       title="Please Enter Expenses Name" required>
                                @error('expenses_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="description" class="control-label">Description</label>
                                <input type="text" class="form-control @error('description') is-invalid @enderror"
                                       id="description" name="description"
                                       title="Please Enter Description" required>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label>Amount</label>
                                <input type="text" class="form-control @error('amount') is-invalid @enderror"
                                       id="amount" name="amount"
                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                       required>
                                @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="supplier_name" class="control-label">Supplier Name</label>
                                <input type="text" class="form-control @error('supplier_name') is-invalid @enderror"
                                       id="supplier_name" name="supplier_name"
                                       title="Please Enter Supplier Name" required>
                                @error('supplier_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="buyer_name" class="control-label">Buyer Name</label>
                                <input type="text" class="form-control @error('buyer_name') is-invalid @enderror"
                                       id="buyer_name" name="buyer_name"
                                       title="Please Enter Buyer Name" required>
                                @error('buyer_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="expense_date" class="control-label">Expense Date</label>
                                <input class="form-control fc-datepicker @error('expense_date') is-invalid @enderror"
                                       name="expense_date" placeholder="YYYY-MM-DD"
                                       type="text" required>
                                @error('expense_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- 3 --}}
                        <div class="row">
                            <div class="col">
                                <label for="payment_method" class="control-label">Payment Method</label>
                                <input type="text" class="form-control @error('payment_method') is-invalid @enderror"
                                       id="payment_method" name="payment_method"
                                       title="Please Enter Payment Method" required>
                                @error('payment_method')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="receipt_number" class="control-label">Receipt Number</label>
                                <input type="text" class="form-control @error('receipt_number') is-invalid @enderror"
                                       id="receipt_number" name="receipt_number"
                                       title="Please Enter Receipt Number">
                                @error('receipt_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">Section</label>
                                <select name="category_id" class="form-control SlectBox" onclick="console.log($(this).val())"
                                        onchange="console.log('change is firing')">
                                    <!--placeholder-->
                                    <option value="" selected disabled>Choose Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- 4 --}}
                        <div class="row">
                            <div class="col-md-12">
                                <label for="receipt_attachment" class="control-label">Receipt Attachment</label>
                                <input type="file" name="receipt_attachment" class="dropify"
                                       accept=".pdf,.jpg, .png, image/jpeg, image/png" data-height="70" />
                                @error('receipt_attachment')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label for="notes">Notes</label>
                                <textarea class="form-control @error('notes') is-invalid @enderror" id="notes"
                                          name="notes" rows="3"></textarea>
                                @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><br>

                        {{-- 5 --}}
                        <div class="row">
                            <div class="col">
                                <label for="tax_amount" class="control-label">Tax Amount</label>
                                <input type="text" class="form-control @error('tax_amount') is-invalid @enderror"
                                       id="tax_amount" name="tax_amount"
                                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                @error('tax_amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Save Data</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection

@section('js')
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();
    </script>
@endsection
