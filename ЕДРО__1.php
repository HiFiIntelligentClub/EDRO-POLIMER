<?php        /*
© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2020 [25.06.2020]
//////|		[КТ.ГАаП]			Если		:Чтение
|_|//|/ /\		1К                	Действие	:Прочитать
  //|/<  **>		2Т Т              	Реальность	:Разрешено, тк платформа=Андроид,Роль=Администратор,Раздел=Административный.
 //|/   Jl //		3Г Г       Г      	Объект		:{"a":1, "b":1}
//////| -----> 		4П П  ПП   П П    П 	
||||||/	 //		5 А АА  ААА А ААААА
 */	/////		//  //  //  //  // 
 //© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2020 [19.04.2021]
//оКИМ['']
class ЕДРО //КТГАПП BTV
	{
	private $E	= array(
				'strListenerBlock'	=> '',
				'strReadedBlock'	=> '',
				'сСлушатель'		=> '',
				'мЗаголовки'		=> array(),
			);
	private $D	= array(
				'strAddr'		=> '127.0.0.1',strDomain
				'intPort'		=> 76,strPort
				'intReadBlockSize'	=> 512,
				'дТаймаут'		=> -1,
			);
	private $R	= array(							//оКИМ['']
				'мКИМ'			=>
							array(
							'сТекущаяОперация'	=> '',
							'мЖурнал'		=> 
								array(
								$оОшибка->ф			= FALSE,
								$оОшибка->сТекущаяОперация	= '',
								$оОшибка->strError		= '',
								$оОшибка->strError		= '',
								$оОшибка->strErrorNo		= 0,
								$оОшибка->strDate		= '0000-00-00',
								),
							),
				'ч1Слушатель'		=> 0,
				'сДоступ'		=> '/Listener',
				'рПриёмник'		=> '',
				'рПередача'		=> '',
				'bIzSocket'		=> FALSE,
				'intWritedBytes'	=> 0,
				'bizReadedBlock'	=> FALSE,
				'мЗаголовки'		=> array(),
			);
	public $O	= array(
			
			
			
			
			);

	/*public  $мОшибка= 
		array(
			'фКонструкт' 		=> FALSE,
			'сТекущаяОперация'	=> '',
			'ч'			=> 0,
			'c'			=> '',
			'м'			=>
			array(
			    ),
		);
	private $сПакетДанных			= '';*/

	public function __construct()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		$this->_СтартЖурнала();
		//$this->_Буфферизация();
		$this->_memoryPrepare();
		while($this->ifGgetRead())
			{
			$this->_ЧтениеЗапроса();      //+
			$this->_ОбработкаЗапроса();   //+
			if($this->objEDRO->arrEvent['arrListener']['arrRequest']['strEventName']=='/favicon.ico')
				{
				$this->фПостроитьПакетДанныхЛоготипИконка($strfaviconBin);
				}
			elseif($this->objEDRO->arrEvent['arrListener']['arrRequest']['strEventName']=='/robots.txt')
				{
				$this->фПостроитьПакетДанныхРоботТхт($strRobotsTxt);
				}
			elseif($this->objEDRO->arrEvent['arrListener']['arrRequest']['strEventExt']=='png')
				{
				}
			else
				{
				$this->фПостроитьПакетДанных();
				}

			//$this->фОтправитьПакетСлушателю();
			//$this->_ФормированиеОтвета(); //
			//print_r($this);
			//exit;
			/*$this->_ЗаписьОтвета();       //
			$this->_СбросEventЖурнала();  //
			//exit();*/
			}
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__);
		//$оСекундомер 			= new Секундомер(__CLASS__, __FUNCTION__);
		//$this->_memoryPrepare();	
		//while(ifGgetRead())					//S0dx		   S1dx			  	S2dx
		//	{//ЕСЛИ - интеграл верхней сингулярности: Вкл/Выкл комп=Ф, Загруз/Незагрузил прил.=БОГ, Запрос  Чтение/Запись=СИНГ;
		//	$this->_ЧтениеЗапроса();
		//	$this->_ОбработкаЗапроса();

			//$this->фВключитьРадиоприёмник();
			//$this->фЖдатьПередачуСлушателя();
			//$this->фЧтениеЗапросаИзБраузераСлушателя();
			//print_r($this->objEDRO->arrEvent['arrListener']['arrRequest']['strEventName']);
			//if($this->objEDRO->arrEvent['arrListener']['arrRequest']['strEventName']=='/favicon.ico')
			//	{
			//	$this->фПостроитьПакетДанныхЛоготипИконка($strfaviconBin);
			//	}
			//elseif($this->objEDRO->arrEvent['arrListener']['arrRequest']['strEventName']=='/robots.txt')
			//	{
			//	$this->фПостроитьПакетДанныхРоботТхт($strRobotsTxt);
			//	}
			//else
			//	{
			//	$this->фПостроитьПакетДанных();
			//	}
			/*elseif($this->objEDRO->arrEvent['arrListener']['arrRequest']['strEventExt']=='png')
				{
				}
			//$this->фОтправитьПакетСлушателю();
			*/
		//	}
		//if(!ЕДРО('Остановлено',	'ОповещениеЖурналаОстановки',		'АдминистраторСервера',	'ErrorReport'));
		//echo $this->сТекущаяОперация."\n";
		$this->O['мСекундомер'][] 	= $оСекундомер->_Стоп();
		}
	private function _memoryPrepare()
		{
		$ф	= фОтчёт('фВключитьРадиоприёмник ');
		if($this->рРадиоприёмник===FALSE)
			{
			$ф	= фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__." tcp://".$this->D['strAddr'].":".$this->D['intPort']);
			$this->рРадиоприёмник		=stream_socket_server("tcp://".$this->D['strAddr'].":".$this->D['intPort'], $this->E['strErrorNo'], $this->E['strError']);
			}
		if(empty($this->рРадиоприёмник)||$this->рРадиоприёмник===FALSE)
			{
			$this->рРадиоприёмник		= FALSE;
			$ф				= фОшибка('рВключитьРадиоприёмник() failed. Restarting without delay.');
			}
		else
			{
			$ф	= фОтчёт($this->сТекущаяОперация.' Включен: '.$this->рРадиоприёмник);
			}
		return $ф;
		}
	private function ifGgetRead()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		$this->R['рПередача'] 			= stream_socket_accept($this->R['рПриёмник'], $this->D['дТаймаут']);
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		return $this->R['рПередача'];
		}
	private function _ЧтениеЗапроса()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		$strReadedBlock				= fread($this->R['рПередача'], $this->D['intReadBlockSize']);
		if(empty($strReadedBlock))
			{
			$this->E['strReadedBlock']		= '';
			$this->R['bizReadedBlock']		= FALSE;
			$this->E[]				= array('!'.__CLASS__.'/'.__FUNCTION__ => 'fread($_рПередача'.$this->D['intReadBlockSize'].') empty.');
			}
		else
			{
			$this->E['strReadedBlock']		= $strReadedBlock;
			$this->R['bizReadedBlock']		= TRUE;
			}
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
	private function _ОбработкаЗапроса()
		{
		$оСекундомер 				= new Секундомер(__CLASS__, __FUNCTION__);
		
		if($this->R['bizReadedBlock']===TRUE)
			{
			$this->E['мЗаголовки']			= explode("\n", $this->E['strReadedBlock']);
			foreach($this->E['мЗаголовки'] as $сЗапрос)
				{
				if(strpos($сЗапрос, ': ')!==FALSE)
					{
					$this->R['мЗаголовки'][сНачДоСимвола($сЗапрос, ':')]	= сНачОтСимвола($сЗапрос, ' ');
					}
				}
			if(isset($this->R['мЗаголовки']['ч1Слушатель']))
				{
				$this->R['ч1Слушатель']			= $this->R['мЗаголовки']['ч1Слушатель'];
				if(is_file($this->E['сСлушатель'] 	= сРасположениеО2о.$this->R['сДоступ'].'/'.$this->R['ч1Слушатель'].cЗаписьО2о))
					{
					$this->E['strListenerBlock']	= file_get_contents($this->E['сСлушатель']);
					}
				else
					{
					$this->E[]			= array('!'.__CLASS__.'/'.__FUNCTION__ => 'fread($_рПередача'.$this->D['intReadBlockSize'].') empty.');
					
					}
				}
			}
		else
			{
			$this->R['мЗаголовки']		= array();
			}
		$this->O['мСекундомер'][] 		= $оСекундомер->_Стоп();
		}
/*


	private  function фЖдатьПередачуСлушателя()
		{
		$ф	= фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__);
		if($this->рРадиоприёмник!==FALSE)
			{
			$ф	= фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__);
			$this->рПередачаСлушателя 	= stream_socket_accept($this->рРадиоприёмник, -1);
			}
		if(empty($this->рПередачаСлушателя)||$this->рПередачаСлушателя===FALSE)
			{
			$this->рПередачаСлушателя 	= FALSE;
			$ф	= фОшибка('ЕДРО->'.__CLASS__.'/'.__FUNCTION__.' failed. Restarting without delay.');
			}
		return $ф;
		}
	private function фЧтениеЗапросаИзБраузераСлушателя()
		{
 		if($this->рПередачаСлушателя!==FALSE)
			{
			$ф	= фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__);
			$сЗаголовкиОтСлушателя	= fread($this->рПередачаСлушателя, 4096);			
			}
		if(empty($сЗаголовкиОтСлушателя)||$сЗаголовкиОтСлушателя===FALSE)
        		{
			$сЗаголовкиОтСлушателя		= FALSE;
			$ф	= фОшибка('fread($_рПередача, 4096) empty.');
			}
		else
			{
			$this->objEDRO		= new Event($сЗаголовкиОтСлушателя);
			}
		return $ф;
		}
*/
	/*private function фРазборЗапросаИзБраузераСлушателя()
		{
		$ф	= фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__);
		if($this->рПередачаСлушателя!==FALSE)
			{
			$ф	= фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__);
			$сЗаголовкиОтСлушателя	= strSafeUsers(fread($this->рПередачаСлушателя, 4096));
			}
		if(empty($сЗаголовкиОтСлушателя)||$сЗаголовкиОтСлушателя===FALSE)
        		{
			$this->сЗаголовкиСлушателя	= FALSE;
			$ф	= фОшибка('fread($_рПередача, 4096) empty.');
			}
		else
			{
			$this->сЗаголовкиСлушателя	= arrRequest2IndexArray(explode("\n", $сЗаголовкиОтСлушателя));
			print_r($this->сЗаголовкиСлушателя);
			}
		return $ф;
		}*/
	/*
	private function фПостроитьПакетДанных()
		{$ф			= фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__);

		$strContentType		= 'Content-Type: text/html';
		$strNextDate		= date(DATE_RFC822, mktime(0, 0, 0, date("m")  , date("d"), date("Y")+1));
		$strCookie		= 'set-cookie: username=HiFiIntelligentClub; expires='.$strNextDate.'; path=/; domain=ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion;';

		if(isset($this->arrDesign['strTemplate'])&&$this->arrDesign['strTemplate']!=''&&is_file($this->arrDesign['strTemplate']))
			{
			сДополнить('',$this->arrDesign['strTemplate']);
			require			$this->arrDesign['strTemplate'];
			}
		else
			{
			$ф			= фОшибка('$this->arrDesign[strTemplate]: No file.');
			}
		$str			= сДополнить('/home/OOO.Polirom', 'index.php');

		$strBuffer		= str_replace("\r\n\r\n", "", $str);
							        unset($str);
		//$strBuffer		= '<yes style="font-size:xx-large;text-align:center;">HiFiIntelligentClub: We will up very soon: 36 modules left to create.</yes>
		//			   <progress max="36" value="1"></progress>
		//			   <yes style="color:green;">Now processing: EDRO.Event </yes>
		//			';
		if(empty($strBuffer))
			{
			$ф		= FALSE;
			}
		
		if($this->objEDRO->arrEvent['bIzDynamic'])
			{
			}
		else
			{
			$strBuffer	.= '</body>';
			$strBuffer	.= '</html>';
			}
		$this->сПакетДанных	= "HTTP/1.1 200 OK\r\n".$strContentType."\r\nServer-name: EDRO:POLIMER\r\nContent-Length: ".strlen($strBuffer)."\r\n".$strCookie."\r\nConnection: close\r\n\r\n".$strBuffer;
		return $ф;
		}
	private function фПостроитьПакетДанныхЛоготипИконка($faviconBin)
		{$ф	= фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__);
		$this->сПакетДанных	= "HTTP/1.1 200 OK\r\nContent-Type: image/ico\r\nServer-name: Abhasia LaDa.Rdo\r\nContent-Length: ".strlen($faviconBin)."\r\nConnection: close\r\n\r\n".$faviconBin;
		return $ф;
		}
	private function фПостроитьПакетДанныхРоботТхт($robotsTxt)
		{$ф	= фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__);
		$this->сПакетДанных	= "HTTP/1.1 200 OK\r\nContent-Type: text/plain\r\nServer-name: Abhasia LaDa.Rdo\r\nContent-Length: ".strlen($robotsTxt)."\r\nConnection: close\r\n\r\n".$robotsTxt;
		return $ф;
		}
	private function фОтправитьПакетСлушателю()
		{$ф	= фОтчёт($this->сТекущаяОперация	=__CLASS__.'/'.__FUNCTION__);
		    
		fwrite($this->рПередачаСлушателя, $this->сПакетДанных, strlen($this->сПакетДанных));
		fclose($this->рПередачаСлушателя);
		unset($this->рПередачаСлушателя);
		return $ф;
		}
	*/
	}
?> 
