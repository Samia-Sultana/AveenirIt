@extends('masterAdmin')
@section('catagory')

<div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Add Catagory </h4>
                        <h6>Create new Catagory</h6>
                    </div>
                </div>
                <form enctype="multipart/form-data" method="POST" action="{{ route('addCatagory') }}" class="d-flex">
        @csrf
                <div class="card">
                    <div class="card-body">
                        <form action="" class="was-validated">
                            <div class="row">
                               
                               
                                <div class="col-lg-5 col-sm-5 col-12">
                                    <div class="form-group">
                                        <label for="validationServer10">Catagory Name</label>
                                        <input type="text" class="form-control is-invalid" name="catagory" id="catagory" required>
                                        <div class="invalid-feedback"></div>

                                    </div>
                                </div>
                  
                                <div class="col-lg-12">
                                    <button class="btn btn-submit me-2" type="submit">Submit</button>
                                    
                                </div>
                        </form>
                    </div>
                </div>
                </form>
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