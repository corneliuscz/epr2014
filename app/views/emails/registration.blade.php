<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <style>
      body { font-family: sans-serif; }
    </style>
  </head>
  <body>
    Dobrý den,<br />
    byl(a) jste úspěšně registrován(a) na konferenci Evropské příležitosti regionu 2014.<br /><br />
    Registroval(a) jste se na tyto části:
    <ul>
    @if ($hlavni_sal != '-')
      <li>Hlavní program</li>
    @endif
    @if ($seminar === 's1')
      <li>Sekce pro nové starosty</li>
    @elseif ($seminar === 's2')
      <li>Sekce pro školy</li>
    @elseif ($seminar === 's3')
      <li>Klub fanoušků integrovaných přístupů</li>
    @endif
    </ul>
    <br />
    Těšíme se na Vás 27. listopadu 2014 v aule Vysoké školy báňské v Ostravě.<br />
    <br />
    S pozdravem,<br />
    Organizační tým konference<br /><br /><br />
    P.S. Pokud se nebudete moci konference zúčastnit, {{ link_to('odhlasit/'.$email.'/'.$cancel_hash, 'odhlaste se prosím') }}.
  </body>
</html>
