#!/usr/bin/php
<?php                                                                              
/*                                                                                 
© A.A.CheckMaRev 2020 assminog@gmail.com tubmulur@yandex.ru 2020 [25.06.2020]      
//////|                                                                            
|_|//|/ /\      Бегемот.(ЕДРО:ПОЛИМЕР.020.Синтез)
  //|/<  **>                                                                       
 //|/   Jl                                                                         
//////| --------------->                                                           
||||||/                                                                            
Благословенный стиль Упрощающий Проверку и Чтение Программы Благословенный.УПИиЧ*/
//Style.search.[StyleName].unordered
//			.search
//Style.search.[StyleName].unordered.Codec.search.[CodecName].unordered
//			.search				   .search
//Style.search.[StyleName].unordered.Bitrate.search.[BitrateName].unordered
//			.search					.search
//Style.search.[StyleName].unordered.Codec.search.[CodecName].unordered.Bitrate.search.[BitrateName].unordered
//			.search		                   .search                                .search
//Codec.search.[CodecName].unordered
//			.search
//Codec.search.[CodecName].unordered.Bitrate.search.[BitrateName].unordered
//			.search					.search
//Bitrate.search.[BitrateName].unordered
//			    .search

$_SERVER['REQUEST_URI']='/';

require_once('/home/EDRO.SetOfTools/System/0.Functions/0.strNDigit.php');
require_once('/home/EDRO.SetOfTools/System/0.Functions/1.RequestsFilter.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/0.ReportError.php');
require_once('/home/EDRO.SetOfTools/System/1.Reporter/1.Report.php');
require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/0.KIIM.php');
require_once('/home/EDRO.SetOfTools/System/2.VectorKIIM/1.objKIIM.activation.php');
//require_once('/home/EDRO.SetOfTools/System/3.Buffer/0.EDRO_Loader.php');
require_once('/home/EDRO.SetOfTools/System/3.Buffer/1.EDRO_Buffering.php');
$сРасположОбъект	='/home/ЕДРО:ПОЛИМЕР/о2о.Синтез.ЕДРО/о2о.Если/о2о.Действие/о2о.Реальность/о2о.Объект';
//echo '/home/ЕДРО:ПОЛИМЕР/о2о.Синтез.ЕДРО/о2о.Если/о2о.Действие/о2о.Реальность/о2о.Объект';
//exec('mkdir -p /home/ЕДРО:ПОЛИМЕР/о2о.Синтез.ЕДРО/о2о.Если/о2о.Действие/о2о.Реальность/о2о.Объект');


echo'Загруз:Фраза.'."\n";
$сРасположEvent		='/Чтение_ОЗУ';
$сРасположDestination	='/ОЗУ';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/НаборЭлементов/Фраза/Фраза.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:Фраза->загрузил модуль.'."\n";

echo'Загруз:ЗагрузЭлемент.'."\n";
$сРасположEvent		='/Чтение_Диск';
$сРасположDestination	='/ОЗУ';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/Элемент/ЗагрузитьЭлемент.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:ЗагрузЭлемент->загрузил модуль.'."\n";

echo'Загруз:ЗагрузСписок.'."\n";
$сРасположEvent		='/Чтение_Диск';
$сРасположDestination	='/ОЗУ';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/Список/ЗагрузитьСписок.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:ЗагрузСписок->загрузил модуль.'."\n";

echo'Загруз:РасположениеКоличество.'."\n";
$сРасположEvent		='/Чтение_Диск';
$сРасположDestination	='/ОЗУ';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/Список/РасположениеКоличество.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:РасположениеКоличество->загрузил модуль.'."\n";

echo'Загруз:РасположениеСоздать.'."\n";
$сРасположEvent		='/Чтение_ОЗУ';
$сРасположDestination	='/Диск';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/Элемент/РасположениеСоздать.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:РасположениеСоздать->загрузил модуль.'."\n";

Синтез::_Старт();
class Синтез
	{
	private		$мСписокОбъектовДляОбработки	=array();
	private		$мСписокОбработанныхОбъектов	=array();

	private		$мСписокОбъектов;
	private		$оСтанцияЧист;
	private		$сЗаписываемыйОбъект;

	private		$сТипОперации		='Чтение_Диск';
	private		$сГлавнаяПапка		='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных';
	private		$сБазаДанных		='HiFiIntelligentClub3';
	private		$сТаблица		='Stations';
	private		$мТипХранения		=array('unordered','search');
	private		$ч0ТекущаяСтрока	=0;
	private		$сИмяТекущегОбъекта	='';
	private		$мРасположКолВо		=array();
	private		$arrAndroidCodec		=array('mp3', 'mpeg', 'ogg', 'oggо30оо27оcodecsо26оopus', 'oggо30оо27оcodecsо26оvorbis');
	private		$arrAppleCodec			=array('aac', 'aacp', 'flac', 'mp3', 'mpeg');


	public function __construct()
		{
		echo 'Очистить БД'."\n";
		$this->_ОчиститьБазуДанных();
		echo 'Создать БД'."\n";
		$this->_СоздатьБазуДнных();
		echo 'Обновить список станций'."\n";
		$this->_ОбновитьСписок();
		echo 'Загрузить список станций в оперативную память'."\n";
		$this->мСписокОбъектов		=$this->мПрочитатьСписокОбъектов();
		echo 'Создть Базу Данных ЕДРО:ПОЛИМЕР ИВ'."\n";
		$this->_CreateStructure($this->сГлавнаяПапка.'/'.$this->сБазаДанных);
		echo 'Фаза1.='."\n";
		}


	private function _CreateStructure($strTagLevel)
		{
		echo 'Создаём БД'."\n";
		$strBasePath			=$this->сГлавнаяПапка.'/'.$this->сБазаДанных;
		$strLocationStationsSearch	=РасположениеСоздать::с($strBasePath.'/Stations',	'search');
		$strLocationStationsUnordered	=РасположениеСоздать::с($strBasePath.'/Stations',	'unordered');
		$мОбработанныеСсылки		=array();
		$мОбработанныеНазвания		=array();
		$мОбработанныеЖанры		=array();
		$ч0Х				=0;
		foreach($this->мСписокОбъектов as $оСтанцияЧист)
			{
			//print_r($оСтанцияЧист);
			$this->оСтанцияЧист		=$оСтанцияЧист;
			//$strFromEnc	=mb_detect_encoding($оСтанцияЧист['server_name']);
			//$strToEnc	='UTF-8';
			//$оСтанцияЧист['server_name']=mb_convert_encoding($оСтанцияЧист['server_name'],$strToEnc, $strFromEnc);
			    
			$оСтанцияЧист['listen_url']	=сЗаменаСлэшУЕ($оСтанцияЧист['listen_url']);
			$оСтанцияЧист['server_name']	=сЗаменаСлэшУ($оСтанцияЧист['server_name']);
			$оСтанция			=$оСтанцияЧист;
			$strGenre			=(string)str_replace(array('(',')'), '', $оСтанцияЧист['genre']);
			$arrGenre			=мСобратьФразы($strGenre, 'МалДиректор');
			unset($strGenre);
			$оСтанция['intBitrate']		=сПреобразовать($оСтанция['bitrate'], 										"вКоманду");
			$оСтанция['strServer_type']	=сПреобразовать(strtolower(str_replace(array("/", " ", "audio", "application"), '', $оСтанция['server_type'])),	"вКоманду");
			//$оСтанция->strServer_type	=сПреобразовать(strtolower(str_replace('audio/' ,'' ,$оСтанция->server_type)), 	"вКоманду");
			$оСтанция['strServer_name']	=сПреобразовать(trim(strtolower($оСтанция['server_name'])), 							"вКоманду");
			$оСтанция['strListen_url']	=сПреобразовать(trim($оСтанция['listen_url']), 							"вКоманду");

			$this->_CreateName($оСтанция, $strLocationStationsSearch, $оСтанция['strServer_name'], 'unordered');
			$this->_СоздатьСсылку($this->сЗаписываемыйОбъект, $strLocationStationsUnordered);

			if(empty($оСтанция['listen_url']))
				{
				_Report('empty: $оСтанция[listen_url])'.$оСтанцияЧист['server_name'].'||'.$оСтанцияЧист['listen_url'].'||'.$оСтанцияЧист['genre']);
				continue;
				}
			if($оСтанция['listen_url']=="")
				{
				_Report('$оСтанция[listen_url]==""'.$оСтанцияЧист['server_name'].'||'.$оСтанцияЧист['listen_url'].'||'.$оСтанцияЧист['genre']);
				continue;
				}
			if(strpos($оСтанцияЧист['server_type'], 'video')!==FALSE)
				{
				_Report('strpos($оСтанцияЧист[server_type], video)!==FALSE'.$оСтанцияЧист['server_name'].'||'.$оСтанцияЧист['listen_url'].'||'.$оСтанцияЧист['genre']);
				continue;
				}
			if(strpos($оСтанцияЧист['server_type'], 'usac')!==FALSE)
				{
				_Report('usac: '.$оСтанцияЧист['server_name'].'##'.$оСтанцияЧист['genre']);
				continue;
				}
			if(фУникальный($мОбработанныеСсылки, $оСтанцияЧист['listen_url'])!==TRUE)
				{
				_Report('фУникальный($мОбработанныеСсылки, $оСтанцияЧист[listen_url])===TRUE:'.$оСтанцияЧист['server_name'].'||'.$оСтанцияЧист['listen_url'].'||'.$оСтанцияЧист['genre']);
				continue;
				}
			//if(фДубль($мОбработанныеСсылки, $оСтанцияЧист)===TRUE)
			//	{
			//	_Report('фДубль($мОбработанныеСсылки, $оСтанцияЧист)===TRUE:'.$оСтанцияЧист->server_name.'||'.$оСтанцияЧист->listen_url.'||'.$оСтанцияЧист->genre);
			//	continue;
			//	}
			if((фУникальный($мОбработанныеНазвания, $оСтанцияЧист['server_name'])===FALSE)&&(фУникальный($мОбработанныеЖанры, $оСтанцияЧист['genre'])===FALSE))
				{

				_Report("\n".'Дубль Жанр+Название: '.$оСтанцияЧист['server_name'].'##'.$оСтанцияЧист['genre']);
			
				continue;
				}
			//if(фCreateListen_lnSock($оСтанцияЧист['listen_url'])!==TRUE)
			//	{
			//	_Report('фCreateListen_lnSock($оСтанцияЧист['listen_ur']l)===TRUE'.$оСтанцияЧист['server_name'].'||'.$оСтанцияЧист['listen_url'].'||'.$оСтанцияЧист['genre']);
			//	continue;
			//	}
			
			//$this->сТекущаяСтрока=$strLocationStationsUnordered.'/'.$this->чТекущаяСтрока.'.plmr';
			//$this->_ЗаписатьСтроку($this->чТекущаяСтрока, $strLocationStationsUnordered,  $оСтанцияЧист);
			//$this-> _ЗаписатьИтог($_сТипХранения='unordered');
			
			//$s0=РасположениеСоздать::с($strBasePath.'/Stations',	'unordered');
			//$this->_СоздатьСсылку($this->сТекущаяСтрока, $s0);
			//ALL
			//echo 'All'."\n";
			$this->_CreateTagPack($strBasePath, $arrGenre, $оСтанция, 1);
			//All HiFi
			//$this->_CreateTagPack($strBasePath.'/AllHiFi', $arrGenre, $оСтанция);
			//Android
			if(in_array($оСтанция['strServer_type'], $this->arrAndroidCodec)!==FALSE)
				{
				//echo 'Android'."\n";
				$this->_CreateTagPack($strBasePath.'/Android', $arrGenre, $оСтанция, 1);
				}
			//Android HiFi
			//$this->_CreateTagPack($strBasePath.'/AndroidHiFi', $arrGenre, $оСтанция);
			///Apple
			if(in_array($оСтанция['strServer_type'], $this->arrAppleCodec)!==FALSE)
				{
				//echo 'Apple'."\n";
				$this->_CreateTagPack($strBasePath.'/Apple', $arrGenre, $оСтанция, 1);
				}
			//Apple HiFi
			//$this->_CreateTagPack($strBasePath.'/AppleHiFi', $arrGenre, $оСтанция);
			
			$this->ч0ТекущаяСтрока++;
			$ч0Х++;
			$мОбработанныеСсылки[]		=$оСтанцияЧист['listen_url'];
			$мОбработанныеНазвания[]	=$оСтанцияЧист['server_name'];
			$мОбработанныеЖанры[]		=$оСтанцияЧист['genre'];
			//print_r($мОбработанныеСсылки);
			}
		}
	private function  _CreateTagPack($_strBasePath, $arrGenre, $оСтанция, $bIzLinkStation)
		{
		if(!is_dir($_strBasePath))
			{
			if(mkdir($_strBasePath))
				{
				}
			else
				{
				_Report('Cant create '.$_strBasePath);
				}
			}
			$strBasePath	=$_strBasePath;
			/*
			if($bIzLinkStation)
				{
				$s0=РасположениеСоздать::с($strBasePath.'/Stations',	'unordered');
				$this->_СоздатьСсылку($this->сТекущаяСтрока, $s0);
				}
			*/
		foreach($arrGenre as $strStyle)
			{
			$s1= $this->strCreateTag($strBasePath.'/Styles', $strStyle, $оСтанция['strServer_name']);
			    $s2	 = $this->strCreateTag($s1.'/Codecs', $оСтанция['strServer_type'], $оСтанция['strServer_name']);
			    $s2_1= $this->strCreateTag($s1.'/Bitrates', $оСтанция['intBitrate'], $оСтанция['strServer_name']);
				    $s3= $this->strCreateTag($s2.'/Bitrates', $оСтанция['intBitrate'], $оСтанция['strServer_name']);
			$b1= $this->strCreateTag($strBasePath.'/Bitrates', $оСтанция['intBitrate'], $оСтанция['strServer_name']);
			$c1= $this->strCreateTag($strBasePath.'/Codecs', $оСтанция['strServer_type'], $оСтанция['strServer_name']);
			    $c2= $this->strCreateTag($c1.'/Bitrates', $оСтанция['intBitrate'], $оСтанция['strServer_name']);
			}
		}
	private function  strCreateTag($_strPath, $_strTag, $_strStationName)
		{
		//echo $_strPath;
		//echo "\n";
		$s1=РасположениеСоздать::с($_strPath,	'search');
		$s2=РасположениеСоздать::с($s1.'/'.$_strTag, 'unordered');
		$this->_СоздатьСсылку($this->сТекущаяСтрока, $s2);
		$s3 =РасположениеСоздать::с($s1.'/'.$_strTag, 'search');
		$s4 =РасположениеСоздать::с($s3.'/'.$_strStationName, 'unordered');
		$this->_СоздатьСсылку($this->сТекущаяСтрока, $s4);
		return $s2;
		}
	private function _CreateName($оОбрабатываемыйОбъект, $strLocationSearch, $strServerName, $_strOrder='unordered')
		{
		$_сЗаписываемыйОбъектРасполож		=РасположениеСоздать::с($strLocationSearch.'/'.$strServerName, $_strOrder);
		$this->_СоздатьЗапись($оОбрабатываемыйОбъект, $_сЗаписываемыйОбъектРасполож);
		
		}
	private function _СоздатьЗапись($оОбрабатываемыйОбъект, $сЗаписываемыйОбъектРасполож)
		{
		$ч1РасположениеКоличество			=РасположениеКоличество::ч1($сЗаписываемыйОбъектРасполож);
		/*if(!isset($мРасположКолВо[$сЗаписываемыйОбъектРасполож]))
			{
			$this->мРасположКолВо[$сЗаписываемыйОбъектРасполож]	=0;
			}
		$ч1РасположениеКоличество	=$this->мРасположКолВо[$сЗаписываемыйОбъектРасполож];*/
		$сЗаписываемыйОбъект		=$сЗаписываемыйОбъектРасполож.'/'.$ч1РасположениеКоличество.'.plmr';
		$this->сТекущаяСтрока		=$сЗаписываемыйОбъект;
		//$this->сЗаписываемыйОбъект	=$сЗаписываемыйОбъект;

		if(file_put_contents($сЗаписываемыйОбъект, strMyJson($оОбрабатываемыйОбъект)))
			{
			file_put_contents($сЗаписываемыйОбъектРасполож.'/total.plmr', json_encode(array('total'=>$ч1РасположениеКоличество)));
			}
		else
			{
			_Report('Error creating link!'.$сЗаписываемыйОбъект);
			}
		//$this->мРасположКолВо[$сЗаписываемыйОбъектРасполож]++;
		if(filesize($сЗаписываемыйОбъект)==0)
			{
			//print_r($оОбрабатываемыйОбъект->server_name[0]);
			//echo json_encode($оОбрабатываемыйОбъект->server_name[0]);
			print_r($this->оСтанцияЧист);
			//print_r(json_encode($оОбрабатываемыйОбъект->server_name[0]));
			//exit;
			}
		}
	private function _ЗаписатьСтроку($_чНомер, $_сПутьКДанным,$_мДанные)
		{
		$сДанные		=json_encode($_мДанные);
		$сПутьИИмяФайла		=$_сПутьКДанным.'/'.$_чНомер.'.plmr';
		if(file_put_contents($сПутьИИмяФайла, $сДанные))
			{
			}
		else
			{
			Report('Ошибка: не могу записать строку '.$сПутьИИмяФайла.'_'.$сДанные);
			sleep(1);
			$this->_ЗаписатьСтроку($_чНомер, $_сПутьКДанным,$_мДанные);
			}
		$this->_ЗаписатьИтог($_сТипХранения='search');
		$this->сИмяТекущегОбъекта	=$сПутьИИмяФайла;
		}
	private function _СоздатьСсылку($_сОбрабатываемыйОбъект, $_сЗаписываемыйОбъектРасполож)
		{
		$сОбрабатываемыйОбъект		=$this->сТекущаяСтрока;
		$сЗаписываемыйОбъектРасполож	=$_сЗаписываемыйОбъектРасполож;
		/*if(!isset($мРасположКолВо[$сЗаписываемыйОбъектРасполож]))
			{
			$this->мРасположКолВо[$сЗаписываемыйОбъектРасполож]	=0;
			}*/
		$ч1РасположениеКоличество	=РасположениеКоличество::ч1($сЗаписываемыйОбъектРасполож);
		//$ч1РасположениеКоличество	=$this->мРасположКолВо[$сЗаписываемыйОбъектРасполож];
		$сЗаписываемыйОбъект		=$сЗаписываемыйОбъектРасполож.'/'.$ч1РасположениеКоличество.'.plmr';

		if(symlink($сОбрабатываемыйОбъект, $сЗаписываемыйОбъект))
			{
			file_put_contents($сЗаписываемыйОбъектРасполож.'/total.plmr', json_encode(array('total'=>$ч1РасположениеКоличество)));
			//$this->мРасположКолВо[$сЗаписываемыйОбъектРасполож]++;
			}
		else
			{
			_Report('Error creating link!'.$сОбрабатываемыйОбъект.'->'.$сЗаписываемыйОбъект);
			}
		}
	private function _СоздатьСсылкуИмя($_сОбрабатываемыйОбъект, $_сЗаписываемыйОбъект)
		{
		if(symlink($_сОбрабатываемыйОбъект, $_сЗаписываемыйОбъект))
			{
			}
		else
			{
			_Report('Error creating link!'.$_сОбрабатываемыйОбъект.'->'.$_сЗаписываемыйОбъект);
			}
		}
	private function _ЗаписатьИтог($_сТипХранения='unordered')
		{
		$сПутьКДанным		=$this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$this->сТаблица.'/'.$_сТипХранения;
		$сПутьИИмяФайла		=$сПутьКДанным.'/total.plmr';
		$сДанные		=json_encode(array('total'=>$this->чТекущаяСтрока));
		if(file_put_contents($сПутьИИмяФайла, $сДанные))
			{
			
			}
		else
			{
			_Report('Ошибка: не могу записать итог '.$сПутьИИмяФайла);
			}
		}
	private function _createRecord($strTag ,$strOrderType)
		{
		
		}

	private function _СоздатьПапку($_оДанные)
		{
		$сПутьКДаннымЗапись		=$this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$this->сТаблица.'/Names';
		$сЗаписываемыйОбъектРасполож	=РасположениеСоздать::с($сПутьКДаннымЗапись);


		$сПапка				=сПреобразовать(mb_strtolower($_оДанные->server_name), 		"вКоманду");
		$сЗаписываемыйОбъектРасполож	=РасположениеСоздать::с($сЗаписываемыйОбъектРасполож.'/'.$сПапка);
		$ч1РасположениеКоличество	=РасположениеКоличество::ч1($сЗаписываемыйОбъектРасполож);
		file_put_contents($сЗаписываемыйОбъектРасполож.'/'.$ч1РасположениеКоличество.'.plmr', json_encode($_оДанные));


		$сПутьКДаннымЗапись		=$this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$this->сТаблица.'/Hash';
		$сЗаписываемыйОбъектРасполож	=РасположениеСоздать::с($сПутьКДаннымЗапись);
		//file_put_contents($сЗаписываемыйОбъектРасполож.'/Station.plmr', json_encode($_оДанные));
		

		$сПапка				=сПреобразовать($_оДанные->listen_url, 		"вКоманду");
		$сЗаписываемыйОбъектРасполож	=РасположениеСоздать::с($сЗаписываемыйОбъектРасполож.'/'.$сПапка);
		file_put_contents($сЗаписываемыйОбъектРасполож.'/'.'Server.plmr', json_encode($_оДанные));

		//$ч1РасположениеКоличество	=РасположениеКоличество::ч1($сЗаписываемыйОбъектРасполож);
		//file_put_contents($сЗаписываемыйОбъектРасполож.'/total.plmr', json_encode(array('total'=>$ч1РасположениеКоличество)));
		}



	public static function _Старт()
		{
		$оСинтез =new Синтез();
		}
	private function _ОчиститьБазуДанных()
		{
		exec('rm -r -f '.$this->сГлавнаяПапка.'/'.$this->сБазаДанных);
		}
	private function _СоздатьБазуДнных()
		{
		$сБазаДанных=$this->сГлавнаяПапка.'/'.$this->сБазаДанных;
		if(!is_dir($сБазаДанных))
			{
			mkdir($сБазаДанных);
			}
		else
			{
			//$objReport=new Report($objKIIM, 'Cant creat DB'.$this->strDBName);
			//echo 'Cant creat DB'.$this->strDBName."\n";
			echo 'DB'.$this->сБазаДанных.', already exist.'."\n";
			}
		}
	private function _ОбновитьСписок()
		{
		//$strEnc=strEncode(file_get_contents('/home/HiFiIntelligentClub.Ru/tmp/getCat.HFIC.enc'),'HiFiIntelligentClub','d');
		//eval($strEnc);
		$strXML			=file_get_contents('http://dir.xiph.org/yp.xml');
		$floatMarker		=microtime(true);
		$boolIntFileRsult	=file_put_contents('/home/HiFiIntelligentClub.Ru/tmp/all_'.$floatMarker.'.xml', $strXML);
		if($boolIntFileRsult===FALSE)
			{
			echo 'ERROR getting CAT';
			exit(0);
			}
		if($boolIntFileRsult<1000000)
			{
			echo 'ERROR getting 1000000 bytes CAT';
			exit(0);
			}
		echo 'Download and validate OK'."\n";
		exec('cp -f /home/HiFiIntelligentClub.Ru/tmp/all_'.$floatMarker.'.xml /home/HiFiIntelligentClub.Ru/tmp/all.xml',$arr0,$arr1);
		//print_r($arr0);
		//print_r($arr1);
		}
	private function мПрочитатьСписокОбъектов()
		{
		//$arrXML=FileRead::objXML($objKIIM, '/home/HiFiIntelligentClub.Ru/tmp/all.xml');
		//echo count($arrXML);
		//echo "\n";
		$strXML		=file_get_contents('/home/HiFiIntelligentClub.Ru/tmp/all.xml');
		$arrXML		=XMLTag::arr($strXML, 'entry');
		echo count($arrXML);
		echo "\n";
		return $arrXML;
		}
	}
class XMLTag
	{
	private $bTagIn		=false;
	private $int0TagOpen	=0;
	private $int0TagClose	=0;
	private	$strInTag	='';
	private	$strTagOpen	='';
	public $arrTag		=array();
	public function __construct($strXML, $strTagOpen)
		{

		$strXML			=(string)$strXML;
		$arrOpen['str']		=(string)'<'.$strTagOpen.'>';
		$arrOpen['len']		=strlen($arrOpen['str']);
		$arrClose['str']	=(string)'</'.$strTagOpen.'>';
		$arrClose['len']	=strlen($arrClose['str']);
		$strIn			='';
		$int1Length=strlen($strXML);
		$bTagIn		=false;
		$bTagOut	=false;
		$intTag		=0;
		$arrTag		=array();
		for($int0I=0;$int0I<$int1Length;$int0I++)
			{
			//echo $intI;
			if($strXML[$int0I]==$arrOpen['str'][$this->int0TagOpen])
				{
				$this->int0TagOpen++;
				}
			else
				{
				$this->int0TagOpen=0;
				}
			if($strXML[$int0I]==$arrClose['str'][$this->int0TagClose])
				{
				$this->int0TagClose++;
				}
			else
				{
				$this->int0TagClose=0;
				}
			if($this->int0TagOpen==$arrOpen['len'])
				{
				$this->int0TagOpen	=0;
				$bTagIn			=true;
				$bTagOut		=false;
				}
			if($this->int0TagClose==$arrClose['len'])
				{
				$strTagString					=substr($strIn,1,(-$arrClose['len']+1));
				if($strTagOpen=='entry')
					{
					}
				else
					{
					$arrTag[$strTagOpen]['str']			=$strTagString;
					}
				//$arrTag[$strTagOpen]['str']			=substr($strIn,1,(-$arrClose['len']+1));
				$arrTags					=$this->arrTagName($strTagString);
				if(!empty($arrTags))
					{
					foreach($arrTags as $strTag)
						{
						$arrTag[$strTagOpen][$strTag]	=XMLTag::arr($strTagString, $strTag)[0]['str'];
						}
					}
				//$arrTag[$strTagOpen]['server_name']		=Tag::arr($arrTag[$strTagOpen]['str'], 'server_name');
				//$arrTag[$strTagOpen]['server_type']		=Tag::arr($arrTag[$strTagOpen]['str'], 'server_type');
				//$arrTag[$strTagOpen][$intTag]['bitrate']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'bitrate');
				//$arrTag[$strTagOpen][$intTag]['samplerate']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'samplerate');
				//$arrTag[$strTagOpen][$intTag]['channels']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'channels');
				//$arrTag[$strTagOpen][$intTag]['listen_url']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'listen_url');
				//$arrTag[$strTagOpen][$intTag]['current_song']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'current_song');
				//$arrTag[$strTagOpen][$intTag]['genre']		=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'genre');
				$this->arrTag[]					=$arrTag[$strTagOpen];
				$intTag++;
				$strIn			='';
				$this->int0TagClose	=0;
				$bTagIn			=false;
				$bTagOut		=true;
				}
			if($bTagIn)
				{
				$strIn	.=$strXML[$int0I];
				}
			else
				{
				}
			//echo $strIn;
			}
		}
	private function arrTagName($strXML)
		{
		$arr			=array();
		$strArrType		='';
		$int0Arr		=0;
		$int0ArrLength		=0;
		$strArr			='';
		$strXML			=(string)$strXML;
		$int1Length		=strlen($strXML);
		$bTagIn			=false;
		$bTagOut		=false;
		for($int0I=0;$int0I<$int1Length;$int0I++)
			{
			if($strXML[$int0I]=='<')
				{
				$bTagIn		=true;
				}
			if(($strXML[$int0I]=='>'||$strXML[$int0I]==' '||$strXML[$int0I]=="\n")&&$bTagIn)
				{
				if($strArr[1]=='/')
					{
					}
				else
					{
					$arr[$int0Arr]	=substr($strArr,1,$int0ArrLength);
					}
				$strArr		='';
				$int0ArrLength	=0;
				$int0Arr++;
				$bTagIn		=false;
				}
			if($bTagIn)
				{
				//if($strXML[$int0I]=='/')
				//	{
				//	$strArrType	='Open';
				//	}
				$strArr		.=$strXML[$int0I];
				$int0ArrLength++;
				}
			}
		return 		$arr;
		}
	public static function arr($strXML, $strTagOpen)
		{
		$objTag	= new XMLTag($strXML, $strTagOpen);
		return $objTag->arrTag;
		}
	}
	function strMyJson($arr)
		{
		$str	='';
		if(is_array($arr))
			{
			$str	='{';
			foreach($arr as $strName=>$strValue)
				{
				$strName	=str_replace('"','',$strName);
				$strValue	=str_replace('"','',$strValue);
				$str	.='"'.$strName.'":"'.$strValue.'",';
				}
			$str	=substr($str,0,-1);
			$str	.='}';
			}
		return $str;
		}
?>