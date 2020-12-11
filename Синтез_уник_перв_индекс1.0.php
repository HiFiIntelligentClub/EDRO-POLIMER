#!/usr/bin/php
<?php                                                                              
/*                                                                                 
© A.A.CheckMaRev 2020 assminog@gmail.com tubmulur@yandex.ru 2020 [25.06.2020]      
//////|                                                                            
|_|//|/ /\      Бегемот.(ЕДРО:ПОЛИМЕР.020.Синтез)
  //|/<  **> -------------------->                                                                      
 //|/   Jl ----------------->                                                                        
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
	private		$мСтанцияЧист;
	private		$сЗаписываемыйОбъект;

	private		$сТипОперации		='Чтение_Диск';
	private		$сГлавнаяПапка		='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных';
	private		$сБазаДанных		='HiFiIntelligentClub';
	private		$сТаблица		='Stations';
	private		$мТипХранения		=array('unordered','search');
	private		$ч0ТекущаяСтрока	=0;
	private		$сТекущаяСтрока		='';
	private		$сТекущаяСтрокаИД	='';
	private		$сИмяТекущегОбъекта	='';
	private		$мРасположКолВо		=array();
	private		$arrAndroidCodec	=array('mp3', 'mpeg', 'ogg', 'оopus', 'vorbis');
	private		$arrAppleCodec		=array('aac', 'aacp', 'flac', 'mp3', 'mpeg');
	private		$arrICQRType		=
				array(
				'Apple'=>
					array(
					'mp3'=>	
						array(
						'Low quality'	=>'<192',
						'HiFi beginner'	=>'>=192',
						'HiFi lover'	=>false,
						'HiFi Top'	=>false,
						'2.1'		=>false,
						'5.1'		=>false,
						'7.1'		=>false,
						),
					'mpeg'=>	
						array(
						'Low quality'	=>'<192',
						'HiFi beginner'	=>'>=192',
						'HiFi lover'	=>false,
						'HiFi Top'	=>false,
						'2.1'		=>false,
						'5.1'		=>false,
						'7.1'		=>false,
						),

					'aac'=>	
						array(
						'Low quality'	=>'=<64',
						'HiFi beginner'	=>'>=64<192'
						'HiFi lover'	=>'<192<1024',
						'HiFi Top'	=>'>1024',
						'2.1'		=>false,
						'5.1'		=>false,
						'7.1'		=>false,
						),

					'aacp'=>	
						array(
						'Low quality'	=>'=<64',
						'HiFi beginner'	=>'>=64<192',
						'HiFi lover'	=>'<192<1024',
						'HiFi Top'	=>'>1024',
						'2.1'		=>false,
						'5.1'		=>false,
						'7.1'		=>false,
						),
					),
				'Android'=>
					array(
					'mp3'	=>
						array(
						'Low quality'	=>'<192',
						'HiFi beginner'	=>'>=192',
						'HiFi lover'	=>false,
						'HiFi Top'	=>false,
						'2.1'		=>false,
						'5.1'		=>false,
						'7.1'		=>false,
						),
					'mpeg'	=>
						array(
						'Low quality'	=>'<192',
						'HiFi beginner'	=>'>=192',
						'HiFi lover'	=>false,
						'HiFi Top'	=>false,
						'2.1'		=>false,
						'5.1'		=>false,
						'7.1'		=>false,
						),
					'ogg'	=>
						array(
						'Low quality'	=>'<=96',
						'HiFi beginner'	=>'>=96=<256',
						'HiFi lover'	=>'<256=<1024',
						'HiFi Top'	=>'>1024',
						'2.1'		=>false,
						'5.1'		=>false,
						'7.1'		=>false,
						),
					'opus'	=>
						array(
						'Low quality'	=>'<=96',
						'HiFi beginner'	=>'>=96=<256',
						'HiFi lover'	=>'<256=<1024',
						'HiFi Top'	=>'>1024',
						'2.1'		=>false,
						'5.1'		=>false,
						'7.1'		=>false,
						),
					'vorbis'=>
						array(
						'Low quality'	=>'<=96',
						'HiFi beginner'	=>'>=96=<256',
						'HiFi lover'	=>'<256=<1024',
						'HiFi Top'	=>'>1024',
						'2.1'		=>false,
						'5.1'		=>false,
						'7.1'		=>false,
						),
					),
				);


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

	private function _CreatePrimaryIndex($_strLocationPrime, $мОбрабатываемыйОбъект)
		{
		$this->сТекущаяСтрокаИД			=$мОбрабатываемыйОбъект['id'];
		$сЗаписываемыйОбъект			=$_strLocationPrime.'/'.$мОбрабатываемыйОбъект['id'].'.plmr';
		
		if(file_put_contents($сЗаписываемыйОбъект, strMyJson($мОбрабатываемыйОбъект))===FALSE)
			{
			_Report('Primary index write error:'.$сЗаписываемыйОбъект);
			}
		else
			{
			$this->сТекущаяСтрока		=$сЗаписываемыйОбъект;
			}
		}
	private function _CreateFullTextIndex($strLocationSearch, $мОбрабатываемыйОбъект)
		{
		$_сЗаписываемыйОбъектРасполож		=РасположениеСоздать::с($strLocationSearch.'/'.$мОбрабатываемыйОбъект['server_name'], 'unordered');
		$this->_СоздатьСсылку($_сЗаписываемыйОбъектРасполож);
		}
	private function _СоздатьСсылку($_сЗаписываемыйОбъектРасполож)
		{
		$сОбрабатываемыйОбъект		=$this->сТекущаяСтрока;
		$сЗаписываемыйОбъектРасполож	=$_сЗаписываемыйОбъектРасполож;

		$ч1РасположениеКоличество	=РасположениеКоличество::ч1($сЗаписываемыйОбъектРасполож);
		$сЗаписываемыйОбъект		=$сЗаписываемыйОбъектРасполож.'/'.$ч1РасположениеКоличество.'.plmr';

		if(symlink($сОбрабатываемыйОбъект, $сЗаписываемыйОбъект))
			{
			if(file_put_contents($сЗаписываемыйОбъектРасполож.'/total.plmr', strMyJson(array('total'=>$ч1РасположениеКоличество)))===FALSE)
				{
				_Report('Error creating total!'.$сЗаписываемыйОбъектРасполож.'/total.plmr');
				}
			else
				{
				}
			}
		else
			{
			_Report('Error creating link!'.$сОбрабатываемыйОбъект.'->'.$сЗаписываемыйОбъект);
			}
		}
	private function _AddJoinedTableBelongs($strLocationJoinedTable,  $мПрисоед)
		{
		if(is_array($мПрисоед))
			{
			if(file_put_contents($strLocationJoinedTable.'/'.$this->сТекущаяСтрокаИД.'.plmr', strMyJson($мПрисоед))===FALSE)
				{
				_Report('Error creating belong_index!'.$strLocationJoinedTable.'/'.$this->сТекущаяСтрокаИД.'.plmr');
				}
			else
				{
				}
			}
		}
	private function _AddJoinedTableHasMany($strLocationJoinedTable,  $мПрисоед)
		{
		if(is_array($мПрисоед))
			{
			$сРасполож	=$strLocationJoinedTable.'/'.$this->сТекущаяСтрокаИД;
			if(is_dir($сРасполож.'/unordered'))
				{
				$ч1РасположениеКоличество	=РасположениеКоличество::ч1($сРасполож.'/unordered');
				if(file_put_contents($сРасполож.'/unordered/'.$ч1РасположениеКоличество.'.plmr', strMyJson($мПрисоед))===FALSE)
					{
					_Report('Error creating base! '.$сРасполож.'/unordered/'.$ч1РасположениеКоличество.'.plmr');
					}
				else
					{
					if(file_put_contents($сРасполож.'/unordered/total.plmr', strMyJson(array('total'=>$ч1РасположениеКоличество)))===FALSE)
						{
						_Report('Error creating total: '.$сРасполож.'/unordered/total.plmr');
						}
					}
				}
			else
				{
				РасположениеСоздать::с($сРасполож, 'unordered');
				$this->_AddJoinedTableHasMany($strLocationJoinedTable,  $мПрисоед);
				}
			}
		}
	private function  _CreateTagPack($_strBasePath, $arrGenre, $мСтанцияЧист, $bIzLinkStation)
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
			$s1= $this->strCreateTag($strBasePath.'/Styles', $strStyle, $мСтанцияЧист['server_name']);
			    $s2	 = $this->strCreateTag($s1.'/Codecs', $мСтанцияЧист['server_type'], $мСтанцияЧист['server_name']);
			    $s2_1= $this->strCreateTag($s1.'/Bitrates', $мСтанцияЧист['bitrate'], $мСтанцияЧист['server_name']);
				    $s3= $this->strCreateTag($s2.'/Bitrates', $мСтанцияЧист['bitrate'], $мСтанцияЧист['server_name']);
			$b1= $this->strCreateTag($strBasePath.'/Bitrates', $мСтанцияЧист['bitrate'], $мСтанцияЧист['server_name']);
			$c1= $this->strCreateTag($strBasePath.'/Codecs', $мСтанцияЧист['server_type'], $мСтанцияЧист['server_name']);
			    $c2= $this->strCreateTag($c1.'/Bitrates', $мСтанцияЧист['bitrate'], $мСтанцияЧист['server_name']);
			}
		}
	private function  strCreateTag($_strPath, $_strTag, $_strStationName)
		{
		//echo $_strPath;
		//echo "\n";
		$s1=РасположениеСоздать::с($_strPath,	'search');
		$s2=РасположениеСоздать::с($s1.'/'.$_strTag, 'unordered');
		$this->_СоздатьСсылку($s2);
		$s3 =РасположениеСоздать::с($s1.'/'.$_strTag, 'search');
		$s4 =РасположениеСоздать::с($s3.'/'.$_strStationName, 'unordered');
		$this->_СоздатьСсылку($s4);
		return $s2;
		}

	private function _CreateStructure($strTagLevel)
		{
		echo 'Создаём БД'."\n";
		$strBasePath			=$this->сГлавнаяПапка.'/'.$this->сБазаДанных;
		$strLocationStationsPrime	=РасположениеСоздать::с($strBasePath.'/Stations',	'prime');
		$strLocationStationsSearch	=РасположениеСоздать::с($strBasePath.'/Stations',	'search');
		$strLocationStationsUnordered	=РасположениеСоздать::с($strBasePath.'/Stations',	'unordered');
		$strLocationStationsGenres	=РасположениеСоздать::с($strBasePath.'/Stations',	'genres');
		$strLocationStationsICQR	=РасположениеСоздать::с($strBasePath.'/Stations',	'ICQR');
		$strLocationStationsHistory	=РасположениеСоздать::с($strBasePath.'/Stations',	'history');
		$мОбрСтан			=array();
		$ч0Х				=0;
		foreach($this->мСписокОбъектов as $мСтанцияЧист)
			{
			$мСтильДляЧел			=array();
			$мСтильДляРасполож		=array();
			//$strFromEnc	=mb_detect_encoding($оСтанцияЧист['server_name']);
			//$strToEnc	='UTF-8';
			//$оСтанцияЧист['server_name']=mb_convert_encoding($оСтанцияЧист['server_name'],$strToEnc, $strFromEnc);
			//$оСтанцияЧист['listen_url']	=сЗаменаСлэшУЕ($оСтанцияЧист['listen_url']);
			//$оСтанцияЧист['server_name']	=сЗаменаСлэшУ($оСтанцияЧист['server_name']);
			$strGenre				=trim(strSafeUsers(str_replace(array( '(',')' ), '', $мСтанцияЧист['genre'])));
			$мСтанцияЧистS['server_type']		=trim(strSafeUsers(strtolower(str_replace(array("/", " ", "audio", "application", "ogg:codecs=", "ogg: codecs="), '', $мСтанцияЧист['server_type']))));
			$мСтанцияЧистS['server_type']		=сПреобразовать($мСтанцияЧистS['server_type'], 			"вКоманду");
			$мСтанцияЧистS['server_name']		=trim(strSafeUsers($мСтанцияЧист['server_name']));
			$мСтанцияЧистS['server_name']		=сПреобразовать($мСтанцияЧистS['server_name'], 			"вКоманду");
			$мСтанцияЧистS['bitrate']		=(integer)trim(strSafeUsers($мСтанцияЧист['bitrate']));
			//$мСтанцияЧистS['current_song']``		=trim(strSafeUsers($мСтанцияЧист['current_song']));
			$strListenUrl				=trim(strSafeUsers($мСтанцияЧист['listen_url']));
			$мСтанцияЧистS['id']			=сПреобразовать($strListenUrl, 					"вКоманду");
			$мСтанцияЧистS['samplerate']		=trim(strSafeUsers($мСтанцияЧист['samplerate']));
			$мСтанцияЧистS['channels']		=trim(strSafeUsers($мСтанцияЧист['channels']));
									     unset($мСтанцияЧист);
			$мСтанцияЧист				=$мСтанцияЧистS;
			//				   unset($мСтанцияЧистS);

			$мСтильДляЧел				=мСобратьФразы($strGenre, 			'НеТрог');
			$мСтильДляРасполож			=мСобратьФразы($strGenre, 			'МалДиректор');
			
			$this->_CreatePrimaryIndex($strLocationStationsPrime, 		$мСтанцияЧист);
			$this->_CreateFullTextIndex($strLocationStationsSearch,		$мСтанцияЧист);
			$this->_AddJoinedTableBelongs($strLocationStationsGenres,	$мСтильДляЧел);
			$this->_AddJoinedTableBelongs($strLocationStationsICQR,		array());
			$this->_AddJoinedTableHasMany($strLocationStationsHistory,	array('strEvent'=>date('Y-m-d H:i:s')));
			$this->_СоздатьСсылку($strLocationStationsUnordered);
		

			if(empty($мСтанцияЧист['id']))
				{
				_Report('empty: $оСтанция[listen_url]'.$мСтанцияЧист['server_name'].'||'.$мСтанцияЧист['id'].'||'.$strGenre);
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);
				continue;
				}
			if($мСтанцияЧист['id']=="")
				{
				_Report('$оСтанция[listen_url]==""'.$мСтанцияЧист['server_name'].'||'.$моСтанцияЧист['id'].'||'.$strGenre);
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);
				continue;
				}
			if(strpos($мСтанцияЧист['server_type'], 'video')!==FALSE)
				{
				_Report('strpos($оСтанцияЧист[server_type], video)!==FALSE'.$мСтанцияЧист['server_name'].'||'.$мСтанцияЧист['id'].'||'.$strGenre);
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);
				continue;
				}
			if(strpos($мСтанцияЧист['server_type'], 'usac')!==FALSE)
				{
				_Report('usac: '.$мСтанцияЧист['server_name'].'##'.$strGenre);
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);

				continue;
				}
			if(in_array($мСтанцияЧист['server_type'], $this->arrAndroidCodec)===FALSE||
			    in_array($мСтанцияЧист['server_type'], $this->arrAppleCodec)===FALSE)
				{
				_Report("\n".'Кодек не входит в сетап: '.$мСтанцияЧист['server_type'].'##'.$strGenre);
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);
				continue;
				}
			if(фДубль($мОбрСтан,$мСтанцияЧист, $strGenre)===TRUE)
				{
				$мОбрСтан[]	=
					array(
						'id'	=>$мСтанцияЧист['id'],
						'name'	=>$мСтанцияЧист['server_name'],
						'genre'	=>$strGenre
					);
				continue;
				}
			//if(фCreateListen_lnSock($оСтанцияЧист['listen_url'])!==TRUE)
			//	{
			//	_Report('фCreateListen_lnSock($оСтанцияЧист['listen_ur']l)===TRUE'.$оСтанцияЧист['server_name'].'||'.$оСтанцияЧист['listen_url'].'||'.$оСтанцияЧист['genre']);
			//	continue;
			//	}
			
			$this->_CreateTagPack($strBasePath, $мСтильДляРасполож, $мСтанцияЧист, 1);
			if(in_array($мСтанцияЧист['server_type'], $this->arrAndroidCodec)!==FALSE)
				{
				//echo 'Android'."\n";
				//$this->_CreateFullTextIndex($strLocationStationsSearch,		$мСтанцияЧист);
				$this->_CreateTagPack($strBasePath.'/Android', $мСтильДляРасполож, $мСтанцияЧист, 1);
				}
			if(in_array($мСтанцияЧист['server_type'], $this->arrAppleCodec)!==FALSE)
				{
				//echo 'Apple'."\n";
				$this->_CreateTagPack($strBasePath.'/Apple', $мСтильДляРасполож, $мСтанцияЧист, 1);
				}
			$this->ч0ТекущаяСтрока++;
			$ч0Х++;
			$мОбрСтан[]	=
				array(
				'id'	=>$мСтанцияЧист['id'],
				'name'	=>$мСтанцияЧист['server_name'],
				'genre'	=>$strGenre
				);
			}
		}





	/*private function _CreateName($оОбрабатываемыйОбъект, $strLocationSearch, $strServerName, $_strOrder='unordered')
		{
		$_сЗаписываемыйОбъектРасполож		=РасположениеСоздать::с($strLocationSearch.'/'.$strServerName, $_strOrder);
		$this->_СоздатьЗапись($оОбрабатываемыйОбъект, $_сЗаписываемыйОбъектРасполож);
		
		}*/
	/*private function _СоздатьЗапись($оОбрабатываемыйОбъект, $сЗаписываемыйОбъектРасполож)
		{
		$ч1РасположениеКоличество			=РасположениеКоличество::ч1($сЗаписываемыйОбъектРасполож);

		$сЗаписываемыйОбъект		=$сЗаписываемыйОбъектРасполож.'/'.$ч1РасположениеКоличество.'.plmr';
	//	$this->сТекущаяСтрока		=$сЗаписываемыйОбъект;
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
		}*/
/*	private function _ЗаписатьСтроку($_чНомер, $_сПутьКДанным,$_мДанные)
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
	
	private function _СоздатьСсылкуИмя($_сОбрабатываемыйОбъект, $_сЗаписываемыйОбъект)
		{
		if(symlink($_сОбрабатываемыйОбъект, $_сЗаписываемыйОбъект))
			{
			}
		else
			{
			_Report('Error creating link!'.$_сОбрабатываемыйОбъект.'->'.$_сЗаписываемыйОбъект);
			}
		}*/
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

	/*private function _СоздатьПапку($_оДанные)
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
		}*/



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