<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/2/16
 * Time: 15:30
 */

namespace verifyEmailService;


interface verifyEmailBrokerFactory
{
	/**
	 * Get verify email broker by name
	 * 
	 * @param null $name
	 * @return mixed
	 */
	public function broker($name = null);
}