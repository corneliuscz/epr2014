$(function(){
  /*
   * Převedeme odkazy na smazání účastníka konference na formuláře aby se poslalo DESTROY
   */
  $('[data-method]').append(function(){
        return "\n"+
        "<form action='"+$(this).attr('href')+"' class='"+$(this).attr('data-method')+"-form' method='POST' style='display:none'>\n"+
        "   <input type='hidden' name='_method' value='"+$(this).attr('data-method')+"'>\n"+
        "</form>\n"
  })
  .removeAttr('href')
  .attr('style','cursor:pointer;')
  .attr('onclick','$(this).find("form").submit();');

  /*
   * Potvrzení vymazání účastníka
   */
  $(document).on('submit', '.delete-form', function(){
    return confirm('Opravdu chcete odstranit účastníka?');
  });

  /*
  * Aktivujeme tlačítko pro vypnutí alertu
  */
  $(".alert").alert();
});
