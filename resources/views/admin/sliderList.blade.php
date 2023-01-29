@extends('masterAdmin')
@section('sliderList')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Slider </h4>
                    <h6>Manage your Slider</h6>
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
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Pre Title</th>
                                    <th>Post Title</th>
                                    <th>Button</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($sliders)
                                @foreach($sliders as $slider)
                                <tr>
                                   
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    
                                    <td >
                                    <img src="{{url('photos/' . $slider->image)}}" alt="" height="60px;" width="90px;">
                                        
                                    </td>
                                    <td class="productimgname">
                                    {{$slider->title}}
                                        
                                    </td>
                                    <td>
                                        {{$slider->pre_title}}
                                    </td>
                                    <td>
                                        {{$slider->post_title}}
                                    </td>
                                    
                                   
                                    
                                    <td>
                                        {{$slider->button}}
                                    </td>
                                    
                                   
                                    <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#update_supplier_'.$slider->id}}">
                                        <img src="{{asset('adminFrontend/assets/img/icons/edit.svg')}}" alt="img">
                                        </button>
                                        <div class="modal fade" id="{{'update_supplier_' . $slider->id}}" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="update_supplier_lebel">Update Slider</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{route('updateSlider')}}" class="d-flex" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="p-1">
                                                                <input type="hidden" id="update_sliderId" name="update_sliderId" value="{{$slider->id}}">
                                                                <input type="text" id="update_name" name="update_title" value="{{$slider->title}}"><br><br>
                                                                <input type="text" id="update_email" name="update_pre_title" value="{{$slider->pre_title}}"><br><br>
                                                                <input type="text" id="update_phone" name="update_post_title" value="{{$slider->post_title}}"><br><br>
                                                                <input type="text" id="update_address" name="update_button" value="{{$slider->button}}"><br><br>
                                                                <input type="file" id="update_image" name="update_image" ><br><br>
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





                                        <form action="{{route('deleteSlider')}}" method="post">
                                            @csrf
                                            <input type="hidden" value="{{$slider->id}}" name="slider_id">
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
@endsection