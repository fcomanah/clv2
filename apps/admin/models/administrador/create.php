<?
  require ('./includes/create-model.inc.php');

  redirect_invalid_user('user_admin');
  
  include ('./views/header.html');
    require ('./includes/left.inc.php');
      include ('./views/create-middle.html');
    require ('./includes/right.inc.php');
  include ('./views/footer.html');
  
?>
