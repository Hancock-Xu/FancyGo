<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $passportNumber
 * @property string $phoneNumber
 * @property string $openid
 * @property string $name
 * @property string $gender
 * @property string $city
 * @property string $country
 * @property string $headimgurl
 * @property string $province
 * @property string $unionid
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassportNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereOpenid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereGender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCountry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereHeadimgurl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereProvince($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUnionid($value)
 * @mixin \Eloquent
 * @property-read \App\Company $company
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePhoneNumber($value)
 * @property string $resume_url
 * @method static \Illuminate\Database\Query\Builder|\App\User whereResumeUrl($value)
 * @property string $first_name
 * @property string $last_name
 * @property string $sex
 * @property string $date_of_birth
 * @property string $nationality
 * @property string $native_language
 * @property string $chinese_level
 * @property string $current_residence
 * @property string $phone_number
 * @property string $passport_number
 * @property boolean $finish_basic_info
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereSex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereDateOfBirth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereNationality($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereNativeLanguage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereChineseLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCurrentResidence($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFinishBasicInfo($value)
 */
class User extends Authenticatable
{
	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'password',

		'sex',
		'date_of_birth',
		'nationality',
		'native_language',
		'chinese_level',
		'phone_number',
		'current_residence',
		'finish_basic_info',
		'passportNumber',
		'resume_url',
		];
	
	protected $hidden = [
		'password','remember_token',
	];

	public function company(){
		return $this->hasOne('App\Company');
	}
}
