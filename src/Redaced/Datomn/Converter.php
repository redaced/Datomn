<?php 

namespace Redaced\Datomn;

class Converter{
    public function method1($param1){
      return $param1;
    }
   public static function getString($ptime){
		    $date = date_create();      
        date_timestamp_set($date, strtotime($ptime));
        $a = date_format($date, 'Y-m-d H:i:s'); 
        date_default_timezone_set("Asia/Ulaanbaatar");
        $b = date("Y-m-d H:i:s");
        $etime = strtotime($b) - strtotime($a);
        if ($etime < 1)
        {
            return '0 seconds';
        }
        $a = array( 365 * 24 * 60 * 60  =>  'жил',
                     30 * 24 * 60 * 60  =>  'сар',
                          24 * 60 * 60  =>  'өдөр',
                               60 * 60  =>  'цаг',
                                    60  =>  'минут',
                                     1  =>  'секунт'
                    );
        $a_plural = array( 'жил'   => 'жилийн',
                           'сар'  => 'сарын',
                           'өдөр'    => 'өдрийн',
                           'цаг'   => 'цагийн',
                           'минут' => 'минутын',
                           'секунт' => 'секунтын'
                    );
        foreach ($a as $secs => $str)
        {
            $d = $etime / $secs;
            if ($d >= 1)
            {
                $r = round($d);
                return $r . ' ' . ($r > 1 ? $a_plural[$str] : $str) . ' өмнө';
            }
        }
   }
}
