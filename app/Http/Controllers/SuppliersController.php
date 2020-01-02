<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;
class SuppliersController extends Controller
{
    

    public function index (){
  

        $com=Supplier::all();
   
 
       return view('supplier.index',compact('com'));
   
   
       }


       public function show($id)
    
       {
   
          $com2=  Supplier::find($id);
           
          return view('supplier.show',compact('com2'));
   
       }
   
   
   

       public function create() {
   
                   return view ('supplier.create');
           
                               }



   public function store(Request $request ) {

                                                               
                  $Com =new Supplier();
                  $Com->compcode =$request->compcode;
                  $Com->name =$request->name;
                  $Com->addrress =$request->addrress;
              
                  $Com->save();
                
                  return redirect('/Company')->with('status', 'Post was created !');


                          }



                          public function edit($id)
                          {    

                                                        
                                 $cominf= Company::find($id);

                                 return view('Company.update',compact('cominf'));
                        

                          }



                          public function update(Request $request,$id) {
                      
                          $cominf =Supplier::find($id);
                          $cominf->compcode =$request->compcode;
                          $cominf->name =$request->name;
                          $cominf->addrress =$request->addrress;
                          $cominf->save();

                          return redirect('/Company')->with('status', ' Record  was Updated !');

                          }


                          public function destroy($id) {

                            $Com = Supplier::find($id);
                            $Com->delete();
                    
                            return redirect('/Company')->with('success', 'Ticket has been deleted!!');
                          
                          }
                          





}
