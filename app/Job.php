<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Job
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $job_title
 * @property string $responsibility
 * @property string $eduction_require
 * @property integer $years_work_experience
 * @property string $salary_and_other_welfare
 * @property string $job_status_type
 * @property string $industry
 * @property string $published_at
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereJobTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereResponsibility($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereEductionRequire($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereYearsWorkExperience($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereSalaryAndOtherWelfare($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereJobStatusType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereIndustry($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job wherePublishedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Company $companies
 * @property integer $company_id
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereCompanyId($value)
 * @property string $resume_email
 * @property string $description
 * @property string $desired_skill_experience
 * @property string $salary_lower_limit
 * @property string $salary_upper_limit
 * @property string $compensation_benefits
 * @property string $other_welfare
 * @property string $position_points
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereResumeEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereDesiredSkillExperience($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereSalaryLowerLimit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereSalaryUpperLimit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereCompensationBenefits($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job whereOtherWelfare($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Job wherePositionPoints($value)
 */
class Job extends Model
{

	protected  $dates = ['published_at'];

	protected $fillable = [
		'job_title',
		'description',
		'desired_skill_experience',
		'salary_lower_limit',
		'salary_upper_limit',
		'compensation_benefits',
		'other_welfare',
		'job_status_type',
		'industry',
		'position_points',
		'published_at',

		'education_require',
		'years_work_experience',
		'company_id',
		'resume_email'
	];

	protected function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
	}

//	public function companies()
//	{
//		return $this->belongsTo('App\Company');
//	}
}
