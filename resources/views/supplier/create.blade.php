@extends('layouts.master')


@section('content')

 <div class="row">
     <div class="col-md-6 offset-md-2">

            <h3 class="jumbotron"> please enter the Supplier info</h3>

                 <hr>
                 <form action="/Company" method="POST"  enctype="multipart/form-data" >
            
            @csrf

            <div class="form-group">
                <label for="title">Comcode</label>
                <input type="text" name="compcode" id="compcode" class="form-control">
            </div>
   
               
                <div class="form-group">
                        <label for="title">name </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                            <label for="title">addrress</label>
                            <input type="text" name="addrress" id="addrress" class="form-control">
                        </div>

                  
                                  
         <button type="submit" class="btn btn-info" style="margin-top:10px">Submit</button>

  </form>        
  </div>


 
@endsection