#!/usr/bin/php
<?php
require_once('/home/EDRO.SetOfTools/System/0.Functions/0.strNDigit.php');
$сРасположОбъект	='/home/ЕДРО:ПОЛИМЕР/о2о.Синтез.ЕДРО/о2о.Если/о2о.Действие/о2о.Реальность/о2о.Объект';

echo'Загруз:РасположениеКоличество.'."\n";
$сРасположEvent		='/Чтение_Диск';
$сРасположDestination	='/ОЗУ';
$сРасположReality	='/ЛокалОблако';
$сРасположObject	='/Список/РасположениеКоличество.php';
require_once($сРасположОбъект.$сРасположEvent.$сРасположDestination.$сРасположReality.$сРасположObject);
echo'Загруз:РасположениеКоличество->загрузил модуль.'."\n";

$strDb		='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub';
$strTable	='Stations';
$strReality0	='All';
$strReality1	='Android';
$strReality2	='Apple';
$strOrderType	='search';
$strOrderType2	='unordered';

$strIndex2Source	= '/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub/Stations/prime';

//$strDb.'/'.$strReality1.'/'.$strTable.'/'.$strOrderType;

//$strIndex2Destination	= '/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub/Stations/unordered2';
$arrIndexDestinations=
array(
	'All'		=> $strDb.'/'.$strTable.'/'.$strOrderType,
	'All2'		=> $strDb.'/'.$strTable.'/'.$strOrderType2,
	'Android'	=> $strDb.'/'.$strReality1.'/'.$strTable.'/'.$strOrderType,
	'Android2'	=> $strDb.'/'.$strReality1.'/'.$strTable.'/'.$strOrderType2,
	'Apple'		=> $strDb.'/'.$strReality2.'/'.$strTable.'/'.$strOrderType,
	'Apple2'	=> $strDb.'/'.$strReality2.'/'.$strTable.'/'.$strOrderType2
	);

function фОчиститьРасположение($_мРасполож)
	{
	foreach($_мРасполож as $strReality=>$strDestination)
		{
		exec('rm -r -f '.$strDestination);
		}
	}
function фСоздатьРасположение($_strIndex2Destination)
	{

	$strIndex2Destination	=$_strIndex2Destination;
			//unlink($_strIndex2Destination);
	$ф	=FALSE;
	if(!is_dir($strIndex2Destination))
		{
		//if(mkdir($strIndex2Destination)===FALSE)
		exec('mkdir -p '.$strIndex2Destination);
		/*	{
			//Report
			echo 'Не создать расположение '.$strIndex2Destination."\n";
			$ф	=FALSE;
			}
		else
			{
			$ф	=TRUE;
			}*/
		}
	else
		{
		$ф	=TRUE;
		}
	return $ф;
	}
function фСоздатьСсылку($_strIndexSource, $_strIndexDestination)
	{
	$ф	= FALSE;
	echo'destinattion'.$_strIndexDestination;
	echo"\n";
	echo $ч0РасположКоличество		=РасположениеКоличество::ч0($_strIndexDestination);
	echo"\n";
	echo'destinattionObj'. $strIndexDestinationObj		=$_strIndexDestination.'/'.$ч0РасположКоличество.'.plmr';
	echo"\n";

	if(symlink($_strIndexSource, $strIndexDestinationObj)!==FALSE)
		{
	/*	if(file_put_contents($_strIndexDestination.'/total.plmr', json_encode(array('total'=>$ч0РасположКоличество)))!==FALSE)
			{
			$ф	= TRUE;
			}
		else
			{
			//Report 123
			echo 'Не создать объект: '.$_strIndexDestination.'/total.plmr'."\n";
			$ф	= FALSE;
			}*/
		}
	else
		{
		//Report 123
		$ф	= FALSE;
		echo 'Не создать объект: '.$_strIndexSource.'->'.$strIndexDestinationObj	."\n";
		}
	return $ф;
	}
function _CheckO($_nu1Source, $_nu0I)
	{
	if($_nu1Source!=($_nu0I+1))
		{
		echo '_nu1Source!=(_nu0I+1)'."\n";
		}
	}

//фОчиститьРасположение($arrIndexDestinations);


$arrSourceDirs	=scandir($strIndex2Source);
$nu1Source	=count($arrSourceDirs);

$nu0I		=0;
//aac+
//aacp+
//flac
//info@kissradio.site
//mp3+
//mpeg+
//ogg
//ogg+vorbis
//oggо30оcodecsо26оopus
//radiogama-vidin128kbps
//radiogama-vidinaac+
//radioteteven-128kbps
//radioteteven-48kbps
function фСоздатьSearchЭлемент($strSource, $strDestination, $о)
	{
	$ф=FALSE;
	$strDestFull	=$strDestination.'/'.$о->strServer_name;
	if(is_dir($strDestFull))
		{
		}
	else
		{
		//echo $strIndex2Source.'/'.$strDir."\n";
		фСоздатьРасположение($strDestFull);
		$ч0РасположКоличество	=РасположениеКоличество::ч0($strDestFull);
		if(фСоздатьСсылку($strSource, $strDestFull)!==FALSE)
			{
			$ф=TRUE;
			}
		}
	return $ф;
	}
function фСоздатьUnorderedЭлемент($strSource, $strDestination)
	{
	$ф=FALSE;
	$strDestFull	=$strDestination;
	//if(is_dir($strDestFull))
	//	/{
	//	}
	//else
	//	{
		//echo $strIndex2Source.'/'.$strDir."\n";
		фСоздатьРасположение($strDestFull);
		//$ч0РасположКоличество	=РасположениеКоличество::ч0($strDestFull);
		if(фСоздатьСсылку($strSource, $strDestFull)!==FALSE)
			{
			$ф=TRUE;
			}
	//	}
	return $ф;
	}
foreach($arrSourceDirs as $strDir)
	{
	//foreach($arrIndexDestinations as $strReality=>$strDestination)
	//	{
		$arrIndexDestinations['All'];
		$arrIndexDestinations['Android'];
		$arrIndexDestinations['Apple'];

		$strSource	=$strIndex2Source.'/'.$strDir;
		$о=json_decode(file_get_contents($strSource));
		if(empty($о))
			{
			continue;
			}
		if(!isset($о->strServer_name))
			{
			continue;
			}
		$о->strServer_name	=substr(сПреобразовать(mb_strtolower($о->strServer_name),'вКоманду'), 0, 100);
		if($о->strServer_type=="aac"||$о->strServer_type=="aacp"||$о->strServer_type=="mp3"||$о->strServer_type=="mpeg"||$о->strServer_type=="ogg"||$о->strServer_type=="ogg+vorbis"||$о->strServer_type=="oggо30оcodecsо26оopus"||$о->strServer_type=="flac")
			{
	//		фСоздатьSearchЭлемент($strSource, $arrIndexDestinations['All'], $о);
			фСоздатьUnorderedЭлемент($strSource, $arrIndexDestinations['All2']);
			}
		if($о->strServer_type=="aac"||$о->strServer_type=="aacp"||$о->strServer_type=="mp3"||$о->strServer_type=="mpeg")
			{
	//		фСоздатьSearchЭлемент($strSource, $arrIndexDestinations['Apple'], $о);
			фСоздатьUnorderedЭлемент($strSource, $arrIndexDestinations['Apple2']);
			}
		if($о->strServer_type=="mp3"||$о->strServer_type=="mpeg"||$о->strServer_type=="ogg"||$о->strServer_type=="ogg+vorbis"||$о->strServer_type=="oggо30оcodecsо26оopus")
			{
	//		фСоздатьSearchЭлемент($strSource, $arrIndexDestinations['Android'], $о);
			фСоздатьUnorderedЭлемент($strSource, $arrIndexDestinations['Android2']);
			}


		//фСоздатьРасположение(dirname($strDestination)); //destinationReality
		//фСоздатьРасположение($strDestination);
		//if(фСоздатьСсылку($strIndex2Source.'/'.$strDir, $strDestination.'/'.$nu0I.'.plmr', $nu0I)!==FALSE)
		//	{
		///	$nu0I++;
		//	}
		//}
	}
_CheckO($nu1Source, $nu0I);
?>