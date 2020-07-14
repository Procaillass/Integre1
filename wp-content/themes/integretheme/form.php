<form class="form" action="index.php">

  <div class="form div">


    <div class="tab-content div">
      <div id="signup">
        <h1 class="h1">login</h1>

        <form class="form" action="/" method="post">

          <div class="top-row div">
            <div class="field-wrap div">
              <label class="label">
                Nom<span class="req span">*</span>
              </label>
              <input class="input" type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap div">
              <label class="label">
                Prénom<span class="req label">*</span>
              </label>
              <input class="input" type="text" required autocomplete="off" />
            </div>
          </div>

          <div class="field-wrap div">
            <label class="label">
              E-mail<span class="req span">*</span>
            </label>
            <input class="input" type="email" required autocomplete="off" />
          </div>

          <div class="field-wrap div">
            <label class="label">
              Mot de passe<span class="req">*</span>
            </label>
            <input class="input" type="password" required autocomplete="off" />
          </div>

          <button class="button" type="submit" class="button button-block" />Envoyer</button>

        </form>

      </div>