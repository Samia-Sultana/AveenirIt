@extends('masterAdmin')
@section('teamList')
<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Team </h4>
                <h6>Manage your Team</h6>
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
                                <th>Name</th>
                                <th>Image</th>
                                <th>Designation</th>
                                <th>Priority</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($members)
                            @foreach($members as $member)
                            <tr>

                                <td>
                                    <label class="checkboxs">
                                        <input type="checkbox">
                                        <span class="checkmarks"></span>
                                    </label>
                                </td>

                                <td class="productimgname">
                                    {{$member->member}}
                                </td>
                                <td>
                                    <img src="{{url('photos/' . $member->image)}}" alt="" height="60px;" width="90px;">
                                </td>
                                <td>
                                    {{$member->designation}}
                                </td>

                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#update_supplier_'.$member->id}}">
                                        <img src="{{asset('adminFrontend/assets/img/icons/edit.svg')}}" alt="img">
                                    </button>
                                    <div class="modal fade" id="{{'update_supplier_' . $member->id}}" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="update_supplier_lebel">Update Team</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{route('updateTeam')}}" class="d-flex" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="p-1">
                                                            <input type="hidden" id="update_memberId" name="update_memberId" value="{{$member->id}}">
                                                            <input type="text" id="update_name" name="update_name" value="{{$member->member}}"><br><br>
                                                            <input type="text" id="update_email" name="update_designation" value="{{$member->designation}}"><br><br>
                                                            <input type="text" id="update_email" name="update_priority" value="{{$member->priority}}"><br><br>
                                                            <input type="file" id="update_image" name="update_image"><br><br>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary ">Save changes</button>
                                                        </div>

                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>





                                    <form action="{{route('deleteTeam')}}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{$member->id}}" name="member_id">
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