<?php 
    $current_user = wp_get_current_user();
    if ( 0 == $current_user->ID ) {
?>
<!-- Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117138491-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117138491-2');
</script>

<?php } 
?>

