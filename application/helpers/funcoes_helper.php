<?php
defined('BASEPATH') or exit('No direct script access allowed');

function limpar($string)
{
	$table = array(
		'/' => '', '(' => '', ')' => '',
	);
	// Traduz os caracteres em $string, baseado no vetor $table
	$string = strtr($string, $table);
	$string = preg_replace('/[,.;:`´^~\'"]/', null, iconv('UTF-8', 'ASCII//TRANSLIT', $string));
	$string = strtolower($string);
	$string = str_replace(" ", "-", $string);
	$string = str_replace("---", "-", $string);
	return $string;
}

function postadoem($string)
{

	$dia_sem = date('w', strtotime($string));

	switch ($dia_sem) {
		case '0':
			$semana = "Domingo";
			break;
		case '1':
			$semana = "Segunda-feira";
			break;
		case '2':
			$semana = "Terça-feira";
			break;
		case '3':
			$semana = "Quarta-feira";
			break;
		case '4':
			$semana = "Quinta-feira";
			break;
		case '5':
			$semana = "Sexta-feira";
			break;
		case '6':
			$semana = "Sábado";
			break;

		default:
			break;
	}

	$dia = date('d', strtotime($string));

	$mes_num = date('m', strtotime($string));

	switch ($mes_num) {
		case '01':
			$mes = "Janeiro";
			break;
		case '02':
			$mes = "Fevereiro";
			break;
		case '03':
			$mes = "Março";
			break;
		case '04':
			$mes = "Abril";
			break;
		case '05':
			$mes = "Maio";
			break;
		case '06':
			$mes = "Junho";
			break;
		case '07':
			$mes = "Julho";
			break;
		case '08':
			$mes = "Agosto";
			break;
		case '09':
			$mes = "Setembro";
			break;
		case '10':
			$mes = "Outubro";
			break;
		case '11':
			$mes = "Novembro";
			break;
		case '12':
			$mes = "Dezembro";
			break;

		default:
			break;
	}

	$ano = date('Y', strtotime($string));
	$hora = date('H:i', strtotime($string));

	return $semana . ' ' . $dia . ' de ' . $mes . ' de ' . $ano . ' ' . $hora;
}
