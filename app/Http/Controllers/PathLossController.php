<?php

namespace App\Http\Controllers;

use App\Models\BTSLocation;
use Illuminate\Http\Request;
use App\Models\DataHitung;

class PathLossController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $bts = BTSLocation::whereId(2)->first();

        $jarak = 0.032;
        $frekuensi = 1400;
        $hB = 30;
        $hM = 10;
       // $Amu = 29;

        $Rural = $this->ModelHatta('Rural', $jarak, $frekuensi, $hB, $hM);
        dd($Rural);
        // return view('home');
    }

    public function ModelOkumura ($jarak, $frekuensi, $hB, $hM, $Amu) {
        return ((32.45 + (20 * log10($frekuensi)) + (20 * log10($jarak))) + $Amu- (20 * log10($hB/200)) - (20 * log10($hM/3)) - 17);
    }
    public function ModelHatta ($tipe, $jarak, $frekuensi, $hB, $hM){
        if ($tipe == 'Urban'){ // Urban
            $a = 3.2 * pow(log10(11.75*$hM), 2) - 4.97 ;
        } else { // Sububrban & Rural
            $a = ((1.1*log10($frekuensi) - 0.7) * $hM )- ((1.56*log10($frekuensi)) - 0.8);
        }
        
        $A =(69.55 + (26.161*log10($frekuensi)) - (13.82*log10($hB)) - $a) + ((44.9 - 6.55 * log10($hB)) * log10($jarak));

        if ($tipe == 'Urban'){
            return $A;
        } else if ($tipe == 'Suburban') {
            return $A - (5.4 + (2 * pow(log10(($frekuensi)/28), 2)));
        } else if ($tipe =='Rural') {
            $d = (40.94 + (4.78 * pow(log10($frekuensi), 2)) - (18.33*log10($frekuensi)));
            return $A - $d;
        }
    }
    public function ModelCost231 ($tipe, $jarak, $frekuensi, $hB, $hM){
        if ($tipe == 'Urban'){ // Urban
            $b = 3.2 * pow(log10(11.75*$hM), 2) - 4.97 ;
        } else { // Sububrban & Rural
            $b = ((1.1*log10($frekuensi) - 0.7) * $hM )- ((1.56*log10($frekuensi)) - 0.8);
        }
        
        $B = (46.3 + (33.9*log10($frekuensi)) - (13.82*log10($hB)) - $b) + ((44.9 - (6.55 *log10($hB))) *log10($jarak));
       
        if ($tipe == 'Suburban'){
            return $B + 0;
        } else if ($tipe == 'Rural') {
            return $B + 0 ;
        }  else if ($tipe == 'Urban') {
            return $B + 3 ;
        }

      } 

    //   public function HalamanHitung($tipe){
    //     if ($tipe == 'okumura') return view ('pathloss.dataokumura');
    //     else if ($tipe == 'hatta') return view ('pathloss.datahatta');
    //     else if ($tipe == 'cost231') return view ('pathloss.datacost231');
    //   }

      // Data Rural

      public function HalamanInputRural() {
        return view('pathloss.rural.rural-input', [
            'dataLokasi' => BTSLocation::where('jenis_daerah', 'Rural')->firstOrFail(),
        ]);
      }

      public function HitungRural(Request $req) {
        $hasilHitung = $this->HitungData($req, 'Rural');
       
        return view('pathloss.rural.ruralpathloss', [
            'hasil' => $hasilHitung,
        ]);
      }

      // Data Suburban

      public function PilihLokasiSuburban(){
        return view('pathloss.suburban.suburban-bts', [
            'lokasi'=> BTSLocation::where('jenis_daerah', 'Suburban')->get(),
        ]);
      }

      public function HalamanInputSuburban($idBTS) {
        return view('pathloss.suburban.suburban-input', [
            'dataLokasi' => BTSLocation::whereId($idBTS)->firstOrFail(),
        ]);
      }

      public function HitungSuburban(Request $req) {
        $hasilHitung = $this->HitungData($req, 'Suburban');

        return view('pathloss.suburban.suburbanpathloss', [
            'hasil' => $hasilHitung,
        ]);
      }
 // Data Urban

        public function PilihLokasiUrban(){
            return view('pathloss.urban.urban-bts', [
                'lokasi'=> BTSLocation::where('jenis_daerah', 'Urban')->get(),
            ]);
        }

        public function HalamanInputUrban($idBTS) {
            return view('pathloss.urban.urban-input', [
                'dataLokasi' => BTSLocation::whereId($idBTS)->firstOrFail(),
            ]);
        }

        public function HitungUrban(Request $req) {
            $hasilHitung = $this->HitungData($req, 'Urban');

            return view('pathloss.urban.urbanpathloss', [
                'hasil' => $hasilHitung,
            ]);
        }
      public function HitungData($req, $tipe) {
        //   dd($req->all()); 
          if ($req->model == 'Okumura') {
              // $jarak, $frekuensi, $hB, $hM, $Amu
             return ($this->ModelOkumura($req->jarak, $req->frekuensi, $req->hB, $req->hM, $req->Amu));
          } else if ($req->model == 'Hatta') {
              // $tipe, $jarak, $frekuensi, $hB, $hM
           return ($this->ModelHatta($tipe, $req->jarak, $req->frekuensi, $req->hB, $req->hM));
          } else if ($req->model == 'Cost231') {
              //
            return ($this->ModelCost231($tipe, $req->jarak, $req->frekuensi, $req->hB, $req->hM));
          }
      }
    }