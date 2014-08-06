<?php

class Attendee extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'attendees';
  
    protected $guarded = ['id', 'created_at', 'updated_at'];

	//protected $fillable = [];
    
    public static $rules = array(
        'firstname'     => 'required',
        'surname'       => 'required',
        'organisation'  => 'required',
        'email'         => 'required|email|unique:attendees',
        'terms'         => 'required|boolean'
    );
  
    public static $rulesUpdate = array(
        'firstname'     => 'required',
        'surname'       => 'required',
        'organisation'  => 'required',
        'email'         => 'required|email',
        'terms'         => 'required|boolean'
    );
    
    public static $messages = array(
        'firstname.required'    => 'Jméno je povinná položka',
        'surname.required'      => 'Příjmení je povinná položka',
        'organisation.required' => 'Organizace je povinná položka',
        'email.required'        => 'Emailová adresa je povinná položka',
        'email.unique'          => 'Někdo jiný se pomocí stejné e-mailové adresy zaregistroval. Použijte prosím jinou.',
        'email.email'           => 'Emailová adresa nemá správný formát',
        'terms.required'        => 'Souhlas s podmínkami je povinný'
    );
    
    public static function validate($data) {
        return Validator::make($data, static::$rules, static::$messages);
    }

    public static function validateUpdate($data) {
        return Validator::make($data, static::$rulesUpdate, static::$messages);
    }
  
}
