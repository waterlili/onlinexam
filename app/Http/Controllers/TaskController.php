<?php

namespace App\Http\Controllers;
use App\Major;
use App\Major_level;
use App\Job;
use App\Art_field;
use App\Sport_field;
use App\User_info;
use App\Test;
use App\Test_ans;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserInfo;

// use Illuminate\Http\Request;
// use Illuminate\Foundation\Http\UpdateUserInfo;

// use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function questionList(Request $request)
    {

      // $tests = Test::paginate(4);
      // $this->validate($request,['quiz_ans1'=>'required']);
      // foreach($this->request->get('quiz_ans') as $a => $z)
      //   {
      //       $rules['quiz_ans.'.$a] = 'required';
      //   }

          $tests = Test::all();
          $finger=count($tests);
          if($finger<=5){
          $chunks = $tests->chunk(1);
          }else{
            $chunks = $tests->chunk(5);
          }
          $qs=$chunks->toArray();
          $counter=$chunks->count();
        


            
         
        if ($request->ajax()) {
         return view('main_page',compact('counter'))->with('qs',$chunks);

        }

          return view('main_page',compact('counter'))->with('qs',$chunks);

        
    }
    public function storeAnsware(Request $request)
    {
       $ts_num = Test::all();

      //validating array of input text fields --> this too works
        for ($key=1; $key <= count($ts_num); $key++) { 
            $this->validate($request, [
          
          'quiz_ans'.$key => 'required',
          
          ]);
        }
        
          
      $test=$request->all();
     
      $num=count($test);
     
        
             
          if($request->ajax())
       {   

          if($num)
          { 
            
             $score='';
            for ($i=1; $i <= $num-1 ; $i++) { 
             
            if($test['quiz_ans'.$i]=="Notatall"){
                $score +=2.75;
              }elseif ($test['quiz_ans'.$i]=="Rarely") {
                $score +=2.87;
              }
              elseif ($test['quiz_ans'.$i]=="Sometimes") {
                $score +=3;
              }
              elseif ($test['quiz_ans'.$i]=="Often") {
                $score +=3.12;
              }
              elseif ($test['quiz_ans'.$i]=="VeryOften") {
                $score +=3.25;
              }
              
          }
              if($score>=16 && $score<=36)
              {    
                $Ans = Test_ans::where('grade','A')->get();   
                $ts_ans=$Ans[0]['answare'];
                return response()->json(['responseText' => 'Success!','score'=>$ts_ans], 200);
        
              }elseif ($score>=37 && $score<=58) {
                $Ans = Test_ans::where('grade','B')->get();   
                $ts_ans=$Ans[0]['answare'];
                return response()->json(['responseText' => 'Success!','score'=>$ts_ans], 200);
              }elseif ($score>=59 && $score<=80) {
                $Ans = Test_ans::where('grade','C')->get();   
                $ts_ans=$Ans[0]['answare'];
                return response()->json(['responseText' => 'Success!','score'=>$ts_ans], 200);

              }
              else{
                return response()->json([
                'responseText' => $e->getMessage()
                ], 500);

              }
          }else
          {
            return response()->json([
                'responseText' => $e->getMessage()
            ], 500);
          }
       }

      
       
       
   
    }
    public function add_q()
    {
      return view('Question');
    }
    public function store_q(Request $add_q)
    {
      # code...
       $this->validate($add_q,['question'=>'required']);
       $test= new Test($add_q->all());
       // dd($test);
       $result=$test->save();

       if($add_q->ajax())
       {    
          if($result)
          { 

            return response()->json(['responseText' => 'Success!'], 200);
          }else
          {
            return response()->json([
                'responseText' => $e->getMessage()
            ], 500);
          }
       }
       


    }
    public function edit(User_info $user_info)
    {
      return view('etra_info',compact('user_info'));
    }
    public function update(UpdateUserInfo $request,User_info $user_info)
    {
      // $this->validate($request,[
      //   'name' => 'required|max:100',
      //   'lastname' => 'required|max:100',
      //   ''

      //   ]);

      $update=$user_info->update($request->all());
      if($request->ajax())
       {
         if($update)
          {  
            return response()->json(['responseText' => 'Success!'], 200);
          }else
          {
            return response()->json([
                'responseText' => $e->getMessage()
            ], 500);
          }
        }
      

    }
    public function mutiselect()
    {
       $jobs = Job::all();
       $majors = Major::all();
       $majors_lvl=Major_level::all();
       $art_fields=Art_field::all();
       $sport_fields=Sport_field::all();
       return view('etra_info',compact('jobs','majors','majors_lvl','art_fields','sport_fields'));
    	       
    }
    public function add_idea()
    {
      return view('mg_idea');
    }
    
}
