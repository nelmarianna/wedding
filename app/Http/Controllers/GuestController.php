<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Session;
use Illuminate\Http\Request;

use App\Guests;
use App\Invitations;
class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guests = Guests::all();
        return view('guests.index',compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
          'firstName'=>'required',
          'lastName'=>'required'
        ]);

        $guest = new Guests([
          'firstName'=>$request->get('firstName'),
          'lastName'=>$request->get('lastName'),
          'phone'=>$request->get('phone'),
          'response'=>$request->get('response'),
          'vegetarian'=>$request->get('vegetarian'),
          'otherDiet'=>$request->get('otherDiet'),
          'plusOne'=> $request->get('plusOne')
        ]);
        $guest -> save();
        return redirect('/guests')->with('success', 'guest saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $guest=Guests::find($id);
        return view('guests.edit', compact('guest'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request -> validate([
          'firstName'=>'required',
          'lastName'=>'required',
          'response'=>'required'
        ]);

        $guest = Guests::find($id);
        $guest-> firstName = $request->get('firstName');
        $guest-> lastName = $request->get('lastName');
        $guest-> phone = $request->get('phone');
        $guest-> response = $request->get('response');
        $guest-> vegetarian = $request->get('vegetarian');
        $guest-> otherDiet = $request->get('otherDiet');
        $guest-> plusOne = $request->get('plusOne');

        $guest -> save();
        return redirect('/guests')->with('success', 'Guest saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guest = Guests::find($id);
        $guest->delete();
        return redirect('/guests')-with('success', 'Guest deleted!');
    }

    public function uploadFile(Request $request)
    {
       if ($request->input('submit') != null )
       {
         $file = $request->file('file');

         // File Details
         $filename = $file->getClientOriginalName();
         $extension = $file->getClientOriginalExtension();
         $tempPath = $file->getRealPath();
         $fileSize = $file->getSize();
         $mimeType = $file->getMimeType();

         // Valid File Extensions
         $valid_extension = array("csv");

         // 2MB in Bytes
         $maxFileSize = 2097152;

         // Check file extension
         if(in_array(strtolower($extension),$valid_extension))
         {

           // Check file size
           if($fileSize <= $maxFileSize)
           {

             // File upload location
             $location = 'uploads';

             // Upload file
             $file->move($location,$filename);

             // Import CSV to Database
             $filepath = public_path($location."/".$filename);

             // Reading file
             $file = fopen($filepath,"r");

             $importData_arr = array();
             $i = 0;

             while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE)
             {
                $num = count($filedata );

                // Skip first row (Remove below comment if you want to skip the first row)
                if($i == 0){
                   $i++;
                   continue;
                }
                for ($c=0; $c < $num; $c++)
                {
                   $importData_arr[$i][] = $filedata [$c];
                }
                $i++;
             }
             fclose($file);

             // Insert to MySQL database
             foreach($importData_arr as $importData)
             {

               $insertData = array(
                  "firstName"=>$importData[0],
                  "lastName"=>$importData[1],
                  "phone"=>$importData[2],
                  "response"=>$importData[3],
                  "vegetarian"=>$importData[4],
                  "otherDiet"=>$importData[5],
                  "plusOne"=>$importData[6]);

               Guests::insertData($insertData);

             }

           redirect('/guests')->with('message','Import Successful.');
         }else
         {
             redirect('/guests')->with('message','File too large. File must be less than 2MB.');
         }

       }
       else
       {
        redirect('/guests')->with('message','Invalid File Extension.');
       }

     }
   }
  public function rsvp(Request $request)
  {
      $q = $request->get('q');
      $guest = Guests::where('firstName','LIKE','%'.$q.'%')->orWhere('lastName','LIKE','%'.$q.'%')->get();
     if(count($guest)>0) return view('guests/rsvp')->with('details', $guest)->with('message','Guests');
     else return view('guests/rsvp')->with('message','No Matching Guest Information found. Try to search using the names as they are written on your invitation.');
  }

}
