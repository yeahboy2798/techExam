<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banana;

class BananaController extends Controller
{
    public function add(Request $request)
    {
        $banana = new Banana();
        $banana->birthday = $request->input('birthday');
        $banana->color = $request->input('color');
        $banana->nickname = $request->input('nickname');
        $banana->length = $request->input('length');
        $banana->edible = $request->input('edible');

        $banana->save();
        return response()->json($banana);
    }

    public function showall()
    {
        $banana = Banana::all();
        return response()->json($banana);
    }

    public function getspecificbanana(Request $request, $id)
    {
        $banana = Banana::find($id);
        return response()->json($banana);
    }

    public function updatebanana(Request $request, $id)
    {
        $banana = Banana::find($id);
        $banana->birthday = $request->input('birthday');
        $banana->color = $request->input('color');
        $banana->nickname = $request->input('nickname');
        $banana->length = $request->input('length');
        $banana->edible = $request->input('edible');

        $banana->save();
        return response()->json($banana);
    }

    public function deletebanana(Request $request, $id)
    {
        $banana = Banana::find($id);
        $banana->delete();
        return response()->json($banana);
    }

    public function searchbycolor(Request $request, $color)
    {
        $banana = Banana::where('color', $color)->first();
        $color = $banana->color;
        $birthday = $banana->birthday;
        $nickname = $banana->nickname;
        $length = $banana->length;
        
        
        //get the number of days
        $now = time(); 
        $birthday_int = strtotime($birthday);
        $datediff = $now - $birthday_int;

        $age = round($datediff / (60 * 60 * 24));
        
        //condition if the banana is still edible or not
        $edible = $age < 60 ? 'Edible' : 'Not edible';

        return $data = [
            'Nickname: ' => $nickname,
            'Color: '=> $color,
            'Length: ' => $length,
            'Birthday: ' => $birthday,
            'Age: ' => $age." days",
            'Edible: ' => $edible
        ];
       
    }

    
}
