<?php

namespace App\Http\Controllers;
use App\contactform;
use DataTables;
use Illuminate\Http\Request;

class ContactformController extends Controller
{
    public function index(Request $request)  {
        if ($request->ajax()) {
            $data = contactform::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="perviewform/'.$row->id .'" class="edit btn btn-primary btn-sm">Perview</a>';
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('displaydata');
    }

    public function create()  {
        return view('add_contact_form');
    }

    public function store(Request $request) {
        
        $data = $this->validate($request, [
            'label_attr.*' => 'required',
            'select_attr.*' => 'required',
            'form_name' => 'required',
            'description' => 'required',
        ]);
    //    dd($request->all());
    //    die;
         $form_name = $request->form_name;
         $count_radio = count($request->select_attr);


         $form_description = $request->description;
         if($request->has('extra_values_select')){
             $extra =  $request->extra_values_select;
             $data = array_merge($data, ['extra_values_select' => $extra]);
         }
         if($request->has('extra_values_radio')){
             $extra =  $request->extra_values_radio;
             $data = array_merge($data, ['extra_values_radio' => $extra]);
         }
        $radio_arr = [];
        for ($i = 1; $i <= $count_radio; $i++) {
             $b = "optradio".$i;
            $optradio = $request->$b[0];
             if($optradio == "required") {
              $radio_arr [] = "on";
             } else {
                $radio_arr [] = "off";
             }
        }
        if(!empty($radio_arr)){
             $data = array_merge($data, ['required_arr' => $radio_arr]);
         }
         $string = serialize($data); 
        contactform::create(['formcontent' => $string, 'name' => $form_name, 'form_description' => $form_description]);
        return  redirect()->route('list.of.form');
    }

    public function perviewform($id) {
        $contactform_data = contactform::where('id',$id)->get();
        $contactform_data = $contactform_data[0];
        return view ('showform', compact('contactform_data'));
    }
}
