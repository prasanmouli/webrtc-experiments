<!doctype html>
<html>
    <head>

        <title>WebRTC</title>

        <!-- Stylesheet Ressources -->
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- JavaScript Ressources -->
        <script src="js/jquery-1.7.1.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/global.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/adapt.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/webrtc.js" type="text/javascript" charset="utf-8"></script>


    </head>

    <body>

        <!-- Modal Connection -->
        <div class="modal hide fade" id="ModalConnection">

            <div class="modal-header" style='text-align: center'>
              <h3>Enter Username</h3> (this will be visible to all your peers)
            </div>

            <div class="modal-body" style='text-align: center'>
              <div class="control-group">
                <input id="nickname" type="text" class="span2">
                <br/><span class="help-inline hide">Username cannot be blank!</span>
              </div>
            </div>

            <div class="modal-footer" style='text-align: center'>
            <button id="loginSub" class="btn btn-info" style='float: center'>Enter Chat</button>
            </div>

        </div>
        <!-- End of the Modal Connection -->

        <!-- Modal About -->
        <div class="modal hide fade" id="ModalAbout">

            <div class="modal-header">
              <h3>About WebRTC</h3>
            </div>

            <div class="modal-body">
              <blockquote>
                <p align="justify">WebRTC is an open source project that allows web browsers to communicate with one another using the protocol Real-Time Communications (RTC) via a simple Javascript API. WebRTC components were optimized to better serve this purpose.</p>
                <p align="justify">WebRTC initiative is a project supported primarily by Google, Mozilla and Opera.</p>
                <small class="pull-right">Project WebRTC</small>
              </blockquote>
            </div>

            <div class="modal-footer">
            <button id="close" class="btn btn-primary">Close</button>
            <a class="btn btn-small btn-info" target="_blank" href="http://www.webrtc.org/">
            <i class="icon-info-sign icon-white"></i>More Info</a>
            </div>

        </div>
        <!-- End of the Modal About -->

        <!-- Navbar -->
        <div class="navbar navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container-fluid">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <a class="brand" href="./index.php">Video Chat</a>
              <div class="nav-collapse">
                <p class="navbar-text pull-right">Hello <span id="username" href="#"></span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- End of the Navbar -->

        <!-- Content -->
        <div class="container-fluid">

            <div class="row-fluid" style='margin-top: 60px'>

                <div class="local-feed">
                  <!-- Local Video -->
                  <div class="row-fluid">
                    <div style="position: relative;" class="span12">
                      <div class='feed-title' align="center">Local</div>
                      <span id="locallive" class="live hide"></span>
                      <video width="100%" height="100%" id="localVideo" autoplay="autoplay"
                      style="opacity: 0;
                      -webkit-transition-property: opacity;
                      -webkit-transition-duration: 2s;">
                      </video>
                    </div>
                  </div>
                  <!-- End of Local Video -->
                </div>
                <div class="remote-feed">
                  <!-- Remote Video -->
                  <div class="row-fluid">
                    <div style="position: relative;" class="span12">
                      <div class='feed-title' align="center">Remote</div>
                      <span id="remotelive" class="live hide"></span>
                      <video width="100%" height="100%" id="remoteVideo" autoplay="autoplay"
                      style="opacity: 0;
                      -webkit-transition-property: opacity;
                      -webkit-transition-duration: 2s;">
                      </video>
                    </div>
                  </div>
                  <!-- End of Remote Video -->
                </div>

            </div>

            <!-- Statut of the visio call -->
            <div id="footer"></div>

        </div>
        <!-- End of the Content -->

    </body>
</html>
