<?php
namespace src\library\Factory;

abstract class CommsManager
{
	abstract function getHeaderText();
	abstract function getApptEncoder();
	abstract function getTtdEncoder();
	abstract function getContactEncoder();
	abstract function getFooterText();	
}
