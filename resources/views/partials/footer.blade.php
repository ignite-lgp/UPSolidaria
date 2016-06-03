 </body>
    
    <footer id="footer">
        <section class="container" id="container-footer">
            <span class="hidden-xs">Copyright 2016 &copy Universidade do Porto | Termos e Condições | Acessibilidade</span>
            <span class="hidden-xs">Última atualização: 2016-04-03 Página gerada em: 2016-04-03</span>
            <span class="visible-xs">Copyright 2016 &copy UP Solidária</span>
        </section>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../resources/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../public/src/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../public/src/js/ie10-viewport-bug-workaround.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

     <script type="text/javascript">       
     $(function() {
     $("#auto").autocomplete({
            minLength: 2,
          source: './search/autocomplete',
          select: function(event, ui) {
                $("#auto").val(ui.item.value);
          }});
     });
 </script>
  </body>
</html>
