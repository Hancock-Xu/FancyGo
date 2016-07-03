<?php
/**
 * Created by PhpStorm.
 * User: Xuhanyu
 * Date: 7/2/16
 * Time: 22:53
 */

namespace verifyEmailService;

use Closure;
use Illuminate\Support\Arr;
use UnexpectedValueException;
use Illuminate\Contracts\Auth\UserProvider;
use verifyEmailService\tokenRepository;
use Illuminate\Contracts\Mail\Mailer as MailerContract;
use verifyEmailService\Protocol\verifyEmail as verifyEmailContract;

class verifyBroker implements verifyEmailContract
{
	protected $tokens;

	protected $users;

	protected $mailer;

	protected $emailView;

	public function __construct(
		tokenRepository $tokenRepository,
		UserProvider $user,
		MailerContract $mailer,
		$emailView
	)
	{
		$this->tokens = $tokenRepository;
		$this->users = $user;
		$this->mailer = $mailer;
		$this->emailView = $emailView;
	}

	public function sendVerifyEmail($email, Closure $callback = null)
	{
		$token = $this->tokens->create($email);
		$view = $this->emailView;
		
		$this->mailer->send($view, compact('token'), function ($m) use ($callback, $email){
			
			$m->to($email);
			
			if (!is_null($callback)){
				call_user_func($callback, $m);
			}
		});
		
		return static::VERIFY_EMAIL_SENT;

	}
	
	public function verifyEmail($email, $token, Closure $callback = null)
	{
		if ($this->tokens->exists($email, $token)){
			$this->tokens->delete($token);
			return static::VERIFY_SUCCEED;
		}else{
			return static::VERIFY_FAILED;
		}

	}


}