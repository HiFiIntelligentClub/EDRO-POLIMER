<?php
        /*
© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2020 [25.06.2020]
//////|		[КТ.ГАаП]
|_|//|/ /\		1К                
  //|/<  **>		2Т Т              
 //|/   Jl		3Г Г       Г      
//////| -----> 		4 А АА  ААА А АААА
||||||/			5П П  ПП   П П    П 

Благословенный стиль Упрощающий Проверку и Чтение Программы Благословенный.УПИиЧ*/
class ЕДРО //КТГАПП BTV
	{
	//public	$оЕДРО;
	protected $сКнига	='HiFiIntelligentClub';
	protected $сТом		='Stations';
	protected $сГлава	='JSON obj';
	protected $сАбзац	='JSON obj prop';
	protected $сПараграф	='prefixJSON obj prop';
	public function __construct($_objKIIM, $сЕсли='Чтение', $_сДействие, $мРеальность, $_оОбъект)
		{
		$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));unset($_objKIIM);

		if($_сДействие!='')
			{
			switch($сЕсли)
				{
				case'Чтение':
					$сКласс='FieleRead';
				break;
				case'Запись':
					$сКласс='FieleWrite';
				break;
				}
			$сКласс::objJSON($objKIIM, $_сДействие, $мРеальность);
			}
		else
			{
			_Report('Не могу'.$сЕсли.' Пустое  действие');
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function оСинтез($_objKIIM, $сЕсли='Чтение', $_сДействие, $мРеальность, $_оОбъект)
		{
		$оЕДРО 	= new ЕДРО($_objKIIM, $сЕсли, $_сДействие, $мРеальность, $_оОбъект);
		//Если	= new Если($оЕДРО);
		return $оЕДРО;
		}
	}
?> 
