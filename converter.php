<?php
    class converter{
        function ethiopianDateConverter($date){
            $date=date('d-m-Y',strtotime($date));

            $yearE=date('Y',strtotime($date));

            if(strtotime(date('d-m-Y',strtotime('11-09-'.$yearE)))  ==   strtotime(date('d-m-Y',strtotime($date)))){
                //লিপিয়ার �?র পরের বছর কি না 
                $lep=($yearE-7);
                $lep=($lep%4==0)?1:0;
                if($lep){
                    $searchYear=$yearE-1;
                    $yearA=$yearE-8;
                    $searchDate='11-09-'.$searchYear;
                    return $this->calculation($date,$yearA,$searchDate);
                    /*$hSearchStart=strtotime($searchDate);
                    $hSearchStop=strtotime($date);
                    $dayes=0;
                    $sDate=[];
                    while($hSearchStart<$hSearchStop){
                    $sDate[]=date('d-m-Y',$hSearchStart);
                    $dayes=$dayes+1;
                    $hSearchStart=strtotime(date('d-m-Y',$hSearchStart).' +1 day');
                    }
                    $sDate[]=date('d-m-Y',$hSearchStart);
                    $dayes=$dayes+1;
                    
                    if($dayes%30==0){
                    $monthA=intval($dayes/30);
                    $day=30;
                    }else{
                    $monthA=($dayes/30)+1;
                    $day=$dayes%30;
                    }
                    $monthA=intval($monthA);

                    $dateA=$day.'/'.$monthA.'/'.$yearA;*/

                }
            }else if(strtotime(date('d-m-Y',strtotime('11-09-'.$yearE)))  >   strtotime(date('d-m-Y',strtotime($date)))){
                //$yearA=$yearE-8;
                $lep=($yearE-8);
                $lep=($lep%4==0)?1:0;
            }else{
                // $yearA=$yearE-7;
                $lep=($yearE-7);
                $lep=($lep%4==0)?1:0;
            }
            if($lep){
                if(strtotime(date('d-m-Y',strtotime('12-09-'.$yearE)))  >   strtotime(date('d-m-Y',strtotime($date))) ){
                    $searchYear=$yearE-1;
                    $searchDate='12-09-'.$searchYear;
                    $yearA=$yearE-8;
                    return $this->calculation($date,$yearA,$searchDate);
                    /*$searchDate='12-09-'.$searchYear;
                    $hSearchStart=strtotime($searchDate);
                    $hSearchStop=strtotime($date);
                    $dayes=0;
                    $sDate=[];
                    while($hSearchStart<$hSearchStop){
                    $sDate[]=date('d-m-Y',$hSearchStart);
                    $dayes=$dayes+1;
                    $hSearchStart=strtotime(date('d-m-Y',$hSearchStart).' +1 day');
                    }
                    $sDate[]=date('d-m-Y',$hSearchStart);
                    $dayes=$dayes+1;
                    
                    if($dayes%30==0){
                    $monthA=intval($dayes/30);
                    $day=30;
                    }else{
                    $monthA=($dayes/30)+1;
                    $day=$dayes%30;
                    }
                    $monthA=intval($monthA);

                    $dateA=$day.'/'.$monthA.'/'.$yearA;*/
                    //return $date.'-->'.$dateA.' day->'.$dayes;
                    //return $sDate;
                }
                else{
                    $searchYear=$yearE;
                    $searchDate='12-09-'.$searchYear;
                    $yearA=$yearE-7;
                    return $this->calculation($date,$yearA,$searchDate);
                    /* 
                    $hSearchStart=strtotime($searchDate);
                    $hSearchStop=strtotime($date);
                    $dayes=0;
                    $sDate=[];
                    while($hSearchStart<$hSearchStop){
                    $sDate[]=date('d-m-Y',$hSearchStart);
                    $dayes=$dayes+1;
                    $hSearchStart=strtotime(date('d-m-Y',$hSearchStart).' +1 day');
                    }
                    $sDate[]=date('d-m-Y',$hSearchStart);
                    $dayes=$dayes+1;
                    
                    if($dayes%30==0){
                    $monthA=intval($dayes/30);
                    $day=30;
                    }else{
                    $monthA=($dayes/30)+1;
                    $day=$dayes%30;
                    }
                    $monthA=intval($monthA);
                    $dateA=$day.'/'.$monthA.'/'.$yearA;*/
                    //return $date.'-->'.$dateA.' day->'.$dayes;
                }
            }
            else{
                if(strtotime(date('d-m-Y',strtotime('11-09-'.$yearE)))  >   strtotime(date('d-m-Y',strtotime($date))) ){
                    $searchYear=$yearE-1;
                    $searchDate='11-09-'.$searchYear;
                    $yearA=$yearE-8;
                    return $this->calculation($date,$yearA,$searchDate);
                    /*
                    $hSearchStart=strtotime($searchDate);
                    $hSearchStop=strtotime($date);
                    $dayes=0;
                    $sDate=[];
                    while($hSearchStart<$hSearchStop){
                    $sDate[]=date('d-m-Y',$hSearchStart);
                    $dayes=$dayes+1;
                    $hSearchStart=strtotime(date('d-m-Y',$hSearchStart).' +1 day');
                    }
                    $sDate[]=date('d-m-Y',$hSearchStart);
                    $dayes=$dayes+1;
                    
                    if($dayes%30==0){
                    $monthA=intval($dayes/30);
                    $day=30;
                    }else{
                    $monthA=($dayes/30)+1;
                    $day=$dayes%30;
                    }
                    $monthA=intval($monthA);

                    $dateA=$day.'/'.$monthA.'/'.$yearA;*/
                    //return $date.'-->'.$dateA.' day->'.$dayes;
                    //return $sDate;
                }else{
                    $searchYear=$yearE;
                    return $this->calculation($date,$cearchYear);
                    /*$searchDate='11-09-'.$searchYear;
                    $hSearchStart=strtotime($searchDate);
                    $hSearchStop=strtotime($date);
                    $dayes=0;
                    $sDate=[];
                    while($hSearchStart<$hSearchStop){
                    $sDate[]=date('d-m-Y',$hSearchStart);
                    $dayes=$dayes+1;
                    $hSearchStart=strtotime(date('d-m-Y',$hSearchStart).' +1 day');
                    }
                    $sDate[]=date('d-m-Y',$hSearchStart);
                    $dayes=$dayes+1;
                    $yearA=$yearE-7;
                    if($dayes%30==0){
                    $monthA=intval($dayes/30);
                    $day=30;
                    }else{
                    $monthA=($dayes/30)+1;
                    $day=$dayes%30;
                    }
                    $monthA=intval($monthA);
                    $dateA=$day.'/'.$monthA.'/'.$yearA;*/
                }
            }
            return $dateA;
        }
        function strtotimetoathiopianDate($date){
            return $this->ethiopianDateConverter(date('d-m-Y',$date));
        }
        function calculation($date,$yearA,$searchDate){
            //$searchDate='11-09-'.$searchYear;
            $hSearchStart=strtotime($searchDate);
            $hSearchStop=strtotime($date);
            $dayes=0;
            $sDate=[];
            while($hSearchStart<$hSearchStop){
                $sDate[]=date('d-m-Y',$hSearchStart);
                $dayes=$dayes+1;
                $hSearchStart=strtotime(date('d-m-Y',$hSearchStart).' +1 day');
            }
            $sDate[]=date('d-m-Y',$hSearchStart);
            $dayes=$dayes+1;
            //$yearA=$yearE-8;
            if($dayes%30==0){
                $monthA=intval($dayes/30);
                $day=30;
            }else{
                $monthA=($dayes/30)+1;
                $day=$dayes%30;
            }
            $monthA=intval($monthA);

            return $day.'/'.$monthA.'/'.$yearA;
        }
    }



    $con=new converter();
    echo '<pre>';
    print_r($con->strtotimetoathiopianDate(strtotime('28-10-2019')));
    echo '<br>';
    print_r($con->ethiopianDateConverter('12-09-2023'));
    echo '</pre>';

?>