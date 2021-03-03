<?php
                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
$objKIIM 	=array();
$str		='';
$str.=DynaScreen::strStart($objEDRO, StationSearchBlock::strHTML($objKIIM, $objEDRO->arrEvent['arrReality'], $objEDRO->arrReality));
if($objEDRO->arrEvent['bIzDynamic'])
	{
	}
else
	{
	if($objEDRO->arrReality['bIzDesktop'])
		{
		$str	.=Overlay::strHTML($objEDRO);
		}
	}
	$str .='
	<ICQR_SEARCH
		class	="fix brick V96 layer_3 BC1 L2"
		style	="width:100vw;"
		>';
		$str .='
		<title 
			class="brick left L1"
			>ICQR:
		</title>
		<sensor_block
			class="brick left"
			>'.ICQRType::strHTML($objKIIM, '', $objEDRO->arrEvent['arrReality'], $objEDRO).'
		</sensor_block>';
	$str .='
	</ICQR_SEARCH>';
	$str .=StationList::strHTML($objKIIM, $objEDRO);
	
	$str .='<myName
			class="
				fixed V97 block layer_5 BC2 TC2
				"
			style="left:40%"
			>';
			$str .=Tag::strHTML($objKIIM, $objEDRO->arrEvent['arrReality']['strName'], $objEDRO->arrEvent['arrReality'], 'strName', 11);
	$str .='</myName>';
	$str .='<myStyle
			class="
				fixed V97 HL0 block layer_5 BC2 TC2
				"
			>';
		$str .=Tag::strHTML($objKIIM, $objEDRO->arrEvent['arrReality']['strGenre'], $objEDRO->arrEvent['arrReality'], 'strGenre', 11);
	$str .='</myStyle>';
	//print_r($objEDRO->arrEvent);
	$str .='<market class="TC1 BC1 fixed V4 HR0 block layer_2" style="font-size:small;height:20px;line-height:19px;">';
	if(strtolower($objEDRO->arrEvent['arrReality']['strGenre'])=="trance"&&$objEDRO->arrEvent['arrReality']['strName']=='')
		{
		$str .='<ifRU>Воодушевлён Ферри Корстеном</ifRU>';
		$str .='<ifEN>Inspired by Ferry Corsten</ifEN>';
		}
	    else
		{
		//echo '<ifRU><marquee scrollamount="1" style="color:red;">ХайФайИнтеллиджентКлаб поздравляет Россиян с Днём Конституции!</marquee></ifRU>';
		//echo '<ifEN><marquee scrollamount="1" style="color:red;">HiFi Intelligent Club congratulates the Russians on Constitution Day</marquee></ifEN>';
		}
	$str .='</market>';

	$str .=HiFiNavigation::strHTML($objKIIM, $objEDRO->arrObjects['мРасположение'], $objEDRO->arrEvent['arrReality'], $objEDRO);
$str .=DynaScreen::strEnd($objEDRO->arrEvent['bIzDynamic']);
?>