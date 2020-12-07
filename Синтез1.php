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
$сРасположОбъект	='/home/ЕДРО:ПОЛИМЕР/020.Синтез.ЕДРО/020.Если/020.Действие/020.Реальность/020.Объект';

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

	private		$сТипОперации		='Чтение_Диск';
	private		$сГлавнаяПапка		='/home/ЕДРО:ПОЛИМЕР/БазаДанных';
	private		$сБазаДанных		='HiFiIntelligentClub';
	private		$сТаблица		='Stations';
	private		$мТипХранения		=array('unordered','search');
	private		$чТекущаяСтрока		=0;
	private		$сИмяТекущегОбъекта	='';


	public function __construct()
		{
		echo 'Фаза1'."\n";
		$this->_ОчиститьБазуДанных();
		echo 'Фаза1.1'."\n";
		$this->_СоздатьБазуДнных();
		echo 'Фаза1.2'."\n";
		$this->_ОбновитьСписок();
		$this->мСписокОбъектов		=$this->мПрочитатьСписокОбъектов();
		echo 'Фаза1.3'."\n";
		$this->_CreateStructure($this->сГлавнаяПапка.'/'.$this->сБазаДанных);
		echo 'Фаза1.x'."\n";
		}


	private function _CreateStructure($strTagLevel)
		{
		echo 'create struct';
		echo "\n";
		$strBasePath			=$this->сГлавнаяПапка.'/'.$this->сБазаДанных;
		$strLocationStationsSearch	=РасположениеСоздать::с($strBasePath.'/Stations',	'search');
		$strLocationStationsUnordered	=РасположениеСоздать::с($strBasePath.'/Stations',	'unordered');
		foreach($this->мСписокОбъектов as $оСтанцияЧист)
			{
			$оСтанция			=$оСтанцияЧист;
			$strGenre			=(string)$оСтанцияЧист->genre;
			$arrGenre			=мСобратьФразы($strGenre, 'МалДиректор');
			unset($strGenre);
			$оСтанция->intBitrate		=сПреобразовать($оСтанция->bitrate, 						"вКоманду");
			$оСтанция->strServer_type	=сПреобразовать(strtolower(str_replace('audio/' ,'' ,$оСтанция->server_type)), 	"вКоманду");
			$оСтанция->strServer_name	=сПреобразовать(strtolower($оСтанция->server_name), 				"вКоманду");
			$оСтанция->strListen_url	=сПреобразовать($оСтанция->listen_url, 						"вКоманду");
			if(strpos($оСтанцияЧист->server_type, 'video')===FALSE)
				{
				$this->сТекущаяСтрока=$strLocationStationsUnordered.'/'.$this->чТекущаяСтрока.'.plmr';
				$this->_ЗаписатьСтроку($this->чТекущаяСтрока, $strLocationStationsUnordered,  $оСтанцияЧист);
				$this-> _ЗаписатьИтог($_сТипХранения='unordered');
				$this->_CreateName($strLocationStationsSearch, $оСтанция->strServer_name, 'unordered');

				
				foreach($arrGenre as $strStyle)
					{
					$s1= $this->strCreateTag($strBasePath.'/Styles', $strStyle, $оСтанция->strServer_name);
					    $s2	 = $this->strCreateTag($s1.'/Codecs', $оСтанция->strServer_type, $оСтанция->strServer_name);
					    $s2_1= $this->strCreateTag($s1.'/Bitrates', $оСтанция->intBitrate, $оСтанция->strServer_name);
						    $s3= $this->strCreateTag($s2.'/Bitrates', $оСтанция->intBitrate, $оСтанция->strServer_name);

					$b1= $this->strCreateTag($strBasePath.'/Bitrates', $оСтанция->intBitrate, $оСтанция->strServer_name);
					$c1= $this->strCreateTag($strBasePath.'/Codecs', $оСтанция->strServer_type, $оСтанция->strServer_name);
					    $c2= $this->strCreateTag($c1.'/Bitrates', $оСтанция->intBitrate, $оСтанция->strServer_name);

					}
				$this->чТекущаяСтрока++;
				}
			}
		}
	private function  strCreateTag($_strPath, $_strTag, $_strStationName)
		{
		echo $_strPath;
		echo "\n";
		$s1=РасположениеСоздать::с($_strPath,	'search');
		$s2=РасположениеСоздать::с($s1.'/'.$_strTag, 'unordered');
		$this->_СоздатьСсылку($this->сТекущаяСтрока, $s2);
		$s3 =РасположениеСоздать::с($s1.'/'.$_strTag, 'search');
		$s4 =РасположениеСоздать::с($s3.'/'.$_strStationName, 'unordered');
		$this->_СоздатьСсылку($this->сТекущаяСтрока, $s4);
		return $s2;
		}
	private function _CreateName($strLocationSearch, $strServerName, $_strOrder='unordered')
		{
		$strLocationUnordered	=РасположениеСоздать::с($strLocationSearch.'/'.$strServerName, $_strOrder);
		$this->_СоздатьСсылку($this->сТекущаяСтрока, $strLocationUnordered);
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
			echo 'Ошибка: не могу записать строку '.$сПутьИИмяФайла."\n";
			}
		$this->_ЗаписатьИтог($_сТипХранения='search');
		$this->сИмяТекущегОбъекта	=$сПутьИИмяФайла;
		}
	private function _СоздатьСсылку($_сОбрабатываемыйОбъект, $_сЗаписываемыйОбъектРасполож)
		{
		$сОбрабатываемыйОбъект		=$_сОбрабатываемыйОбъект;
		$сЗаписываемыйОбъектРасполож	=$_сЗаписываемыйОбъектРасполож;

		$ч1РасположениеКоличество	=РасположениеКоличество::ч1($сЗаписываемыйОбъектРасполож);
		$сЗаписываемыйОбъект		=$сЗаписываемыйОбъектРасполож.'/'.$ч1РасположениеКоличество.'.plmr';

		if(symlink($сОбрабатываемыйОбъект, $сЗаписываемыйОбъект))
			{
			file_put_contents($сЗаписываемыйОбъектРасполож.'/total.plmr', json_encode(array('total'=>$ч1РасположениеКоличество)));
			}
		else
			{
			echo 'Error creating link!'.$сОбрабатываемыйОбъект.'->'.$сЗаписываемыйОбъект."\n";
			}
		}
	private function _СоздатьСсылкуИмя($_сОбрабатываемыйОбъект, $_сЗаписываемыйОбъект)
		{
		if(symlink($_сОбрабатываемыйОбъект, $_сЗаписываемыйОбъект))
			{
			}
		else
			{
			echo 'Error creating link!'.$_сОбрабатываемыйОбъект.'->'.$_сЗаписываемыйОбъект."\n";
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
			echo 'Ошибка: не могу записать итог '.$сПутьИИмяФайла."\n";
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
		$strEnc=strEncode(file_get_contents('/home/HiFiIntelligentClub.Ru/tmp/getCat.HFIC.enc'),'HiFiIntelligentClub','d');
		eval($strEnc);
		}
	private function мПрочитатьСписокОбъектов()
		{
		$arrXML=FileRead::objXML($objKIIM, strEncode('ZwEpBCxBPAwqBSAJEQsYLwUSByYdBQU8DFo3GUMdChVBFS8AWxolBQ%3D%3D', 'HiFiIntelligentClub', $_strAct='d'));
		echo count($arrXML);
		echo "\n";
		return $arrXML;
		}
	}

?>