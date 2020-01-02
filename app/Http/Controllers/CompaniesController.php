<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

class CompaniesController extends Controller
{
    
    public function index (){
  

        $com=Company::orderBy('name','ASC')->paginate(3);
   
 
       return view('Company.index',compact('com'));
   
   
       }


       public function show($id)
    
       {
   
          $com2=  Company::find($id);
           
          return view('Company.show',compact('com2'));
   
       }
   
   
   

       public function create() {
   
                   return view ('Company.create');
           
                               }



   public function store(Request $request ) {

                                                               
                  $Com =new Company();
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
                      
                          $cominf =Company::find($id);
                          $cominf->compcode =$request->compcode;
                          $cominf->name =$request->name;
                          $cominf->addrress =$request->addrress;
                          $cominf->save();

                          return redirect('/Company')->with('status', ' Record  was Updated !');

                          }


                          public function destroy($id) {

                            $Com = Company::find($id);
                            $Com->delete();
                    
                            return redirect('/Company')->with('success', 'Ticket has been deleted!!');
                          
                          }
                          


                          
                               

}
