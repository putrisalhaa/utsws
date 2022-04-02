<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WrapperAPI extends Controller
{public function listwebinars($userid) {

    $json = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6Im9teGUzd0hXVDBTdUo1enhRM3V4MWciLCJleHAiOjE2NDk0OTU4MzAsImlhdCI6MTY0ODg5MTAzMH0.YHK64F7zlNm4zNNXsyoCkGnTQYVRggK5amNls_ogmt4')->get( 'https://api.zoom.us/v2/users/'.$userid.'/webinars?')->json();
        return response()->json($json);
}
    //
{public function retrieveauser($userid) {

    $json = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6Im9teGUzd0hXVDBTdUo1enhRM3V4MWciLCJleHAiOjE2NDk0OTU4MzAsImlhdCI6MTY0ODg5MTAzMH0.YHK64F7zlNm4zNNXsyoCkGnTQYVRggK5amNls_ogmt4')->get( 'https://api.zoom.us/v2/users/'.$userId?login_type=100)->json();
     return response()->json($json); 
}

{public function listortherecordings($userid) {

    $json = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6Im9teGUzd0hXVDBTdUo1enhRM3V4MWciLCJleHAiOjE2NDk0OTU4MzAsImlhdCI6MTY0ODg5MTAzMH0.YHK64F7zlNm4zNNXsyoCkGnTQYVRggK5amNls_ogmt4')->get( 'https://api.zoom.us/v2/users/'.$userId/recordings?)->json();
     return response()->json($json); 
}

{public function retrieveauserspermissions($userid) {

    $json = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6Im9teGUzd0hXVDBTdUo1enhRM3V4MWciLCJleHAiOjE2NDk0OTU4MzAsImlhdCI6MTY0ODg5MTAzMH0.YHK64F7zlNm4zNNXsyoCkGnTQYVRggK5amNls_ogmt4')->get( 'https://api.zoom.us/v2/users/'.$userId/permissions)->json();
     return response()->json($json); 
}

{public function listusersPACaccounts($userid) {

    $json = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOm51bGwsImlzcyI6Im9teGUzd0hXVDBTdUo1enhRM3V4MWciLCJleHAiOjE2NDk0OTU4MzAsImlhdCI6MTY0ODg5MTAzMH0.YHK64F7zlNm4zNNXsyoCkGnTQYVRggK5amNls_ogmt4')->get( 'https://api.zoom.us/v2/users/'.$userId/pac)->json();
     return response()->json($json); 
}

}
