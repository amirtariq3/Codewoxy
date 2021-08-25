@extends('layout.layout')
@section('content')
   
<div class="main-content container-fluid">
<section class="section">
<div class="row mb-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class='card-heading p-1 pl-3'>Update User</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                        <form method="POST" action="{{route('admin.user.update', [$data->id])}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="first-name-column">Name</label>
                                    <input type="text" id="first-name-column" value="{{$data->name}}" class="form-control"  name="name">
                                </div>
                                

                                <div class="form-group">
                                    <label for="first-name-column">Shop Name</label>
                                    <input type="text" id="first-name-column" value="{{$data->shop_name}}"  class="form-control"  name="shop_name">
                                </div>

                                <div class="form-group">
                                    <label for="email-id-column">Email</label>
                                    <input type="email" id="email-id-column" value="{{$data->email}}" class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="email-id-column">Phone</label>
                                    <input type="text" id="email-id-column" value="{{$data->phone}}" class="form-control" name="phone">
                                </div>

                                <div class="form-group">
                                    <label for="email-id-column">City</label>
                                    <input type="text" id="email-id-column" value="{{$data->city}}" class="form-control" name="city">
                                </div>

                                <div class="form-group">
                                    <label for="email-id-column">Address</label>
                                    <input type="text" id="email-id-column" value="{{$data->address}}" class="form-control" name="address">
                                </div>
                                
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-select" id="basicSelect"  name="status" required>
                                        <option value="1">Active</option>
                                        <option value="0">In-Active</option>
            
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary round">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       
        </div>
    </div>
</div>
</section>
</div>

@endsection