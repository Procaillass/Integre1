
<?php get_header();?>
<form class="form" action="page-entree.php">
  <div class="form div">
    <div class="tab-content div">
      <div id="signup">
        <h1 class="h1">login</h1>
        <form class="form" action="page-entree.php" method="post">
          <div class="top-row div">
            <div class="field-wrap div">
              <label class="label" for="nom">
                Nom<span class="req span">*</span>
              </label>
              <input name="nom" class="input" type="text" required autocomplete="off" />
            </div>
            <div class="field-wrap div">
              <label class="label" for="prenom">
               Prénom<span class="req span">*</span>
              </label>
              <input name="prenom" class="input" type="text" required autocomplete="off" />
            </div>
          </div>
          <div class="field-wrap div">
            <label class="label" for="email">
              E-mail<span class="req span">*</span>
            </label>
            <input name="email" class="input" type="email" required autocomplete="off" />
          </div>

          <div class="field-wrap div">
            <label class="label" for="password">
              Mot de passe<span class="req">*</span>
            </label>
            <input name="password" class="input" type="password" required autocomplete="off" />
          </div>
          <button class="button" name="submit" type="submit" class="button button-block" /><a href="page-entree.php">Envoyer</a></button>
        </form>
      </div>
    </div>
  </div>
</form>
<?php get_footer();?>