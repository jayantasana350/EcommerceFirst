@extends('backend.master')
@section('orders')
active
@endsection
@section('content')
<div class="br-pagebody">
    <div class="br-section-wrapper">

        <div class="container hidden">
            <div  class="row">
                    <div class="col-lg-3">
                        <a href="{{ route('OrderExport') }}" class="btn btn-info mr-1">Orders Export</a>
                    </div>
                    <div class="col-lg-3">
                        <a href="{{ route('PDFDownload') }}" class="btn btn-info mr-1">PDFDownload</a>
                    </div>
                    <div class="col-lg-6 float-left">
                        <form action="{{ route('SelectedDateDownload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input style="width: 150px; float: left;" type="date" class="form-control" name="start">
                            <input style="width: 150px; float: left;" type="date" class="form-control" name="end">
                            <input style="float: left; cursor: pointer;" type="submit" value="Download" class="btn btn-info">
                        </form>
                    </div>
                    </div><br><br>

                    <div class="tab-content hidden">
                        <div class="tab-pane active" id="category">
                          {{--========================= Categoy Lists Start Here =========================--}}

                          <table class="table table-bordered table-colored table-info">
                            <thead>
                              <tr>
                                <th class="wd-10p text-center">SL</th>
                                <th class="wd-35p text-center">Product Title</th>
                                <th class="wd-20p text-center">Price</th>
                                <th class="wd-20p text-center">Quantity</th>
                                <th class="wd-20p text-center">Total Unit</th>
                                <th class="wd-20p text-center">Purchese Date</th>
                                <th class="wd-20p text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $key=>$order)
                                <tr>
                                    <td class="wd-10p text -center">{{ $orders->firstItem() + $key }}</td>
                                    <td class="wd-35p text-center">{{ $order->product->title }}</td>
                                    <td class="wd-35p text-center">{{ $order->product_unit_price }}</td>
                                    <td class="wd-35p text-center">{{ $order->quantity }}</td>
                                    <td class="wd-35p text-center">{{ $order->quantity * $order->product_unit_price }}</td>
                                    <td class="wd-35p text-center">{{ $order->created_at }}</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="" class="btn btn-info mr-1" data-toggle="modal" data-target="#EditColor">View</a>
                                        <div class="modal fade" id="EditColor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content p-3" style="width: 400px">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLongTitle">Add a New Color</h5>
                                                  <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-layout form-layout-12">
                                                        <form action="" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <input type="hidden" name="id" value="">
                                                            <label class="col-sm-4 form-control-label">Product Name: <span class="tx-danger">*</span></label>
                                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                {{ $order->product->title }}
                                                            </div>
                                                            </div><!-- row -->
                                                            <div class="row mg-t-20">
                                                              <label class="col-sm-4 form-control-label">Product Price: <span class="tx-danger">*</span></label>
                                                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                {{ $order->product_unit_price }}
                                                              </div>
                                                            </div>
                                                            <div class="row mg-t-20">
                                                                <label class="col-sm-4 form-control-label">Product Quantity: <span class="tx-danger">*</span></label>
                                                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                  {{ $order->quantity }}
                                                                </div>
                                                              </div>
                                                            <div class="row mg-t-20">
                                                                <label class="col-sm-4 form-control-label">Total Price: <span class="tx-danger">*</span></label>
                                                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                  {{ $order->product_unit_price * $order->quantity }}
                                                                </div>
                                                            </div>
                                                            <div class="form-layout-footer mg-t-30 text-center">
                                                            <button class="btn btn-info" style="cursor: pointer;">Update Color</button>
                                                            </div><!-- form-layout-footer -->
                                                        </form>
                                                      </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            {{ $orders->links() }}
                          </table>
                          {{--========================= Categoy List Ends Here =========================--}}
                        </div>
                    </div>
              </div>




    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->

@endsection
