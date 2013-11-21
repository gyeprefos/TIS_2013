</div><!-- .container-fluid -->  


 <!-- LOGIN MODAL -->
<div id="loginModal" class="modal lmodal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="loginModalLabel">Prihlasenie</h3>
  </div>
  <div class="modal-body">
    <form name="loginForm" method="post">
    <fieldset>
      <input id="loginUserName" name="loginUserName" type="text" placeholder="prihlasovacie meno"/><br/>
      <input type="password" name="loginUserPass" id="loginUserPass" placeholder="heslo"/>
    </fieldset>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Zavriet</button>
    <button class="btn btn-primary" name="loginSubmit">Prihlasit</button>
  </div>
</div>

<!-- REGISTRATION MODAL -->
<div id="regModal" class="modal rmodal hide fade" tabindex="-1" role="dialog" aria-labelledby="regModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="loginModalLabel">Registracia</h3>
  </div>
  <div class="modal-body">
    <form name="regForm" method="post">
    <fieldset>
      <input id="regUserName" name="regUserName" type="text" placeholder="prihlasovacie meno"/><br/>
      <input type="password" name="regUserPass" id="regUserPass" placeholder="heslo"/>
    </fieldset>
    </form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Zavriet</button>
    <button class="btn btn-primary" name="regSubmit">Registrovat</button>
  </div>
</div>

<?php var_dump($_POST); ?>

<script type="text/javascript">
  $(function(){
    
    $("button[name=loginSubmit]").on("click", function(){
      $("form[name=loginForm]").submit();
    });

    $("form[name=loginForm] input").on("focus blur", function(event){

      if (event.type == "focus") {
        $(document).keypress(function(e) {
          if(e.which == 13) {
              $("form[name=loginForm]").submit();
          }
        });
      };

      if (event.type == "blur") {
        $(document).off("keypress");
      };

    });

  });

  $(function(){
    
    $("button[name=regSubmit]").on("click", function(){
      $("form[name=regForm]").submit();
    });

    $("form[name=regForm] input").on("focus blur", function(event){

      if (event.type == "focus") {
        $(document).keypress(function(e) {
          if(e.which == 13) { 
              $("form[name=regForm]").submit();
          }
        });
      };

      if (event.type == "blur") {
        $(document).off("keypress");
      };

    });

  });
</script>

</body>

</html>