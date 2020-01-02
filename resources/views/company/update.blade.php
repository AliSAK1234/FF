@extends('layouts.master')

@section('content')


 <div class="row">
     <div class="col-md-6 offset-md-2">
         <h3>Edit Company data </h3>
         <hr>
         <form action="{{ '/Company/'.$cominf->id }}" method="POST"  enctype="multipart/form-data">

            @csrf
             @method('PUT')

             <div class="form-group">
                <label for="title">Company Code </label>
                <input type="text" name="compcode" id="compcode" class="form-control"  value="{{ $cominf->compcode }}" >
            </div>

            <div class="form-group">
                <label for="title">Company name </label>
                <input type="text" name="name" id="name" class="form-control"  value="{{ $cominf->name }}" >
            </div>
   
                    <div class="form-group">
                <label for="title">Company addrress </label>
                <input type="text" name="addrress" id="addrress" class="form-control" value="{{ $cominf->addrress}}" >
            </div>
        
            <div class="form-group">
               <button type="submit" class="btn btn-info">Update</button>
           </div>
            </form>

       
         
     </div>
 </div>
@endsection