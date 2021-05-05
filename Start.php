#!/usr/bin/php
<?php                  /*_
© Andrey Chekmaryov 2021

      // / \\
      \\/   \\     /\
       \\//\//   <  **>
        //\/       jl

./././././././
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Email:    assminog@gmail.com,|Telegram: https://t.me/HficSamin  |VK:     	https://vk.com/Hfic.Samin
	  tubmulur@yandex.ru |				        | 		https://vk.com/HiFiIntelligentClub
Phone:    +7(911)787-44-57,  |Whatsapp: +7(911)787-44-57	|Facebook: 	https://facebook.com/Hfic.Samin	
			     |					|		https://facebook.com/HiFiIntelligentClub
                             |					| 
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru  <- Not workimg out of money. Registered untill
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM <- Not workimg out of money.
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion <- Free of charge,not working.
														  Will be started soon for
        	        													  listening with pleasure.
														  International streams 
	        													  divided by categories 
														  described as ICQR.
			    |E    |D     |R      |O      |
||||||||||||||||||||||||||||Event|Design|Reality|Objects||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/

фЗагрузчикНоль('/home/EDRO.SetOfTools/0.Настройки/1.Define.php');

фЗагрузчикНоль(сРасположениеБазовойСистемыОповещенияАдминистратора);

фЗагрузчикНоль(сРасположениеБазовойСистемыКириллИМефодий);

$оКиМ			= КиМ::оНачПроц(
				    '1.Загрузить библиотеки'.
				    '1.Загрузить библиотеку объектов  EDRO, позволяющую комбинировать объекты, создавая программу из готовых функциональных объектов'
				    ); 
$оКиМ->ч0ЖдёмЧастей	= 17;
$оКиМ->сИмяФайла	= сРасположениеБазовойСистемыЗагрузчик;
			$оКиМ->сНач();
			$оКиМ->_КонПроц();

	 //  | ЕСЛИ     ДАЁШЬ
    //       | ДЕЙСТВИЕ           
       //    | РЕЗУЛЬТАТ    СТРАНЕ
   //        | ОТЧЁТ \ /////\   /\  //\   
	 //  / \  \ \ // /\\ \ /  \// _\     ЕДРО
        //  /   \  \ //\// \\/\\\\\\\  /\      
		 \  //\// /\ /  \\\\  ////     \   \\/ / :ПОЛИМЕР
	          \//\// /\ \  / \\\/ /  /:ПОЛИМЕР\\\\/  ____
	          // // \ \/	/ / /\\  ////      \\/  /
	         //Event\/  ///                        /. .
                //Design\/ ///   		      /  
               //Reality\/ //                            
              //  Objects\//                             
exit;
while(true)
	{
	ЕДРО::ПОЛИМЕР();
	}



function /*0*/
сВремя(){
	return round(microtime(true), 4);
	}
function /*1*/
фError($str, $n=0)
	{
	//echo$str;
	//$strResult=date('Y-m-d_H:i:s').'<warning style="color:red;">'.$str.'</warning>'."\n";
	$strResult	=date('Y-m-d_H:i:s').' '.$str."\n";
	echo $strResult;
	if(file_put_contents(сШагЗаписьВЖурналОшибок, $strResult, FILE_APPEND)===FALSE)
		{
		echo 'failed to write: '.сШагЗаписьВЖурналОшибок;
		}
	return FALSE;
	}
function /*2*/
фReport($str, $n=0)
	{
	//echo$str;
	//$strResult=date('Y-m-d_H:i:s').'<warning style="color:red;">'.$str.'</warning>'."\n";
	$strResult	=date('Y-m-d_H:i:s').' '.$str."\n";
	echo $strResult;
	if(file_put_contents(сШагЗаписьВЖурнал , $strResult, FILE_APPEND)===FALSE)

		{
		$ф	= фError('Failed to write: '.сШагЗаписьВЖурнал);
		}
	return TRUE;
	}
function /*3*/
фЗапись($оРеальность, $оОбъект) 
	{$ф	= фReport('[ЗАПИСЬ]: '.$сРасположение);
	if(file_put_contents($сРасположение, $сДанные, FILE_APPEND)===FALSE)
		{
		$ф	= фError('[ЗАПИСЬ][ОШИБКА]: Не могу записать файл: '.$сРасположение);
		}
	$ф	= фReport('[.ЗАПИСЬ]: '.$сРасположение);
	return $ф;
	}
function /*4*/
фДозапись($оРеальность, $оОбъект)
	{$ф	= фReport('[ДОЗАПИСЬ]: '.$сРасположение);
	if(file_put_contents($сРасположение, $сДанные, FILE_APPEND)===FALSE)
		{
		$ф	= фError('[ДОЗАПИСЬ][ОШИБКА]: Не могу записать файл: '.$сРасположение);
		}

	$ф	= фReport('[.ДОЗАПИСЬ]: '.$сРасположение);
	return $ф;
	}
function /*5*/
фЧтение($оРеальность, $оОбъект)
	{$ф	= фReport('[ЧТЕНИЕ]: '.$сРасположение);

	$ф	= фReport('[.ЧТЕНИЕ]: '.$сРасположение);
	return $ф;
	}
function /*6*/
фДополнение($оРеальность, $оОбъект)
	{$ф	= фReport('[ДОПОЛН]: '.$сРасположение);

	$ф	= фReport('[.ДОПОЛН]: '.$сРасположение);
	return $ф;
	}
function /*6*/
фЖурнал($фДебаг=TRUE)
	{
	$ф			= фReport('[Старт журнал]');
	$ч0СчётчикВход		= file_get_contents(сРасположениеБазовойСистемыСчётчикВход);
	if(file_put_contents(сРасположениеБазовойСистемыСчётчикВход, ($ч0СчётчикВход+1))===FALSE)
		{
		$ф		= фError('Не могу записать журнал: '.сРасположениеБазовойСистемыСчётчикВход);
		}
	if($фДебаг)
		{
		/*DEBUG*/ 
		if(file_put_contents(сРасположениеБазовойСистемыСчётчикВходИстор,"\n=====\n".'	Start:		'.date("Y-m-d H:i:s").сВремя()."\n", FILE_APPEND)===FALSE)
			{
			$ф		= фError('Не могу записать журнал: '.сРасположениеБазовойСистемыСчётчикВходИстор);
			}
		}
	return $ф;
	}
function /*7*/
фЗагрузчикНоль($оРеальность, $оОбъект) //Благословенный RCE Framework https://vk.com/@hfic.samin-waveinspiration-rce-framework
	{
	$ф		= фReport('[V]'.$_сРасположение);
	if(is_file($_сРасположение))
		{
		$сРасположение		= $_сРасположение;
			            unset($_сРасположение);
		if(file_get_contents($сРасположение)===FALSE)
			{
			$ф	= фError('Error loading '.$сРасположение.'   Exiting!!!');
			exit;
			}
		else
			{
			require$сРасположение;	
			$ф	= фReport('[.]'.$сРасположение);
			}
		}
	return $ф;
	}
 /*_
© Andrey Chekmaryov 2021

      // / \\
      \\/   \\     /\
       \\//\//   <  **>
        //\/       jl

./././././././*/
//

?>