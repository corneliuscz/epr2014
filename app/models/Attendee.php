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
        'hlavni_sal'    => 'required_without:seminar',
        'seminar'       => 'required_without:hlavni_sal',
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
        'firstname.required'          => '<strong>Jméno</strong> je povinná položka',
        'surname.required'            => '<strong>Příjmení</strong> je povinná položka',
        'organisation.required'       => '<strong>Organizace</strong> je povinná položka',
        'email.required'              => '<strong>Emailová adresa</strong> je povinná položka',
        'email.unique'                => 'Někdo jiný se pomocí stejné e-mailové 
                                          adresy zaregistroval. Použijte prosím 
                                          jinou.',
        'email.email'                 => '<strong>Emailová adresa</strong> nemá správný formát',
        'hlavni_sal.required_without' => 'Pro úspěšnou registraci na konferenci
                                          si musíte <strong>vybrat alespoň jednu část 
                                          programu,</strong> které se zúčastníte (hlavní
                                          program nebo tématické sekce)',
        'seminar.required_without'    => 'Pro úspěšnou registraci na konferenci
                                          si musíte <strong>vybrat alespoň jednu část 
                                          programu,</strong> které se zúčastníte (hlavní
                                          program nebo tématické sekce)',
        'terms.required'              => '<strong>Souhlas se zpracováním osobních údajů</strong> je povinný'
    );

    public static function validate($data) {
        return Validator::make($data, static::$rules, static::$messages);
    }

    public static function validateUpdate($data) {
        return Validator::make($data, static::$rulesUpdate, static::$messages);
    }

}
