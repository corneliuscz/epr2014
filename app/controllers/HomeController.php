<?php

class HomeController extends BaseController {

/*
 * HomeController@home
 * Nasosání dat pro zobrazení na domovské stránce.
 */

  public function home()
  {
    $attendeesCount['vsichni'] = Attendee::all()->count();
    $attendeesCount['hlavni'] = Attendee::where('hlavni_sal', 'LIKE', 'hlavni-sal')->count();
    $attendeesCount['s1'] = Attendee::where('seminar', 'LIKE', 's1')->count();
    $attendeesCount['s2'] = Attendee::where('seminar', 'LIKE', 's2')->count();
    $attendeesCount['s3'] = Attendee::where('seminar', 'LIKE', 's3')->count();
    $opts = Option::all();
    $opts = json_decode($opts, true);

    $now                = new DateTime('now');
    $zacatek_registrace = DateTime::createFromFormat('Y-m-d H:i:s', $opts[0]['value']);
    $konec_registrace   = DateTime::createFromFormat('Y-m-d H:i:s', $opts[1]['value']);

    $z_registrace = $opts[0]['value'];
    $k_registrace = $opts[1]['value'];

    if (($now > $zacatek_registrace) && ($now < $konec_registrace)) {
      $regForm = TRUE;
    } else {
      $regForm = FALSE;
    }

    $regDate = "";

    if ($now < $zacatek_registrace) {
      $regDate = "bude spuštěna za <div id='countdown'></div>";
    }
    if ($now > $konec_registrace) {
      $regDate = "<strong>byla ukončena</strong>";
    }

    $options['kapacita']    = $opts[2]['value'];
    $options['kapacita_s1'] = $opts[3]['value'];
    $options['kapacita_s2'] = $opts[4]['value'];
    $options['kapacita_s3'] = $opts[5]['value'];

    $volne['hlavni']  = $options['kapacita'] - $attendeesCount['hlavni'];
    $volne['s1']      = $options['kapacita_s1'] - $attendeesCount['s1'];
    $volne['s2']      = $options['kapacita_s2'] - $attendeesCount['s2'];
    $volne['s3']      = $options['kapacita_s3'] - $attendeesCount['s3'];

    return View::make('home')->with('attendeesCount', $attendeesCount)
      ->with('volne', $volne)
      ->with('options', $options)
      ->with('regForm', $regForm)
      ->with('regDate', $regDate)
      ->with('zacatek_registrace', $z_registrace)
      ->with('konec_registrace', $k_registrace);
  }
}
