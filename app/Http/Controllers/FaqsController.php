<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faqs;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faqs::paginate(10);
        return view('dashboards.admins.faqs.list', compact('faqs'));
    }

    public function addFaqsForm(){
        return view('dashboards.admins.faqs.create');
    }
    
    public function saveFaqs(Request $request) {        

        $data['question'] = $request->question;
        $data['answer'] = $request->answer;
        $data['created_at'] = Carbon::now();
        if($request->id){
            $data['updated_at'] = Carbon::now();
            Faqs::find($request->id)->update($data);
        }else{
            Faqs::create($data)->id;
        }
        return redirect('admin/faqs')->with('success', 'Question saved successfully');
    }

    public function editFaqs($id){
        $faqs = Faqs::find($id);
        return view('dashboards.admins.faqs.edit', compact('faqs'));
    }
    
    public function deleteFaqs($id){
        $faqs = Faqs::find($id);
        if($faqs->delete()){
            return redirect('admin/faqs')->with('success', 'Question deleted successfully');
        }else{
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
