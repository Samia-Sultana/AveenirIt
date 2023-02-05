@extends('masterAdmin')
@section('product_portfolio_list')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Portfolio List </h4>
                <h6>Manage your product portfolio</h6>
            </div>
            <div class="page-btn">
                <a href="" class="btn btn-added"><img src="{{asset('assets/img/icons/plus.svg')}}" alt="img" class="me-1">Add New Product</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="product-list">
                        <thead>
                            <tr>
                                <th>
                                    <label class="checkboxs">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmarks"></span>
                                    </label>
                                </th>
                                <th>Product Id</th>
                                <th>Product name</th>
                                <th>Thumbnail</th>

                                <th>Demo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($portfolios)
                            @foreach($portfolios as $portfolio)
                            <tr>

                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>
                                <td>
                                    {{$portfolio->product_id}}
                                </td>
                                <td>
                                    {{$portfolio->productName}}
                                </td>

                                <td>
                                    <img src="{{url('photos/' . $portfolio->image)}}" alt="" height="60px;" width="90px;">

                                </td>
                                <td>
                                    <?php
                                    $productInfo =  App\Models\Product::find($portfolio->product_id);
                                    ?>
                                    {{$productInfo->link}}
                                </td>



                                <td>
                                    <input type="hidden" value="{{$portfolio->id}}">
                                    <button type="button" class="btn btn-primary update" data-toggle="modal" data-target="{{'#update_supplier_'.$portfolio->id}}">
                                        <img src="{{asset('adminFrontend/assets/img/icons/edit.svg')}}" alt="img">
                                    </button>
                                   
                                    <div class="modal fade" id="{{'update_supplier_' . $portfolio->id}}" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="update_supplier_lebel">Update Portfolio</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{route('updateProductPortfolio')}}" class="d-flex" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="p-1">
                                                            <input type="hidden" id="portfolio" name="portfolio" value="{{$portfolio->id}}">
                                                            <input type="text" id="name" name="name" value="{{$portfolio->productName}}"><br><br>
                                                            <textarea name="{{'content-' . $portfolio->id}}" id="{{'content-' . $portfolio->id}}" cols="30" rows="10">{{$portfolio->content}}</textarea><br><br>
                                                            <?php
                                                            $products = App\Models\Product::all();
                                                            $productInfo =  App\Models\Product::find($portfolio->product_id);
                                                            ?>
                                                            <label for="validationServer10">Select product</label>
                                                            <select name="product" id="product">
                                                                <option value="{{$portfolio->product_id}}">{{$productInfo->title}}</option>
                                                                @foreach($products as $product)
                                                                <option value="{{$product->id}}">{{$product->title}}</option>

                                                                @endforeach

                                                            </select><br><br>
                                                            <input type="file" id="update_image" name="update_image"><br><br>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary btn-update-supplier">Save changes</button>
                                                        </div>

                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>





                                    <form action="{{route('deleteProductPortfolio')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$portfolio->id}}" name="portfolio_id">
                                        <button type="submit" class="btn btn-danger btn-delete-product">
                                            <img src="{{asset('adminFrontend/assets/img/icons/delete.svg')}}" alt="img">
                                        </button>
                                    </form>


                                </td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>


<!-------modal cdn -------------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-------modal cdn end-------------->
<!-------toaster cdn -------------->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"> </script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>

<script type="text/Javascript">
     $(".update").click(function(e){
        e.preventDefault();

        var $button = $(this);
        var content = 'content-' + $button.prev().val();
        CKEDITOR.replace(content);

     });
    
    
</script>
@endsection