<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Anthony Thomasson</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- BOOTSTRAP OPTIONAL THEME -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- PLUGIN -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- CUSTOM -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- <ul class="desktop-items">
      <li><img src="img/my-computer.png"> <p>My Computer</p></li>
      <li><img src="img/my-computer.png"> <p>Contact</p></li>
      <li><img src="img/my-computer.png"> <p>Work</p></li>
    </ul> -->


    <!-- DIALOG BOXES -->

      <!-- Shut Down - Dialog  -->
      <div id="ShutDown" class="error-dialog" title="Error" style='display: none;'>
        <div class="row">
            <img src="img/dialog-assets/error-icon.png">
            <p>Anthony Thomasson can not be shut down.</p>
        </div>
        <button class="dialog-btn" onclick='$( "#ShutDown" ).dialog("close")'></button>
      </div>
      <!-- END *** Shut Down - Dialog  -->

      <!-- About - Dialog  -->
      <div id="About" class="my-computer-dialog" title="About" style='display: none;'>
        <div class="my-computer-top">
          <img class="top-left" src="img/dialog-assets/my-computer-topleft.png">
          <img class="top-right" src="img/dialog-assets/my-computer-topright.png">
        </div>
        <div class="my-computer-content">
          <div class="content-left">
            <img src="img/dialog-assets/my-computer-left.png" />
          </div>
          <div class="content-right">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
          <p></p>
        </div>
      </div>
      <!-- END *** Shut Down - Dialog  -->

    <!-- Start Menu  -->
    <ul class="start-menu">
      <li><a href="#ShutDown"><img src="img/start-icons/windows-update.png"><p>Windows Update</p></span></a></li>
      <li class="line-break"></li>
      <li><a href="#About"><img src="img/start-icons/documents.png"><p>About</p></a></li>
      <li><a href="#"><img src="img/start-icons/documents.png"><p>Contact</p></a></li>
      <li><a href="#"><img src="img/start-icons/documents.png"><p>Work</p></a></li>
      <li><a href="#"><img src="img/start-icons/settings.png"><p>Settings</p></a></li>
      <li><a href="#"><img src="img/start-icons/find.png"><p>Find</p></a></li>
      <li><a href="#"><img src="img/start-icons/help.png"><p>Help</p></a></li>
      <li><a href="#"><img src="img/start-icons/run.png"><p>Run...</p></a></li>
      <li class="line-break"></li>
      <li><a href="#"><img src="img/start-icons/log-off.png"><p>Log Off Anthony...</p><span class="arrow"></span></a></li>
      <li><a href="#ShutDown"><img src="img/start-icons/shut-down.png"><p>Shut Down...</p><span class="arrow"></span></a></li>
    </ul>
    <!-- END *** Start Menu  -->


    <footer>
      <button class="start-btn"></button>

      <div class="toolbar">
        <p class="time"></p>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Plugin -->
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>

      // Shut Down dialog
      $( "#ShutDown" ).dialog({
          autoOpen: false,
          width: "430px",
          resizable: false,
          close: function( event, ui ) {parent.location.hash = ''}
      })
      $( "a[href=\\#ShutDown]" ).on( 'click', function( e ) {
          $( "#ShutDown" ).dialog("open");
      });

      // About dialog
      $( "#About" ).dialog({
          autoOpen: false,
          minWidth: 550,
          resizable: true,
          close: function( event, ui ) {parent.location.hash = ''}
      })
      $( "a[href=\\#About]" ).on( 'click', function( e ) {
          $( "#About" ).dialog("open");
      });

    </script>

    <script src="js/custom.js"></script>

  </body>
</html>
