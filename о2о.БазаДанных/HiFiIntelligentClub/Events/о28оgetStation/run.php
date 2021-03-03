<?php
$strDec			=сКодировать($objEDRO->arrEvent['arrReality']['strPlayingStationId'], 'д');
$arrReality		=$objEDRO->arrEvent['arrReality'];
if($arrReality['int1PlayingStationNum']>0)
	{
	$int0Plus=1;
	}
else
	{
	$int0Plus=0;
	}
print_r($objEDRO);
$str	=str_replace(array("\n","\t"),"", $strDec.'
?strHICListener=Hfic.Samin
&strUserEvent=StartPlayYourStation&strICQR_recommendations_to_improove_quality_raiting=coming_soon
&strHICRequest=Are you ON-AIR now_coming_soon&HiFiIntelligentClub_event_date_and_time='.date(DATE_RFC822).'
&listener_date_and_time='.$arrReality['strListenerDate'].'
&listener_language='.strGetDomainLang().'
&listener_find_you_in_this_style='.$arrReality['strGenre'].'
&listener_find_you_by_this_name='.$arrReality['strName'].'
&listener_find_you_in_this_HiFiType='.$arrReality['strHiFiType'].'
&listener_find_you_at_this_page='.$arrReality['int0Page'].'
&listener_setups_to_display_this_count_of_stations_at_one_page='.$arrReality['int1OnPage'].'
&your_station_number_in_current_listener_list='.$arrReality['int1PlayingStationNum'].'/'.($objEDRO->arrObjects['ч0РасположениеTotal']+$int0Plus).'
&YourICQR_RAITING=x/16
&your_station_ID_at_HIC='.$arrReality['strPlayingStationId'].'
&listener_reality=coming_soon
&msg=v1.999 Sorry for annoying with connecting/disconnecting. Testing overheat. Have a good day. FK Hfic.Samin');
echo $str;
//$objEDRO->arrEvent['bIzDynamic']	=true;
?>