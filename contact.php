<script type="text/javascript">
//email form validation

function everif(str) {

    var at="@"
    var punct="."
    var lat=str.indexOf(at)
    var lstr=str.length
    var lpunct=str.indexOf(punct)
    if (str.indexOf(at)==-1){
       alert("Valid email must be entered")
       return false
    }

    if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
       alert("Valid email must be entered")
       return false
    }

    if (str.indexOf(punct)==-1 || str.indexOf(punct)==0 || str.indexOf(punct)==lstr){
        alert("Valid email must be entered")
        return false
    }

     if (str.indexOf(at,(lat+1))!=-1){
        alert("Valid email must be entered")
        return false
     }

     if (str.substring(lat-1,lat)==punct || str.substring(lat+1,lat+2)==punct){
        alert("Valid email must be entered")
        return false
     }

     if (str.indexOf(punct,(lat+2))==-1){
        alert("Valid email must be entered")
        return false
     }
    
     if (str.indexOf(" ")!=-1){
        alert("Valid email must be entered")
        return false
     }

     return true          
  }

function evalid(){
  var emailID=document.contact_form.mail
  
  if (everif(emailID.value)==false){
    emailID.focus()
    return false
  }
  
//empty field validation
  
  var fname=document.contact_form.fname
  if ((fname.value==null)||(fname.value=="")){
        alert("Fields marqued with * must be entered")
        fname.focus()
        return false
        }
  
  var subject=document.contact_form.subject 
  if ((subject.value==null)||(subject.value=="")){
        alert("Fields marqued with * must be entered")
        subject.focus()
        return false
        }
 
  var message=document.contact_form.message 
  if ((message.value==null)||(message.value=="")){
        alert("Fields marqued with * must be entered")
        message.focus()
        return false
        }
      
  return true
 }
 </script>
<form name="contact_form" method="post" action="mailer.php" onSubmit="return evalid()" target="invisibleframe">
<table border="0"><tr>
    <td>First Name *</td>
    <td><input name="fname" type="text" size="30" /></td>
  </tr><tr>
    <td>Your E-mail *</td>
    <td><input type="text" name="mail" size="30" /></td>
  </tr><tr>
    <td>Phone</td>
    <td><input name="phone" type="text" size="30" onkeypress="return numere(event)" onkeyup="return limitarelungime(this, 10)"  /></td>
  </tr><tr>
    <td>Subject *</td>
    <td><input name="subject" type="text" size="30" /></td>
  </tr><tr>
    <td>Message *</td>
    <td><textarea name="message" onkeyup="return limitarelungime(this, 255)"  cols="35" rows="5"></textarea></td>
  </tr>
  <tr>
    <td><input type="reset" name="reset" value="Reset"/></td>
    <td align="right"><input type="submit" name="Submit" value="Submit"></td>
  </tr>
</table>
</form>
<iframe name="invisibleframe" src="" width="331" height="331"></iframe>
