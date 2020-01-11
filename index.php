<?php
if (isset($_GET['username']) && isset($_GET['password']))
{
     if ($_GET['username'] == 'admin' && $_GET['password'] == '1234')
     {
         session_start();
         $_SESSIOn['username'] = $_GET['username'];
         $_SESSIOn['password'] = $_GET['password'];
     }
     else
     {
        header('location: login.php?error=1');
        exit;
     }
}
else
{
    header('location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/f9aa2f6192.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <div class="menu">

      <ul id="mobile_menu">

        <li><img src="img/menu.png" alt="menu" style="max-width: 35px;">
          <ul>
            <li><a href="#"><a href="#"><i class="fas fa-envelope"></i>&nbsp;Inbox <span style="color: orange;">(5)</span></a></li>
            <li><a href="#"><i class="fas fa-paper-plane"></i>&nbsp;Sent</a></li>
            <li><a href="#"><i class="fas fa-mail-bulk"></i>&nbsp;Spam <span style="color: orange;">(1)</span></a></li>
            <li><a href="#"><i class="fas fa-trash-alt"></i>&nbsp;Trash</a></li>
            <li><a href="#"> <i class="fas fa-drafting-compass"></i>&nbsp;Draft</a></li>



          </ul>
    </div>
    <div class="logo"><img src="img/logo.png" alt="logo">
      <h3>AbdelMail</h3>
    </div>
    <div class="search">
      <input type="text" placeholder=" Search in messages.." name="userinput">

    </div>
    <div class="loading">
      <img src="img/loading_icon.png" alt="loading" style="width: 0px;">
    </div>
    <div class="options_photo">
      <div class="options">
          <a href="#"><i class="far fa-comments"></i>&nbsp;Chat</a>
          <a href="#"><i class="fas fa-blog"></i>&nbsp;Blog</a>
          <a href="#"><i class="fas fa-igloo"></i>&nbsp;Home</a>

      </div>
      <div class="photo"><img src="img/profil" alt="profil">
      </div>
    </div>
  </header>
  <main>
    <aside>
      <nav>
        <div class="my_emails">
          <h3>My Emails</h3>
          <a href="#"> <i class="fas fa-envelope"></i>&nbsp;Inbox <span style="color: orange;">(5)</span></a>
          <a href="#"><i class="fas fa-paper-plane"></i>&nbsp; Sent</a>

          <a href="#"> <i class="fas fa-mail-bulk"></i>&nbsp;Spam <span style="color: orange;">(1)</span></a>

          <a href="#">  <i class="fas fa-trash-alt"></i>&nbsp;Trash</a>

          <a href="#">  <i class="fas fa-drafting-compass"></i>&nbsp;Draft</a>


        </div>
        <div class="folders">
          <h3>Folders</h3>
          <a href="#"><i class="fas fa-folder"></i>&nbsp;Holidays</a>
          <a href="#"><i class="fas fa-folder"></i>&nbsp; Social networks</a>

          <a href="#"><i class="fas fa-folder"></i>&nbsp; My photos</a>
       
          <a href="#" style="font-size: 0.9em"> Create new folder &nbsp;<i class="fas fa-folder-plus"></i></a>


        </div>
      </nav>
      <div class="settings">
        <img src="img/settings.png" alt="settings">
        <a href="#">
          <h3>Settings</h3>
        </a>

      </div>



    </aside>
    <article>


      <div class="line">
        <div class="mini"><img src="img/c.png" alt="c">chat@linagora.com</div>
        <div class="email_subject"><b>New notifications for decembre, 9</b></div>
        <div class="email_content">You have 4 notifications direc message from ....</div>
        <div class="hour">O9:21</div>
      </div>

      <div class="line">
        <div class="mini"><img src="img/m.png" alt="m">gitlab@linagora.com</div>
        <div class="email_subject"><b>SSH Key was added to your account</b></div>
        <div class="email_content">Hi KHELOUAT Abdelmalek! A new public key was ad..</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/k.png" alt="k">contact@pole-emploi.com</div>
        <div class="email_subject"><b>Pôle emploi, le mag qui vous simplifie le travail n95</b></div>
        <div class="email_content">Décembre 2019 - Accèder à votre espace personnel Pôl...</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/j.png" alt="j">bank@orange.com</div>
        <div class="email_subject">Orange Bank, C'est maintenant</div>
        <div class="email_content">12O€ Offerts + 0€ de frais de tenus de compte + CB Gratuite, V..</div>
        <div class="hour">O8:56</div>
      </div>


      <div class="line">
        <div class="mini"><img src="img/c.png" alt="c">Font awsome</div>
        <div class="email_subject">Confirm You Font Awsome Account Adress</div>
        <div class="email_content">Hey There! You're so close to using..</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/b.png" alt="b">gitlab@linagora.com</div>
        <div class="email_subject">Password Changed</div>
        <div class="email_content">Hello, KHELOUAT Abdelmalek, the password of your gitlab account... </div>
        <div class="hour">O9:08</div>
      </div>

      <div class="line">
        <div class="mini"><img src="img/a.png" alt="a">email@srp.com</div>
        <div class="email_subject"> <b>les meilleurs ventes du moments</b></div>
        <div class="email_content">AMIBOT, BABYLISS, LEE COOPER et -70% sur les 11 meilleurs marques d....</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/d.png" alt="d">nikita@e.linkedin.com</div>
        <div class="email_subject">Abdelmalek, 1er mois gratuit</div>
        <div class="email_content">Développez vos compétences avec des cours s </div>
        <div class="hour">O9:08</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/o.png" alt="o">oha@linagora.com</div>
        <div class="email_subject">This week only: Ride and give back with no kid hungry</div>
        <div class="email_content">the holiday party with uber eats lorem lorem .... </div>
        <div class="hour">O8:56</div>
      </div>

      <div class="line">
        <div class="mini"><img src="img/e.png" alt="e">chat@linagora.com</div>
        <div class="email_subject"><b>New notifications for decembre, 9</b></div>
        <div class="email_content">You have 4 notifications direc message from ....</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/x.png" alt="x">oha@linagora.com</div>
        <div class="email_subject">Re: Stephane made mistake in (#964)</div>
        <div class="email_content">Stephane causes a conflict in git ... </div>
        <div class="hour">O9:08</div>
      </div>

      <div class="line">
        <div class="mini"><img src="img/f.png" alt="f">chat@linagora.com</div>
        <div class="email_subject">New notifications for decembre, 9</div>
        <div class="email_content">You have 4 notifications direc message from ....</div>
        <div class="hour">O9:21</div>
      </div>

      <div class="line">
        <div class="mini"><img src="img/q.png" alt="q">gitlab@linagora.com</div>
        <div class="email_subject">SSH Key was added to your account</div>
        <div class="email_content">Hi KHELOUAT Abdelmalek! A new public key was ad..</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/k.png" alt="k">contact@pole-emploi.com</div>
        <div class="email_subject">Pôle emploi, le mag qui vous simplifie le travail n95</div>
        <div class="email_content">Décembre 2019 - Accèder à votre espace personnel Pôl...</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/j.png" alt="j">bank@orange.com</div>
        <div class="email_subject">Orange Bank, C'est maintenant</div>
        <div class="email_content">12O€ Offerts + 0€ de frais de tenus de compte + CB Gratuite, V..</div>
        <div class="hour">O8:56</div>
      </div>


      <div class="line">
        <div class="mini"><img src="img/c.png" alt="c">Font awsome</div>
        <div class="email_subject">Confirm You Font Awsome Account Adress</div>
        <div class="email_content">Hey There! You're so close to using..</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/b.png" alt="b">gitlab@linagora.com</div>
        <div class="email_subject">Password Changed</div>
        <div class="email_content">Hello, KHELOUAT Abdelmalek, the password of your gitlab account... </div>
        <div class="hour">O9:08</div>
      </div>

      <div class="line">
        <div class="mini"><img src="img/m.png" alt="m">email@srp.com</div>
        <div class="email_subject"> les meilleurs ventes du moments</div>
        <div class="email_content">AMIBOT, BABYLISS, LEE COOPER et -70% sur les 11 meilleurs marques d....</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/d.png" alt="d">nikita@e.linkedin.com</div>
        <div class="email_subject">Abdelmalek, 1er mois gratuit</div>
        <div class="email_content">Développez vos compétences avec des cours s </div>
        <div class="hour">O9:08</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/o.png" alt="o">oha@linagora.com</div>
        <div class="email_subject">This week only: Ride and give back with no kid hungry</div>
        <div class="email_content">the holiday party with uber eats lorem lorem .... </div>
        <div class="hour">O8:56</div>
      </div>

      <div class="line">
        <div class="mini"><img src="img/e.png" alt="e">chat@linagora.com</div>
        <div class="email_subject">New notifications for decembre, 9</div>
        <div class="email_content">You have 4 notifications direc message from ....</div>
        <div class="hour">O9:21</div>
      </div>

      <div class="line">
        <div class="mini"><img src="img/c.png" alt="c">chat@linagora.com</div>
        <div class="email_subject">New notifications for decembre, 9</div>
        <div class="email_content">You have 4 notifications direc message from ....</div>
        <div class="hour">O9:21</div>
      </div>

      <div class="line">
        <div class="mini"><img src="img/m.png" alt="m">gitlab@linagora.com</div>
        <div class="email_subject">SSH Key was added to your account</div>
        <div class="email_content">Hi KHELOUAT Abdelmalek! A new public key was ad..</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/k.png" alt="k">contact@pole-emploi.com</div>
        <div class="email_subject">Pôle emploi, le mag qui vous simplifie le travail n95</div>
        <div class="email_content">Décembre 2019 - Accèder à votre espace personnel Pôl...</div>
        <div class="hour">O9:21</div>
      </div>
      <div class="line">
        <div class="mini"><img src="img/j.png" alt="j">bank@orange.com</div>
        <div class="email_subject">Orange Bank, C'est maintenant</div>
        <div class="email_content">12O€ Offerts + 0€ de frais de tenus de compte + CB Gratuite, V..</div>
        <div class="hour">O8:56</div>
      </div>









    </article>


  </main>

  <div class="loading">
    <img src="img/engrenage.png" alt="loading">



  </div>
  <div class="loading_reverse">
    <img src="img/engrenage.png" alt="loading_reverse">
  </div>

  <a href="new_mail_page.html"><div class="new_message_icon">
      <i class="fas fa-pen-square"></i>


    <div class="new_message_hover">
      clic here to write a new mail ! 
      
    </div>
    <div class="new_mail">
        <div class="new_mail_title"> 
            <p>New message</p>
  
          </div>
          <div class="new_mail_content">
              <div class="mail_title">
                 <input type="text" placeholder="Title..." name="mail_title" style="width: 85%;">
              </div>
              <div class="mail_recipient">
                 <input type="text" placeholder="To..." name="mail_recipient" style="width: 85%;">
              </div>
              <div class="mail_textarea">
                 <textarea name="usertextarea" rows="20" cols="50">
                     
                     </textarea>
                    </br> 
                     <input type="checkbox" id="options" name="option" style="color: black;">
                    </br>
                     <input type="submit" value="Send" style="background-color: #3cb1ff; color: white; ">
              </div>
              <a href="new_mail_page.html"><div class="new_mail_bottom" url="new_mail_page.html">
                
  
  
              </div>
            </a>
  
             
  
          </div>
  
    </div>
  </div></a>




</body>






</html>