
 @extends('layouts.master')
 
  
 @section('content')
 
 <hr>

        <div class="row">
            <div class="col-md-6 offset-md-2">

 <ul class="list-group  border border-dark">
            

       
            
        <li class="list-group-item">Supplier  code  : {{ $com2->Cmpycode}} </li>
        <li class="list-group-item"> Company name: {{ $com2->Suppliercode }}  </li>
        <li class="list-group-item">Company addrees {{ $com2->Address }}</li>
        <li class="list-group-item">Company addrees {{ $com2->Name }}</li>


             
         
       </ul>

       <a href ="{{'/Company/'.$com2->id.'/edit'}}" class="btn btn-info float-left mr-3" type="submit">Edit</a>

       <form action="{{action('CompaniesController@destroy', $com2->id)}}" method="post">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="DELETE">
        <button class="btn btn-danger" type="submit">Delete</button>
        </form>
   
    </div>
      
</div>
   
</div>

 
    @endsection