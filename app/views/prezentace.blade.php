@extends('layouts.default')

@section('content')
<div class="wrapper-white-top">
  <div class="container">
    <section id="prezentuji" class="prezentuji">

      <div class="row">
        <div class="col-md-12">
          <h2>Hosté</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <img src="/assets/img/vicenova.png" class="img-responsive" alt="Milena Vicenová Foto">
          <div class="ucinkujici">Milena Vicenová <em>Ministerstvo pro místní rozvoj</em></div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <img src="/assets/img/jedlicka.png" class="img-responsive" alt="Jan Jedlička Foto">
          <div class="ucinkujici">Jan Jedlička <em>Česká spořitelna, a.s.</em></div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <img src="/assets/img/sikora.png" class="img-responsive" alt="Stefania Koczar-Sikora Foto">
          <div class="ucinkujici">Stefania Koczar-Sikora <em>Slezské vojvodství, Polsko</em></div>
        </div>
        <div class="clearfix visible-md-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <img src="/assets/img/mazal.png" class="img-responsive" alt="Rostislav Mazal Foto">
          <div class="ucinkujici">Rostislav Mazal <em>Ministerstvo pro místní rozvoj</em></div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="clearfix visible-lg-block"></div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <img src="/assets/img/dostalovak.png" class="img-responsive" alt="Kateřina Dostálová Foto">
          <div class="ucinkujici">Kateřina Dostálová <em>Úřad Regionální rady Moravskoslezsko</em></div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <img src="/assets/img/palicka.png" class="img-responsive" alt="Václav Palička Foto">
          <div class="ucinkujici">Václav Palička <em>Statutární město Ostrava</em></div>
        </div>
      </div>

    </section>
  </div>
</div>

<div class="wrapper-blue">
  <div class="container">

    <section id="program" class="program">

      <div class="row">
        <div class="col-md-12">
          <h2>Hlavní program</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">8:00 - 9:00</div>
            <div class="col-sm-8 program--prednaska">Registrace (Foyer)</div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">9:00 - 9:10 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Přivítání hostů konference <em>Ivo Vondrák, Vysoká škola báňská - Technická univerzita Ostrava</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">9:10 - 9:30 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Výsledky a budoucnost ROP Moravskoslezsko <em>Kateřina Dostálová, Úřad Regionální rady Moravskoslezsko</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">9:30 - 10:00 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Implementační struktura pro léta 2014-20 <em>Daniela Nohejlová, Ministerstvo pro místní rozvoj</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:00 - 10:30 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Představení Integrovaného regionálního operačního programu (IROP) <em>Rostislav Mazal,  Ministerstvo pro místní rozvoj</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:30 - 11:00 </div>
            <div class="col-sm-8 program--prednaska">Přestávka s občerstvením (Foyer)</div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">11:00 - 11:10 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Výlet do paralelních světů Evropské unie <em>Kateřina Dostálová, Daniel Konczyna, Úřad Regionální rady Moravskoslezsko</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">11:10 - 13:00 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Panelová diskuze: Smysluplné investice v&nbsp;období 2014-20 a&nbsp;jiná hvězdná témata <em>Milena Vicenová, Jan Jedlička, Stefania Koczar-Sikora, Rostislav Mazal, David Sventek, Václav Palička</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">13:00 - 14:00 </div>
            <div class="col-sm-8 program--prednaska">Oběd (Foyer)</div>
          </div>
          <div class="row program--pdf">
            <div class="col-md-12">
              <img src="/assets/img/ikona-pdf.png" alt="PDF s programem"> <a href="/assets/program.pdf" title="PDF s programem konference pro tisk" class="btn btn-primary btn-lg">PDF s programem</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h2>Odpolední program</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">14:00 - 15:30 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Sekce nejen pro nové starosty <em>Hana Gavlasová (Úřad Regionální rady Moravskoslezsko), <br>Josef Jalůvka (Město Kopřivnice)</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">14:00 - 15:30 <span>Sál 1</span></div>
            <div class="col-sm-8 program--prednaska">Sekce pro školy <em>Kateřina Hlostová (Úřad Regionální rady Moravskoslezsko), <br>Jan Meca (Střední průmyslová škola a Obchodní akademie, Bruntál)</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">14:00 - 15:30 <span>Sál 2</span></div>
            <div class="col-sm-8 program--prednaska">Problematika Integrovaných teritoriálních investic pro poradenské agentury <em>Daniel Konczyna (Úřad Regionální rady Moravskoslezsko)</em></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h2>Doprovodné akce</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:00 - 11:00, 13:00 - 14:30 <span>Foyer</span></div>
            <div class="col-sm-8 program--prednaska">Osobní konzultace na infostáncích se zástupci operačních programů</div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:00 - 14:30 <span>Vchod do Auly</span></div>
            <div class="col-sm-8 program--prednaska">Pozorování Slunce s Planetáriem Ostrava <em>(v případě příznivého počasí)</em></div>
          </div>
        </div>
      </div>

    </section>

  </div>
</div>

<div class="wrapper-white">
  <div class="container">

    <section id="prezentace" class="prezentace">

      <div class="row">
        <div class="col-md-12">
          <h2>Prezentace</h2>
          <h3>Hlavní program</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <iframe src="//www.slideshare.net/slideshow/embed_code/42205957" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
        </div>
        <div class="col-md-4">
          <iframe src="//www.slideshare.net/slideshow/embed_code/42205904" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
        </div>
        <div class="col-md-4">
          <iframe src="//www.slideshare.net/slideshow/embed_code/42205954" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3>Panelová diskuze</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLPxlp3y3B7alaX06fr7ojxKcE4qeK_b6u" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3>Sekce nejen pro nové starosty </h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 col-md-offset-1">
          <iframe src="//www.slideshare.net/slideshow/embed_code/42205911" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
        </div>
        <div class="col-md-5">
          <iframe src="//www.slideshare.net/slideshow/embed_code/42205915" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3>Sekce pro školy</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 col-md-offset-1">
          <iframe src="//www.slideshare.net/slideshow/embed_code/42205945" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
        </div>
        <div class="col-md-5">
          <iframe src="//www.slideshare.net/slideshow/embed_code/42205939" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3>Problematika Integrovaných teritoriálních investic pro poradenské agentury </h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 col-md-offset-1">
          <iframe src="//www.slideshare.net/slideshow/embed_code/42205900" width="476" height="400" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
        </div>
      </div>

    </section>

  </div>
</div>
@stop

@section('countdownscript')
<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("#prezentace").fitVids();
  });
</script>
@stop
