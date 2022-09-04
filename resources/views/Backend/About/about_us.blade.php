
@extends('layouts.backend_master')
@section('title', 'About us')
@section('master_content')
<form action="{{ route('about_us.update', $about_us->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
 
    <div class="card pt-2">
        <div class="card-header ">
            <div class="d-flex justify-content-between">
            <h4 class="card-title">About us</h4>
            <button class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Update about us Information</button>

            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered" id="postTable">
                
                <tr>
                    <th>Slider image :</th>
                    <td><input name="image" type="file" class="form-control" id="image"></td>
                    <td><span class="text-danger" id="imageError"></span></td>
                </tr>
                <tr>
                    <th>Description :</th>
                    <td>{{$about_us->description}}</td>
                    <td>
                        <textarea class="form-control" name="footer_1" id="" cols="10" rows="5">
                            {{$about_us->description}}
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <th>Students :</th>
                    <td>{{$about_us->students}}</td>
                    <td><input type="text" class="form-control" name="phone" value="{{$about_us->students}}"></td>
                </tr>
                <tr>
                    <th>Faculties :</th>
                    <td>{{$about_us->faculties}}</td>
                    <td><input type="text" class="form-control" name="phone" value="{{$about_us->faculties}}"></td>
                </tr>
                <tr>
                    <th>Branches :</th>
                    <td></td>
                    <td><input type="text" class="form-control" name="phone" value=""></td>
                </tr>
                <tr>
                    <th>Awards :</th>
                    <td></td>
                    <td><input type="text" class="form-control" name="phone" value=""></td>
                </tr>
                <tr>
                    <th>Experties Name :</th>
                    <td></td>
                    <td><input type="text" class="form-control" name="fb" value=""></td>
                </tr>
                <tr>
                    <th>Experties Title :</th>
                    <td></td>
                    <td><input type="text" class="form-control" name="tw" value=""></td>
                </tr>
                <tr>
                    <th>Experties image :</th>
                    <td></td>
                    <td><input type="text" class="form-control" name="ins" value=""></td>
                </tr>
                <tr>
                    <th>Reviewer Name :</th>
                    <td></td>
                    <td><input type="text" class="form-control" name="fb" value=""></td>
                </tr>
                <tr>
                    <th>Reviewer Title :</th>
                    <td></td>
                    <td><input type="text" class="form-control" name="tw" value=""></td>
                </tr>
                <tr>
                    <th>Reviewer Comments :</th>
                    <td></td>
                    <td><input type="text" class="form-control" name="fb" value=""></td>
                </tr>
                <tr>
                    <th>Reviewer Description :</th>
                    <td></td>
                    <td><input type="text" class="form-control" name="tw" value=""></td>
                </tr>
               
            </table>
        </div>
    </div>
</form>

@endsection

