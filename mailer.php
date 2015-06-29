<?php session_start();
if(isset($_POST['Submit'])) {
$youremail = 'hra@fdnet.com.br,rogerio_tomazela@hotmail.com,katiatda@gmail.com,carminda_50@hotmail.com';
$fromsubject = 'Assunto: '.$_POST['subject'];
$fname = $_POST['fname'];
$mail = $_POST['mail'];
$phone = $_POST['phone']; 
$subject = 'Contato do site amaralassessoriacontabil.com.br'; 
$message = $_POST['message']; 
  $to = $youremail; 
  $mailsubject = 'Masage recived from'.$fromsubject.' Contact Page';
  $body = $fromsubject.'
Nome: '.$fname.'
Telefone: '.$phone.'
E-mail: '.$mail.'
Assunto: '.$subject.'
Mensagem: 
'.$message.'
'; 
print '<script type="text/javascript">';
print 'window.parent.alert("Obrigado pelo seu contato '. $_POST['fname'].'. Retornaremos seu e-mail o mais rápido possivel.")';
print '</script>'; 
mail($to, $subject, $body);
}else{ 
print '<script type="text/javascript">';
print 'alert("Alguma coisa deu errado!")';
print '</script>'; 
}
?> 
