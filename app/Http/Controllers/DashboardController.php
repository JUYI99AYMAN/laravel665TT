<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function getDashboard(){
        return Dashboard::all();
    }

    public function getDashboardById($id) {
        $dashboard = Dashboard::find($id);
        if(is_null($dashboard)){
            return response()->json(['message' => 'Dashboard Not Found'], 404);

        }
            return response()->json($dashboard::find($id), 200);
    }

     
     public function getadd(Request $request){
         $dashboard = Dashboard::create($request->all());
         return response($dashboard, 201);

        }

     public function updateDashboard(Request $request, $id){
         $dashboard = Dashboard::find($id);
         if(is_null($dashboard)){
            return response()->json(['message' => 'Dashboard Not Found'], 404);
        }
            $dashboard -> update($request->all());
            return response($dashboard, 200);
        
        }
    

        public function deleteDashboard(Request $request, $id){
            $dashboard = Dashboard::find($id);
            if(is_null($dashboard)){
                return response()->json(['message' => 'Dashboard Not Found'], 404);
            }
            $dashboard->delete();
            return response()->json(null, 204);
        
        }


}  




