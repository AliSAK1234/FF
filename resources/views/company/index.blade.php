@extends('layouts.master')
@section('title')
<p> this is home page </p>

@endsection


@section('content')

<h2> List of Companies </h2> 
<hr>

                
<br>
<div class="row">
        <div class="col-md-6 offset-md-2">
              
            @foreach ($com as $cominf )
            <div class=“container”>
   
            <ul class="list-group  border border-primary ">
               
                    <li class="list-group-item"> Company name {{ $cominf->name }}   </li>
                    <li class="list-group-item"> Company Addrress {{ $cominf->Address }}  </li>
                    <a href ="{{'/Company/'.$cominf->id}}" class="btn btn-info float-left mr-3" type="submit">Show details</a>


                 </ul>
                 <hr>

                </div>

            <br>
            <br>

            @endforeach
    </div>


    <div class ="col-md-3 ">
        
       
    </div>

</div>


<div class="row">
        <div class="col-md-12">
</div>
        </div>
@endsection

