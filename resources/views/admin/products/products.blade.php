@extends('admin.layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Settings</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Products</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

    @if(session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

				<!-- row -->
				<div class="row">
                    <div class="col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    @can('Add Product')
                                    <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
                                        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModal">Add Product <i class="fas fa-plus fa-sm"></i></button>
                                    </div>
                                    @endcan
                                </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table key-buttons text-md-nowrap" data-page-length="50">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">#</th>
                                                <th class="border-bottom-0">Product Name</th>
                                                <th class="border-bottom-0">Section Name</th>
                                                <th class="border-bottom-0">Description</th>
                                                <th class="border-bottom-0">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0 ?>
                                            @foreach($products as $product)
                                                <?php $i++ ?>
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>{{$product->Product_name}}</td>
                                                    <td>{{$product->section->section_name}}</td>
                                                    <td>{{$product->description}}</td>
                                                    <td>
                                                        @can('Edit Product')
                                                        <button class="btn btn-success btn-sm"
                                                            data-name="{{ $product->Product_name }}" data-pro_id="{{ $product->id }}"
                                                            data-section_name="{{ $product->section->section_name }}"
                                                            data-description="{{ $product->description }}" data-toggle="modal"
                                                            data-target="#edit_Product">Edit</button>
                                                        @endcan

                                                        @can('Delete Product')
                                                        <button class="btn btn-danger btn-sm " data-pro_id="{{ $product->id }}"
                                                            data-product_name="{{ $product->Product_name }}" data-toggle="modal"
                                                            data-target="#modaldemo9">Delete</button>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <form action="{{route('products.store')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <input type="text" class="form-control" id="Product_name" name="Product_name" required >

                                        </div>

                                        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Section</label>
                                        <select name="section_id" id="section_id" class="form-control" required>
                                            <option value="" selected disabled> --Select Section--</option>
                                            @foreach ($sections as $section)
                                                <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                                            @endforeach
                                        </select>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Confirm</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- edit -->
                    <div class="modal fade" id="edit_Product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action='products/update' method="post">
                                {{ method_field('patch') }}
                                {{ csrf_field() }}
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="title">:Product Name</label>

                                        <input type="hidden" class="form-control" name="pro_id" id="pro_id" value="">

                                        <input type="text" class="form-control" name="Product_name" id="Product_name">
                                    </div>

                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">:Section</label>
                                    <select name="section_name" id="section_name" class="custom-select my-1 mr-sm-2" required>
                                        @foreach ($sections as $section)
                                            <option>{{ $section->section_name }}</option>
                                        @endforeach
                                    </select>

                                    <div class="form-group">
                                        <label for="des">:Description</label>
                                        <textarea name="description" cols="20" rows="5" id='description'
                                            class="form-control"></textarea>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Confirm Editing</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- delete -->
        <div class="modal fade" id="modaldemo9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="products/destroy" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <p>? Are You Sure You Want To Delete This Product</p><br>
                        <input type="hidden" name="pro_id" id="pro_id" value="">
                        <input class="form-control" name="product_name" id="product_name" type="text" readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Confirm</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
<!--Internal  Datepicker js -->
<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<!-- Internal Select2 js-->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<!-- Internal Modal js-->
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>
<script>
    $('#edit_Product').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var Product_name = button.data('name')
        var section_name = button.data('section_name')
        var pro_id = button.data('pro_id')
        var description = button.data('description')
        var modal = $(this)
        modal.find('.modal-body #Product_name').val(Product_name);
        modal.find('.modal-body #section_name').val(section_name);
        modal.find('.modal-body #description').val(description);
        modal.find('.modal-body #pro_id').val(pro_id);
    })


    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var pro_id = button.data('pro_id')
        var product_name = button.data('product_name')
        var modal = $(this)

        modal.find('.modal-body #pro_id').val(pro_id);
        modal.find('.modal-body #product_name').val(product_name);
    })

</script>
@endsection
