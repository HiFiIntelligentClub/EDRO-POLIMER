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


require_once('/home/ЕДРО:ПОЛИМЕР/load.php');


Синтез::_Старт();
class Синтез
	{
	private		$мСписокОбъектовДляОбработки	=array();
	private		$мСписокОбработанныхОбъектов	=array();

	private		$чТекущаяСтрока			=0;
	private		$сИмяТекущегОбъекта		='';
	private		$сТекущийОбъект			='';
	private		$сРасположТекущегОбъекта	='';

	private		$мСписокОбъектов;

	//private		$сТипОперации			='Чтение_Диск';
	private		$сГлавПап			='/home/ЕДРО:ПОЛИМЕР/БазаДанных';
	private		$сБаз				='HiFiIntelligentClub';
	private		$сТаблица			='Stations';
	private		$сРазмерТаблицы			='170M';
	//private		$мТипХранения			=array('unordered','search');

	private		$сСимвол			=':';
	private		$ф				=FALSE;
	//private		$arrDefaultParametrs		=array();

	private		$ч0МаксУрлДлн			=128;
	private		$ч0КодекДлн			=0;
	private		$ч0БитДлн			=0;
	private		$ч0СтильДлн			=0;
	private		$ч0ИмяДлн			=0;

	private		$arrAndroidCodec		=array('mp3', 'mpeg', 'ogg', 'oggо30оо27оcodecsо26оopus', 'oggо30оо27оcodecsо26оvorbis');
	private		$arrAppleCodec			=array('aac', 'aacp', 'flac', 'mp3', 'mp4', 'mpeg');

	public function __construct()
		{
						echo 'Фаза1'."\n";
						$this->_ОчиститьБазуДанных();

						echo 'Фаза1.1'."\n";
						$this->_СоздатьБазуДанных();

						echo 'Фаза1.2'."\n";
						//$this->_ОбновитьСписок();

		echo 'Фаза1.3'."\n";
		$this->мСписокОбъектов		=$this->мПрочитатьСписокОбъектов();

		echo 'Фаза1.3'."\n";
						$this->_CreateStructure($this->сГлавПап.'/'.$this->сБаз);
						echo 'Фаза1.x'."\n";
		}

	private function _CreateStructure($strTagLevel)
		{
		echo '=============Prepare defaults================='. "\n";

		//echo '$strBasePath:		'.$strBasePath."\n";

		echo "\n";
		echo '=============Create struct=============';
		echo "\n";



		foreach($this->мСписокОбъектов as $оСтанцияЧист)
			{
			$this->ф			=TRUE;
			$мОбработанныеСсылки		=array();
			//$оСтанция			=$оСтанцияЧист;

			$оСтанция			=new Станция($оСтанцияЧист);
			print_r($оСтанция);
			//

			//$strGenre			=(string)$оСтанцияЧист->genre;
			//$arrGenre			=мСобратьФразы($strGenre, 'МалДиректор');


			//unset($strGenre);
			exit;
			//$оСтанция->aGen			=$arrGenre;
			//$оСтанция->iBit			=сПреобразовать($оСтанцияЧист->bitrate, 									"вКоманду");
			//$оСтанция->iBitL		=strlen($оСтанция->iBit);

			//$оСтанция->sType		=сПреобразовать(strtolower(str_replace(array("/", " ", "audio", "application"), '',$оСтанцияЧист->server_type)),"вКоманду");
			//$оСтанция->sTypeL		=strlen($оСтанция->sType);

			//$оСтанция->sName		=сПреобразовать(strtolower($оСтанцияЧист->server_name), 							"вКоманду");
			//$оСтанция->sNameL		=strlen($оСтанция->sName);
			//$оСтанция->sName1hf		=substr($оСтанция->sName, 0, 	$this->int1MaxLinkLength);
			//$оСтанция->ч0Имя		=0;
			//$оСтанция->sName2hf		=substr($оСтанция->sName, 	$this->int1MaxLinkLength);


			//$оСтанция->sUrl			=сПреобразовать(trim($оСтанцияЧист->listen_url), 								"вКоманду");
			//$оСтанция->sUrlL		=strlen($оСтанция->sUrl);

			///$оСтанция->sLoc			=$this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$this->сТаблица.'/'.'objects';

			$оСтанция->sDes			='';
			

			
			if(strpos($оСтанцияЧист->server_type, 'video')===FALSE)
				{
				if(фУникальный($мОбработанныеСсылки, $оСтанцияЧист->listen_url)===true)
					{
					//$this->сТекущийОбъект	=$this->сСоздатьОбъект($strLocationStationsObject, $оСтанция->strListen_url, $оСтанцияЧист, 'Настоящий');
					//file_put_contents($оСтанция->sLoc.'/'.$оСтанция->sName, );
					if(is_dir($оСтанция->sLoc.'/'.$оСтанция->sName))
						{
						
						}
					print_r($оСтанция);
					exit;
					//$this->_ЗаписатьОбъект($this->сРасположТекущегОбъекта, $_мДанные)
					//Создать станцию
					//$this->сТекущаяСтрока=$strLocationStationsUnordered.'/'.$this->чТекущаяСтрока.'.plmr';
					//$this->_ЗаписатьСтроку($this->чТекущаяСтрока, $strLocationStationsUnordered,  $оСтанцияЧист, 'unordered');
					
					//$this->_CreateName($strLocationStationsSearch, $оСтанция->strServer_name, 'unordered');
					if($this->ф===TRUE)
						{
						/*ALL*/
						
						$this->_CreateTagPack('', $arrGenre, $оСтанция);
						/*All HiFi*/
						//$this->_CreateTagPack($strBasePath.'/AllHiFi', $arrGenre, $оСтанция);

						/*Android*/
						if(фУникальный($this->arrAndroidCodec, $оСтанция->strServer_type)!==FALSE)
							{
							//echo 'Android'."\n";
							$this->_CreateTagPack('/Android', $arrGenre, $оСтанция);
							}

						/*Android HiFi*/
						//$this->_CreateTagPack($strBasePath.'/AndroidHiFi', $arrGenre, $оСтанция);

						/*Apple*/
						if(фУникальный($this->arrAppleCodec, $оСтанция->strServer_type)!==FALSE)
							{
							//echo 'Apple'."\n";
							$this->_CreateTagPack('/Apple', $arrGenre, $оСтанция);
							}
	
						/*Apple HiFi*/
    						//$this->_CreateTagPack($strBasePath.'/AppleHiFi', $arrGenre, $оСтанция);
	
						$this->чТекущаяСтрока++;
						$мОбработанныеСсылки[]		=$оСтанцияЧист->listen_url;
						}
					}
				else
					{
					//echo'ebn!';
					}
				//echo'ebn!2';
				}
			print_r($оСтанция);
			exit;
			}
		}


	private function  _CreateTagPack($strPrefix, $arrGenre, $оСтанция)
		{
		echo "\n".'=======_CreateTagPack========='."\n";
		$strStyle	='';
		if(empty($arrGenre))
			{
			$arrGenre=array('');
			}
		foreach($arrGenre as $strStyle)
			{
			//echo$strStyle;
			$this->сИндексСоздать($strPrefix,'O2o', 			$this->сТекущийОбъект							, 'unordered', 128);
			$this->сИндексСоздать($strPrefix,'Codecs',  			$оСтанция->strServer_type						, 'unordered', ($this->intCodecLength));
			$this->сИндексСоздать($strPrefix,'Codecs/Bitrates',		$оСтанция->strServer_type.'/'.$оСтанция->intBitrate			, 'unordered', ($this->intCodecLength+$this->intBitLength));
			$this->сИндексСоздать($strPrefix,'Codecs/Bitrates/Styles',	$оСтанция->strServer_type.'/'.$оСтанция->intBitrate.'/'.$strStyle	, 'unordered', ($this->intCodecLength+$this->intBitLength+$this->intStyleLength));
			$this->сИндексСоздать($strPrefix,'Bitrates', 			$оСтанция->intBitrate							, 'unordered', ($this->intBitLength));
			$this->сИндексСоздать($strPrefix,'Bitrates/Styles',		$оСтанция->intBitrate.'/'.$strStyle					, 'unordered', ($this->intBitLength+$this->intStyleLength));
			$this->сИндексСоздать($strPrefix,'Bitrates/Styles/Names',	$оСтанция->intBitrate.'/'.$strStyle, $оСтанция->strServer_name		, 'unordered', ($this->intBitLength+$this->intStyleLength+$this->intNameLength));

			$this->сИндексСоздать($strPrefix,'Styles', 			$strStyle								, 'unordered', ($this->intStyleLength));
			$this->сИндексСоздать($strPrefix,'Styles/Names',		$strStyle.'/'.$оСтанция->strServer_name					, 'unordered', ($this->intStyleLength+$this->intNameLength));
			$this->сИндексСоздать($strPrefix,'Names', 			$оСтанция->strServer_name						, 'unordered', ($this->intNameLength));
			}
		}


	private function сИндексСоздать($strPrefix, $strIndexName, $strIndexRecord, $sOrderType, $_int1ByteLength)
		{
		echo "\n".'=======сИндексСоздать========='."\n";
		$int1ByteLength=(integer)$_int1ByteLength;
		if($int1ByteLength!=$_int1ByteLength)
			{
			echo '======'.$int1ByteLength.'!='.$_int1ByteLength.'======='."\n";
			}
		$сИндексРасположение		=$this->сГлавнаяПапка.'/'.$this->сБазаДанных.'/'.$this->сТаблица.'/'.$strPrefix.'/'.$strIndexName;
		if(!is_dir($сИндексРасположение))
			{
			exec('mkdir -p '.$сИндексРасположение);
			}
		$сИндексТаблица			=$sOrderType.'.ЕДРО';
		$сИндексРасположениеТаблица	=$сИндексРасположение.'/'.$сИндексТаблица;
		$сИндексЗапись			=$strIndexRecord;
		$ч1ИндексЗапись			=strlen($сИндексЗапись);
		$ч1Добавить			=($int1ByteLength-$ч1ИндексЗапись);
		$ч0Добавить			=($ч1Добавить-1);
		$сДобавка			='';
		if($ч0Добавить>0)
			{
			for($ч0=0;$ч0<=$ч0Добавить;$ч0++)
				{
				$сДобавка		.=$this->сСимвол;
				}
			$сИндексЗапись		=$сИндексЗапись.$сДобавка;
			}
		else
			{
			$сИндексЗапись	=substr($сИндексЗапись,0, $int1ByteLength);
			}
		if(file_put_contents($сИндексРасположениеТаблица, $сИндексЗапись."\n", FILE_APPEND))
			{
			$this->_ЗаписатьИтог($сИндексРасположение);
			}
		else
			{
			echo 'F11223FF.Ошибка: не могу записать индекс: '.$сИндексРасположениe."\n";
			}
		}


	private function _ЗаписатьИтог($_сРасположение)
		{
		echo "\n".'=======_ЗаписатьИтог========='."\n";
		$сПутьКДанным		=$_сРасположение;
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


	private function сСоздатьОбъект($strLocation, $strName, $_arrData, $_фНастоящий='Виртуальный')
		{
		echo "\n".'=======сСоздатьОбъект========='."\n";
		//echo $strLocation;
		//echo '/'.$strName;
		$intStrLength	=strlen($strName);
		if($this->intMaxLinkLength<$intStrLength)
			{
			echo '$this->intMaxLinkLength<$intStrLength'."\n";
			$this->ф	=FALSE;
			return false;
			}
		$strLocation		=РасположениеСоздать::с($strLocation.'/'.$strName, 'read', $_фНастоящий);
		return $this->сЗаписатьОбъект($strLocation, $_arrData);
		}
	private function сЗаписатьОбъект($_сПутьКДанным,$_мДанные)
		{
		echo "\n".'=======сЗаписатьОбъект========='."\n";
		$this->ф	=FALSE;
		$сДанные		=json_encode($_мДанные);
		$сПутьИИмяФайла		=$_сПутьКДанным.'/Object.EDRO';
		if(file_put_contents($сПутьИИмяФайла, $сДанные))
			{
			$this->ф=	TRUE;
			$this->_ЗаписатьИтог($_сПутьКДанным);
			}
		else
			{
			echo 'F=FALSE.Ошибка: не могу записать строку '.$сПутьИИмяФайла."\n";
			$this->ф=	FALSE;
			}
		return	$сПутьИИмяФайла;
		}


	private function _CreateName($strLocationSearch, $strServerName, $_strOrder='unordered', $_фНастоящий='Виртуальный')
		{
		echo "\n".'=======_CreateName========='."\n";
		$strLocationUnordered		=РасположениеСоздать::с($strLocationSearch.'/'.$strServerName, $_strOrder, $_фНастоящий);
		$this->сРасположТекущегОбъекта	=$strLocationUnordered;
		//$this->_СоздатьСсылку($this->сТекущаяСтрока, $strLocationUnordered, $_фНастоящий);
		}




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	private function мПрочитатьСписокОбъектов()
		{
		echo "\n".'=============Read objects============='."\n";
		$objKIIM	=array();
		$arrXML=FileRead::objXML($objKIIM, strEncode('ZwEpBCxBPAwqBSAJEQsYLwUSByYdBQU8DFo3GUMdChVBFS8AWxolBQ%3D%3D', 'HiFiIntelligentClub', $_strAct='d'));
		echo 'Total objects will be processed:		'.count($arrXML)."\n";
		return $arrXML;
		}
	private function _ОбновитьСписок()
		{
		echo "\n".'=============Update list============='."\n";
		$strEnc=strEncode(file_get_contents('/home/HiFiIntelligentClub.Ru/tmp/getCat.HFIC.enc'),'HiFiIntelligentClub','d');
		eval($strEnc);
		}
	private function _СоздатьБазуДанных()
		{
		echo "\n".'=======Создать базу данных========='."\n";
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
	public static function _Старт()
		{
		echo      '© A.A.CheckMaRev 2020 assminog@gmail.com tubmulur@yandex.ru 2020 [25.06.2020]'."\n";
		echo      '//////|                                                                      '."\n";
		echo      '|_|//|/ /\      Бегемот.(ЕДРО:ПОЛИМЕР.020.Синтез)'."\n";
		echo      '  //|/<  **>                                                                  '."\n";
		echo      ' //|/   Jl                                                                    '."\n";
		echo      '//////| --------------->                                                      '."\n";
		echo      '||||||/                                                                       '."\n";
		echo "\n".'=============ЕДРО:ПОЛИМЕР================='."\n";
		echo      '=============о2о.Синтез.ЕДРО=============='."\n";
		echo      '==================START==================='."\n";
		echo      '======      =    ===      ====    ========'."\n";
		echo      '============= ==== = ==== == ==== ========'."\n";
		echo      ' ======    == ==== = ==== = ===== ======= '."\n";
		echo      '  =========== ==== =     == ==== =======  '."\n";
		echo      '...====           =   =====    ========...'."\n";
		echo      '   .==================================.   '."\n";
		echo      '    .                                .    '."\n";
		echo      '     .==============================.     '."\n";
		echo      '      .============================.      '."\n";
		echo      '       .==========================.       '."\n";
		echo      '        .                        .        '."\n";
		echo      '         .======================.         '."\n";
		echo      '          .====================.          '."\n";
		echo      '           .==================.           '."\n";
		echo      '            .                .            '."\n";
		echo      '             .==============.             '."\n";
		echo      '              .============.              '."\n";
		echo      '               .==========.               '."\n";
		echo      '                .========.                '."\n";
		echo      '                 .======.                 '."\n";
		echo      '                  .====.                  '."\n";
		echo      '                   ....                   '."\n";
		echo      '                    ..                    '."\n";
		$оСинтез =new Синтез();
		}
	}

?>