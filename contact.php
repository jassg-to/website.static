<?
$envio = ((isset($_REQUEST['envio'])) ? $_REQUEST['envio'] : '');
require_once('includes/topo.php');
?>

<section id="banner-contact">
  <div class="background-banner-contact">
    <div class="text-banner-telas">
      <?= $textos['contact-us_contact'] ?>
    </div>
  </div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.9395421633226!2d-79.42971708414451!3d43.64942617912138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34566fdb774b%3A0x70e0d9eda83fabf6!2sJoanna%20de%20%C3%82ngelis%20Spiritist%20Study%20Group!5e0!3m2!1spt-BR!2sbr!4v1632479829360!5m2!1spt-BR!2sbr" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<section id="contato" class="">
  <div class="background-contato" style="margin-top: -6px;">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
          <div class="contato">
            <div class="col-md-12 text-center title-contato">
              <?= $textos['contact-us_contact'] ?>
            </div>
            <form id="form_recaptcha" class="contato-form" method="POST" action="email-send.php">
              <div class="row">
                <div class="col-md-3 text-right form-mobile-text">
                  <label class="label-form" for="nome"><?= $textos['form_name'] ?><span class="asterisk">*</span></label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="nome" class="input-form" placeholder="<?= $textos['form_name_place'] ?>" required>
                </div>
              </div>
              <div class="row">
                <div class="hidden-md hidden-lg"></div>
                <div class="col-md-3 text-right form-mobile-text align-mob-left">
                  <label class="label-form" for="email">Email<span class="asterisk">*</span></label>
                </div>
                <div class="col-md-9">
                  <input type="email" name="email" class="input-form" placeholder="Email…" required>
                </div>
              </div>
              <div class="row ai_center form-mobile-direction">
                <div class="hidden-md hidden-lg"></div>
                <div class="col-md-3 text-right form-mobile-text align-mob-left mt30mob">
                  <label class="label-form" for="telefone"><?= $textos['form_phone'] ?></label>
                </div>
                <div class="col-md-9">
                  <input type="text" name="telefone" class="input-form phone_us" placeholder="<?= $textos['form_phone_place'] ?>">
                </div>
              </div>
              <div class="row  ai_center form-mobile-direction message">
                <div class="hidden-md hidden-lg"></div>
                <div class="col-md-3 text-right form-mobile-text align-mob-left mt30mob">
                  <label class="label-form" for="mensagem"><?= $textos['form_message'] ?></label>
                </div>
                <div class="col-md-9">
                  <textarea rows="5" id="comment" name="comment" class="form-control input_default" placeholder="<?= $textos['form_message_place'] ?>"></textarea>
                </div>
              </div>
              <div class="col-md-offset-3 col-md-9 text-left mt5">
                <span class="asterisk">*</span><span class="observations"><?= $textos['form_campos'] ?></span>
              </div>
              <div class="g-recaptcha" data-sitekey="6LfKXYYdAAAAAGTH83c8jyfpWT8vnPT-C-Xvf747" data-callback="submitForm" data-size="invisible">
              </div>
              <div class="row mt70 btn-mobile-fix">
                <div class="hidden-md hidden-lg"></div>
                <div class="col-md-12 text-center">
                  <input type="hidden" name="enviar_form" />
                  <button type="button" onClick="executeCaptcha()" class="btn-form"><?= $textos['form_send'] ?></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="content-canada">
    <div class="container-group">
      <div class="row">
        <div class="col-md-12 text-center">
          <i class="lab la-canadian-maple-leaf" style="font-size: 36px"></i>
          <div class="title-canada" style="font-size: 26px"><?= $textos['form_1'] ?></div>
        </div>
      </div>
      <div class="row mt30 mb10">
        <div class="col-md-12 text-left">
          <div style="font-family: 'NexaBold'; font-size: 24px;"><?= $textos['form_2'] ?></div>
        </div>
      </div>
      <div class="group">
        <div class="group-wrapper">
          <div><?= $textos['form_3'] ?></div>
          <div><?= $textos['form_17'] ?></div>
          <div><?= $textos['form_18'] ?></div>
          <div class="icons-form">
            <a class="mt10" href=" https://www.facebook.com/jassgtoronto"><?= $textos['form_19'] ?></a>
          </div>
          <div class="icons-instagram"> 
            <a class="mt10" href="https://www.instagram.com/joannadeangelisca/" target="_blank" rel="noreferrer noopener"><?= $textos['text_11_activities'] ?></a>
          </div>
          <div class="link-form">
            <a href="https://joannadeangelis.ca/" target="_blank" rel="noreferrer noopener"><?= $textos['form_20'] ?></a>
          </div>
          <div class="link-form">
            <a href="mailto:info@joannadeangelis.ca" target="_blank" rel="noreferrer noopener"><?= $textos['form_21'] ?></a></a>
          </div>
        </div>

        <div class="group-wrapper">
          <div><?= $textos['form_4'] ?></div>
          <div><?= $textos['form_22'] ?></div>
          <div class="link-form">
            <a href="restontheway.ca" target="_blank" rel="noreferrer noopener"><?= $textos['form_23'] ?></a>
          </div>
        </div>

        <div class="group-wrapper">
          <div><?= $textos['form_6'] ?></div>
          <div><?= $textos['form_26'] ?></div>
          <div><?= $textos['form_27'] ?></div>
          <div class="link-form">
            <a href="https://www.torontospiritistsociety.org/" target="_blank" rel="noreferrer noopener"><?= $textos['form_28'] ?></a>
          </div>
          <div class="link-form">
            <a href="mailto:info@torontospiritistsociety.org" target="_blank" rel="noreferrer noopener"><?= $textos['form_29'] ?></a></a>
          </div>
        </div>
      </div>

      <div class="group">
        <div>
          <!-- <div class="row mt70 mb10">
            <div class="col-md-12 text-left">
              <div style="font-family: 'NexaBold'; font-size: 24px;"><?= $textos['form_39'] ?></div>
            </div>
          </div> -->
          <div class="group-wrapper">
            <div class="group-wrapper">
              <div><?= $textos['form_40'] ?></div>
              <div><?= $textos['form_41'] ?></div>
              <div class="icons-form">
                <a class="mt10" href="https://www.facebook.com/groups/777520699267605/"><?= $textos['form_42'] ?></a>
              </div>
            </div>
          </div>
        </div>

        <div>
          <!-- <div class="row mt70 mb10">
            <div class="col-md-12 text-left">
              <div style="font-family: 'NexaBold'; font-size: 24px;"><?= $textos['form_43'] ?></div>
            </div>
          </div> -->
          <div class="group-wrapper">
            <div class="group-wrapper-sx">
              <div><?= $textos['form_44'] ?></div>
              <div class="icons-form">
                <a class="mt10" href="https://www.facebook.com/homeofdulcesc/"><?= $textos['form_45'] ?></a>
              </div>
              <div class="link-form">
                <a class="mt10" href="https://homeofdulce.com/"><?= $textos['form_46'] ?></a>
              </div>
              <div class="link-form">
                <a class="mt10" href="mailto:info@homeofdulce.com"><?= $textos['form_47'] ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt70 mb10">
        <div class="col-md-12 text-left">
          <div style="font-family: 'NexaBold'; font-size: 24px;"><?= $textos['form_7'] ?></div>
        </div>
      </div>
      <div class="group">
        <div class="group-wrapper">
          <div><?= $textos['form_8'] ?></div>
          <div><?= $textos['form_30'] ?></div>
          <div class="link-form">
            <a href="https://www.cesf.ca/" target="_blank" rel="noreferrer noopener"><?= $textos['form_31'] ?></a>
          </div>
        </div>
        <div class="group-wrapper">
          <div><?= $textos['form_9'] ?></div>
          <div><?= $textos['form_32'] ?></div>
          <div><?= $textos['form_33'] ?></div>
          <div class="link-form">
            <a href="https://centroluzepaz.ca/" target="_blank" rel="noreferrer noopener"><?= $textos['form_34'] ?></a>
          </div>
          <div class="link-form">
            <a href="mailto:centroluzepaz@hotmail.com" target="_blank" rel="noreferrer noopener"><?= $textos['form_35'] ?></a></a>
          </div>
        </div>
        <div class="group-wrapper">
          <div><?= $textos['form_10'] ?></div>
          <div><?= $textos['form_36'] ?></div>
          <div class="link-form">
            <a href="https://www.centrespiritejac.org/" target="_blank" rel="noreferrer noopener"><?= $textos['form_37'] ?></a>
          </div>
        </div>
      </div>

      <div class="group">
        <div>
          <!-- <div class="row mt70 mb10">
            <div class="col-md-12 text-left">
              <div style="font-family: 'NexaBold'; font-size: 24px;"><?= $textos['form_48'] ?></div>
            </div>
          </div> -->
          <div class="row-quebec">
            <div class="group-wrapper">
              <div><?= $textos['form_49'] ?></div>
              <div class="link-form">
                <a href="http://www.ceakquebec.com"><?= $textos['form_50'] ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="content-world">
    <div class="container">
      <div class="row mb30">
        <div class="col-md-12 text-center">
          <i class="las la-globe" style="font-size: 36px"></i>
          <div class="title-world" style="font-size: 26px"><?= $textos['form_11'] ?>
          </div>
        </div>
      </div>
      <div class="contact-wrapper">
        <div class="group-society">

          <div class="group-wrapper">
            <div><?= $textos['form_12'] ?></div>
            <div>
              <a class="link" href="https://spiritistinstitute.org/" target="_blank" rel="noreferrer noopener"><?= $textos['form_14'] ?></a>
              <a class="link" href="mailto:spiritist@spiritist.org" target="_blank" rel="noreferrer noopener"><?= $textos['form_15'] ?></a>
            </div>
          </div>
          <div class="group-wrapper">
            <div><?= $textos['form_13'] ?></div>
            <div class="icons-society">
              <a class="mt10" href="https://www.facebook.com/canadianspiritistcouncil"><?= $textos['form_37'] ?></a>
            </div>
            <div>
              <a class="link" href="https://www.canadianspiritistcouncil.ca/" target="_blank" rel="noreferrer noopener"><?= $textos['form_16'] ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<script>
  function executeCaptcha() {
    for (const el of document.getElementById('form_recaptcha').querySelectorAll("[required]")) {
      if (!el.reportValidity()) {
        return;
      }
    }
    grecaptcha.execute();
  }

  function submitForm() {
    document.getElementById("form_recaptcha").submit();
  }
</script>
<?
require_once('includes/rodape.php');
?>