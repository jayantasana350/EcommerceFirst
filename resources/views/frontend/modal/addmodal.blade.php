<!-- Quick-view modal popup start-->
@foreach ($product as $products)
<div class="modal fade bd-example-modal-lg theme-modal" id="quick-view{{ $products->id }}" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content quick-view-modal">
            <form action="{{ route('QuickAddToCart') }}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $products->id }}">
                <div class="modal-body" style="background-image: none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{ asset('images/' . $products->thumbnail) }}" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>{{ $products->title }}</h2>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium</p>
                                </div>
                                <div class="product-description border-product">
                                    @php
                                    $count = 0;
                                    @endphp
                                    <h4> <input type="text" class="modalprice" name="price" value="@foreach ($attributes as $item) @if ($count >= 1) @continue @endif @if ($item->product_id == $products->id) {{ $item->price }}.0{{ $count++ }}@endif @endforeach" readonly></h4>
                                    <p>
                                    </p>
                                        {{-- @foreach ($attributes as $itemattr)
                                            @if ($itemattr->product_id == $products->id)
                                                @if ($itemattr->id)
                                                    @if ($itemattr->product_upc)
                                                    <h6 class="product-title pb-1">{{ $itemattr->product_upc }}</h6>
                                                    @endif
                                                @endif
                                            @endif
                                        @endforeach --}}
                                        {{-- @if (count($attributes) > 0)
                                            @foreach ($collection as $item)

                                            @endforeach
                                        @endif --}}


                                    <h6 class="product-title pb-1">Colors</h6>
                                    <div class="color-variant">
                                        <ul class="color-variant coloradd" id="getColorToPrice">
                                            @php
                                                $quick_attribute = App\Attributes::where('product_id', $products->id)->get();
                                            @endphp
                                            @foreach ($quick_attribute as $qattribute)
                                            <label class="btn btn_primary bt_check"  for="btn-check-2"><input type="radio" class="colors_id" name="color_id" value="{{ $qattribute->color_id }}" data-product="{{ $qattribute->product_id }}">{{ $qattribute->get_color->color_name }}</label>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <h6 class="product-title">Sizes</h6>
                                    <div class="size-box">
                                        <ul class="size-variant sizesadd" id="getSizeToPrice">
                                            @foreach ($quick_attribute as $sitem)
                                                <label class="btn btn_primary bt_check"  for="btn-check-2">
                                                    <input type="radio" class="sizes_id" id="" name="size_id" value="{{ $sitem->size_id }}" data-product="{{ $sitem->product_id }}">
                                                    {{ $sitem->get_size->size_name }}</label>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-left-minus qty_minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity" class="form-control input-number qty" value="1">
                                            <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-right-plus qty_plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons"><button type="submit" class="btn btn-solid">add to cart</button> <button
                                        href="#" class="btn btn-solid">view detail</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
<!-- Quick-view modal popup end-->
@section('footer_cs')
<style>
    .product-right .color-variant li {
        height: 30px;
        width: auto;
        cursor: pointer;
        border: 1px solid #cdcdcd;
        border-radius: 0px;
        padding: 3px 10px 0px 10px;
    }

    .btn_outline_primary {
        height: 30px;
        width: auto;
        margin-right: 10px;
        cursor: pointer;
        text-align: center;
        border: 1px solid #cdcecd;
        padding-bottom: 25px !important;
    }

    .product-right .size-box ul li {
        height: 35px;
        width: 35px;
        border-radius: 50%;
        margin-right: 10px;
        cursor: pointer;
        text-align: center;
        border: 1px solid #cdcecd;
        line-height: 31px;
    }

    input.btn_price {
    border: none;
    background: transparent;
    cursor: text !important;
}

input.input_getsize{
    border: none;
    background: transparent;
    text-align: center;
    max-width: 30px;
    border-radius: 50%;
    cursor: pointer;
}


.sizeadd label.bt_check{
    position: relative;
}

.sizeadd input.btn_check[type=radio] {
    position: absolute;
    cursor: pointer;
    width: 80px;
    height: 30px;
    background: transparent;
    opacity: 0.09;
}
.size-variant label.btn.btn_primary {
    height: 30px;
    width: auto;
    cursor: pointer;
    border: 1px solid #cdcdcd;
    border-radius: 0px;
    padding: 3px 10px 0px 10px;
    margin-right: 5px;
    z-index: 9999;
}

.sizeadd input.[type=radio]:before {
    content: "";
    display: block;
    position: absolute;
    width: 16px;
    height: 16px;
    top: 0;
    left: 0;
    border: 2px solid #555555;
    border-radius: 3px;
    background-color: white;
    /* opacity: 0; */}.sizeadd input.[type=checkbox]:checked:after {
    content: "";
    display: block;
    width: 5px;
    height: 10px;
    border: solid black;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    position: absolute;
    top: 2px;
    left: 6px;
}

.color-variant input.color_id{
    position: relative;
}

.color-variant input.color_id[type=radio] {
    position: absolute;
    cursor: pointer;
    width: 80px;
    height: 30px;
    background: transparent;
    opacity: 0.09;
}
.color-variant label.btn_primary{
        height: 30px;
        width: auto;
        cursor: pointer;
        border: 1px solid #cdcdcd;
        border-radius: 0px;
        padding: 3px 10px 0px 10px;
        margin-right: 5px;
    }

    .color-variant input.color_id[type=radio]:before {
        content: "";
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: 0;
        left: 0;
        border: 2px solid #555555;
        border-radius: 3px;
        background-color: white;
        opacity: 0;
}
.color-variant input.btn_check[type=checkbox]:checked:after {
    content: "";
    display: block;
    width: 5px;
    height: 10px;
    border: solid black;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    position: absolute;
    top: 2px;
    left: 6px;
}

</style>
@endsection

@section('footer_js')
    <script>
        $('.qty_plus').click( function() {
            var counter = $('.qty').val();
            counter++ ;
            $('.qty').val(counter);
        });

        $('.qty_minus').click( function() {
            var counter = $('.qty').val();
            counter-- ;
            $('.qty').val(counter);
        });
    </script>
@endsection
