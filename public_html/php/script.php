<script src="<?php echo URL . "javascript/jquery.min.js" ?>"></script>
<script src="<?php echo URL . "javascript/rev-slider.min.js" ?>"></script>
<script src="<?php echo URL . "javascript/owl.carousel.min.js" ?>"></script>
<script src="<?php echo URL . "javascript/jquery-countTo.min.js" ?>"></script>
<script src="<?php echo URL . "javascript/jquery-waypoints.min.js" ?>"></script>
<script src="<?php echo URL . "javascript/bootstrap.min.js" ?>"></script>
<script src="<?php echo URL . "javascript/images-loaded.min2.js" ?>"></script>  
<script src="<?php echo URL . "javascript/jquery.isotope.min.js" ?>"></script> 
<script src="<?php echo URL . "javascript/jquery-fancybox.min.js" ?>"></script> 
<script src="<?php echo URL . "javascript/jquery.easing.min.js" ?>"></script>
<script src="<?php echo URL . "javascript/main.min.js" ?>"></script>
<script src="<?php echo URL . "rev-slider/js/jquery.themepunch.tools.min.js" ?>"></script>
<script src="<?php echo URL . "rev-slider/js/jquery.themepunch.revolution.min.js" ?>"></script>
<script src="<?php echo URL . "javascript/rev-slider.min.js" ?>"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178186728-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178186728-1');
</script>

<?php /* WhatsHelp */ ?>
<script type="text/javascript">
(function () {
var options = {
whatsapp: "<?php echo "55" . str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->whatsapp) ?>", // Número do WhatsApp
call_to_action: "Entre em contato conosco.", // Chamada para ação
position: "left", // Posição do widget na página 'right' ou 'left'
};
var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>