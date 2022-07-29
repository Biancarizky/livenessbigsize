<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

use GuzzleHttp\Client;
use Log;

class liveness_detection_bigsizeController extends Controller

{
public function liveness_detection_bigsize(Request $request){
        $fileTest = $request->file('file');
        $gestures_set = $request->input('gestures_set');
        // return $this->respondWithToken($token);

        if ($fileTest == null){
            // echo "tidak ada data";
            $fileUpload = Http::withHeaders([
                'Accept' => 'application/json',
                // 'Content-Type' => 'multipart/form-data',  
                // 'X-CSRF-TOKEN' => csrf_token(),  
                'Token' => 'ZDIwYmUxMDEtYjcxNi00OGE0LWI3MDUtMzdjZTAzYThkMzFk',
                ])->post('https://api.digidata.ai/cp_digidata/liveness_detection',[
                    "_token"=> "{{ csrf_token() }}",
                    'file' => '01',
                    'gestures_set' => $gestures_set,
                    'trx_id' => "01",
                ]);
                return $fileUpload->json();
        }else{
            return $this->handle($gestures_set, $fileTest);
            // return $this->coba($gestures_set, $fileTest);
        }
    }

    public function liveness_detection(Request $request){
        $fileTest = $request->file('file');
        $gestures_set = $request->input('gestures_set');
        // return $this->respondWithToken($token);

        return $this->handle($gestures_set, $fileTest);
    }

    public static function handle($gesturesSet, $images)
    {
        $livenessData = [
            [
                'name'     => 'gestures_set',
                'contents' => $gesturesSet
            ]
        ];

        $no = 1;

        foreach ( $images as $image )
        {
            $livenessData[] = [
                'name'     => 'file',
                'contents' => fopen($image, 'r'),
                'filename' => $no . '.jpg'
            ];

            $no++;
        }

        $client = new Client;

        $params = [
            'verify' => false,
            'debug' => false,
            'timeout' => 30,
            'headers' => [
                'Accept' => 'application/json',
                // 'Content-Type' => 'image/png',  
                // 'X-CSRF-TOKEN' => csrf_token(),  
                'Token' => 'ZDIwYmUxMDEtYjcxNi00OGE0LWI3MDUtMzdjZTAzYThkMzFk',
            ],
            'multipart' => $livenessData
        ];

        try
        {
            $client = $client->request('POST', "https://api.digidata.ai/cp_digidata/liveness_detection", $params);

            $response = json_decode($client->getBody(), TRUE);

            return [
                'status' => true,
                'response' => $response
            ];
        }
        catch ( \Exception $e )
        {
            //Log::error(__METHOD__ . ': '. $e->getMessage());

            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}