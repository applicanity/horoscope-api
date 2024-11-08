<?php

namespace App\Http\Controllers;

use App\Models\Horoscope;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function hello(Request $request)
    {
        return response()->json(['message' => 'Hello!']);
    }

    public function checkHoroscope(Request $request)
    {
        $birthday = $request->post("birthday");

        $horoscope = Horoscope::where('date_start', '<=', date('2000-m-d', strtotime($birthday)))
            ->where('date_end', '>=', date('2000-m-d', strtotime($birthday)))->first();

        if (empty($horoscope)) {
            $horoscope = Horoscope::where(['name' => 'Capricorn'])->first();
        }

        return response()->json(['success' => true, 'data' => $horoscope]);
    }

    public function getAllHoroscopes()
    {
        return response()->json(['success' => true, 'data' => Horoscope::get()->all()]);
    }

    public function createHoroscope(Request $request)
    {
        $horoscope = Horoscope::create([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end
        ]);

        if ($horoscope->exists) {
            return response()->json(['success' => true, 'data' => $horoscope]);
         } else {
            return response()->json(['success' => false, 'message' => 'Gagal simpan data']);
         }
    }

    public function getHoroscope(Request $request, $id)
    {
        $horoscope = Horoscope::where(['id' => $id])->first();
        if(!$horoscope){
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan']);
        }

        return response()->json(['success' => true, 'data' => $horoscope]);
    }

    public function updateHoroscope(Request $request, $id)
    {
        $horoscope = Horoscope::where(['id' => $id])->first();
        if(!$horoscope){
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan']);
        }

        $horoscope->name = $request->name;
        $horoscope->image = $request->image;
        $horoscope->description = $request->description;
        $horoscope->date_start = $request->date_start;
        $horoscope->date_end = $request->date_end;
        $horoscope->save();

        if ($horoscope->save()) {
            return response()->json(['success' => true, 'data' => $horoscope]);
         } else {
            return response()->json(['success' => true, 'message' => 'Gagal simpan data']);
         }
    }

    public function deleteHoroscope(Request $request, $id)
    {
        $horoscope = Horoscope::where(['id' => $id])->first();
        if(!$horoscope){
            return response()->json(['success' => false, 'message' => 'Data tidak ditemukan']);
        }

        if($horoscope->delete()){
            return response()->json(['success' => true]);
        }else{
            return response()->json(['success' => false, 'message' => 'Gagal hapus data']);
        }
    }
}
