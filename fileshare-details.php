<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <div class="shell">
    <div class="wrap">
      <div class="left-nav inverted">

        <div class="nav-wrap">
        <header class="app-header">
          <div class="branding">
            <div class="c-wrap">
              <div class="page-title">
                <a class="nav-trigger" href="#nogo">
                <span class="inline-icon">
                  <?php echo file_get_contents("img/icons/Logo.svg"); ?>
                </span>
                <h1>HPE StoreEasy</h1>
                <a class="close-button" href="#nogo">
                      <?php echo file_get_contents("img/icons/close.svg"); ?>
                </a>
              </div>

            </div>
            </div>
          </header>

          <ul class="menu-list">

            <li>
              <a href="index.php">
                <span class="inline-icon">
                  <?php echo file_get_contents("img/icons/dashboard-2.svg"); ?>
                </span>
                <span class="menu-txt">
                  Dashboard
                </span>
              </a>
            </li>

            <li>
              <a href="fileshare.php" class="active">
                <span class="inline-icon">
                  <?php echo file_get_contents("img/icons/fileshare.svg"); ?>
                </span>
                <span class="menu-txt">
                  File shares
                </span>
              </a>
            </li>

            <li>
              <a href="#">
                <span class="inline-icon">
                  <?php echo file_get_contents("img/icons/quota.svg"); ?>
                </span>
                <span class="menu-txt">
                  Quotas
                </span>
              </a>
            </li>

            <li>
              <a href="#">
                <span class="inline-icon">
                  <?php echo file_get_contents("img/icons/volume.svg"); ?>
                </span>
                <span class="menu-txt">
                  Volume
                </span>
              </a>
            </li>

            <li>
              <a href="#">
                <span class="inline-icon">
                  <?php echo file_get_contents("img/icons/settings.svg"); ?>
                </span>
                <span class="menu-txt">
                  Settings
                </span>
              </a>
            </li>

            <li>
              <a href="#">
                <span class="inline-icon">
                  <?php echo file_get_contents("img/icons/activity.svg"); ?>
                </span>
                <span class="menu-txt">
                  Activity
                </span>
              </a>
            </li>

            <li>
              <a href="#">
                <span class="inline-icon">
                  <?php echo file_get_contents("img/icons/help.svg"); ?>
                </span>
                <span class="menu-txt">
                  Help
                </span>
              </a>
            </li>


          </ul>


          <div class="secondary-nav">
            <ul class="menu-list">

            <li>
              <a href="#">
                <span class="inline-icon">
                  <?php echo file_get_contents("img/icons/page-help.svg"); ?>
                </span>
                <span class="menu-txt">
                  Help on this page
                </span>
              </a>
            </li>

            <li class="user-menu">
              <a href="#">
                <span class="inline-icon">
                  <?php echo file_get_contents("img/icons/user.svg"); ?>
                </span>
                <div class="menu-txt">
                  <span class="name">Takeshi Kitano </span>
                  <span class="role">Administrator</span>
                </div>
              </a>
            </li>


          </ul>
          </div>
          </div>
        </div>

        <main class="page">
          <div class="wrap main-content">
            <!--detail page wrap-->
            <div class="detail-page">
              <div class="main-content-area">
                <header class="app-header">
                  <div class="c-wrap">
                    <div class="row">
                      <div class="col-12 page-title">
                        <a href="fileshare.php" class="back-button">
                        <span class="inline-icon">
                          <?php echo file_get_contents("img/icons/link-previous.svg"); ?>
                        </span>
                        </a>
                        <h1>Development</h1>
                      </div>
                    </div>
                  </div>
                </header>

                <section class="content-section">
                  <div class="content-wrap">

                 

                    <!--fileshare-content-->
                     

                      <ul class="listing-wrap">

                        <li class="row list-item">
                          <a class="col-4 list-col" href="fileshare-details.php">
                            <span class="list-icon health-ok">
                             
                              <?php echo file_get_contents("img/icons/fileshare.svg"); ?>
                            </span>
                            <div class="list-item-name">
                              <span class="item-title">Development</span>
                              <span class="item-sub-title">B:\Shares\Development</span>
                            </div>
                          </a>

                          <div class="col-4 list-col">
                            <div class="usage-meter">
                            <?php echo file_get_contents("img/usage-meter.svg"); ?>
                            <span><strong>45%</strong> used</span>
                            </div>
                          </div>


                          <div class="col-3 list-col">
                            <span class="light">Protocol:</span>  <strong>SMB</strong>
                          </div>

                          <div class="col-1 list-col right-aligned">
                            <a href="#" class="action-button">
                              <span class="ac-icon">
                                <?php echo file_get_contents("img/icons/context-menu.svg"); ?>
                              </span>
                            </a>
                          </div>
                        </li>



                        <li class="row list-item">
                          <a class="col-4 list-col" href="fileshare-details.php">
                            <span class="list-icon health-ok">

                              <?php echo file_get_contents("img/icons/fileshare.svg"); ?>
                            </span>
                            <div class="list-item-name">
                              <span class="item-title">Design</span>
                              <span class="item-sub-title">B:\Shares\Design</span>
                            </div>
                          </a>

                          <div class="col-4 list-col">
                            <div class="usage-meter">
                            <?php echo file_get_contents("img/usage-meter.svg"); ?>
                            <span><strong>45%</strong> used</span>
                            </div>
                          </div>


                          <div class="col-3 list-col">
                            <span class="light">Protocol:</span>  <strong>SMB</strong>
                          </div>

                          <div class="col-1 list-col right-aligned">
                            <a href="#" class="action-button">
                              <span class="ac-icon">
                                <?php echo file_get_contents("img/icons/context-menu.svg"); ?>
                              </span>
                            </a>
                          </div>
                        </li>


                        <li class="row list-item">
                          <a class="col-4 list-col" href="fileshare-details.php">
                            <span class="list-icon health-ok">

                              <?php echo file_get_contents("img/icons/fileshare.svg"); ?>
                            </span>
                            <div class="list-item-name">
                              <span class="item-title">Backend</span>
                              <span class="item-sub-title">B:\Shares\Backend</span>
                            </div>
                          </a>

                          <div class="col-4 list-col">
                            <div class="usage-meter">
                            <?php echo file_get_contents("img/usage-meter.svg"); ?>
                            <span><strong>45%</strong> used</span>
                            </div>
                          </div>


                          <div class="col-3 list-col">
                            <span class="light">Protocol:</span>  <strong>SMB</strong>
                          </div>

                          <div class="col-1 list-col right-aligned">
                            <a href="#" class="action-button">
                              <span class="ac-icon">
                                <?php echo file_get_contents("img/icons/context-menu.svg"); ?>
                              </span>
                            </a>
                          </div>
                        </li>

                        <li class="row list-item warning">
                          <a class="col-4 list-col" href="fileshare-details.php">
                            <span class="list-icon">

                              <?php echo file_get_contents("img/icons/warning.svg"); ?>
                            </span>
                            <div class="list-item-name">
                              <span class="item-title">Accounts</span>
                              <span class="item-sub-title">B:\Shares\Accounts</span>
                            </div>
                          </a>

                          <div class="col-4 list-col">
                            <div class="usage-meter">
                            <?php echo file_get_contents("img/usage-meter.svg"); ?>
                            <span><strong>45%</strong> used</span>
                            </div>
                          </div>


                          <div class="col-3 list-col">
                            <span class="light">Protocol:</span>  <strong>SMB</strong>
                          </div>

                          <div class="col-1 list-col right-aligned">
                            <a href="#" class="action-button">
                              <span class="ac-icon">
                                <?php echo file_get_contents("img/icons/context-menu.svg"); ?>
                              </span>
                            </a>
                          </div>
                        </li>


                        <li class="row list-item disabled">
                          <a class="col-4 list-col" href="fileshare-details.php">
                            <span class="list-icon">

                              <?php echo file_get_contents("img/icons/connect.svg"); ?>
                            </span>
                            <div class="list-item-name">
                              <span class="item-title">Accounts</span>
                              <span class="item-sub-title">B:\Shares\Accounts</span>
                            </div>
                          </a>

                          <div class="col-4 list-col">
                            <div class="usage-meter">
                            <?php echo file_get_contents("img/usage-meter.svg"); ?>
                            <span><strong>45%</strong> used</span>
                            </div>
                          </div>


                          <div class="col-3 list-col">
                            <span class="light">Protocol:</span>  <strong>SMB</strong>
                          </div>

                          <div class="col-1 list-col right-aligned">
                            <a href="#" class="action-button">
                              <span class="ac-icon">
                                <?php echo file_get_contents("img/icons/context-menu.svg"); ?>
                              </span>
                            </a>
                          </div>
                        </li>


                        <li class="row list-item critical">
                          <a class="col-4 list-col" href="fileshare-details.php">
                            <span class="list-icon">

                              <?php echo file_get_contents("img/icons/connect.svg"); ?>
                            </span>
                            <div class="list-item-name">
                              <span class="item-title">Others</span>
                              <span class="item-sub-title">B:\Shares\Others</span>
                            </div>
                          </a>

                          <div class="col-4 list-col">
                            <div class="usage-meter">
                            <?php echo file_get_contents("img/usage-meter.svg"); ?>
                            <span><strong>45%</strong> used</span>
                            </div>
                          </div>


                          <div class="col-3 list-col">
                            <span class="light">Protocol:</span>  <strong>SMB</strong>
                          </div>

                          <div class="col-1 list-col right-aligned">
                            <a href="#" class="action-button">
                              <span class="ac-icon">
                                <?php echo file_get_contents("img/icons/context-menu.svg"); ?>
                              </span>
                            </a>
                          </div>
                        </li>




                      </ul>
                    <!--/fileshare-content-->

                  </div>
                </section>

              </div>

              <section class="action-panel">
                <div class="page-title">
                  <h1>Actions</h1>
                </div>

                <div class="action-panel-content">
                  <ul class="menu-list action-menu bordered">

                    <li>
                      <a href="index.php">
                        <span class="inline-icon">
                          <?php echo file_get_contents("img/icons/edit.svg"); ?>
                        </span>
                        <span class="menu-txt">
                          Edit file share
                        </span>
                      </a>
                    </li>

                    <li>
                      <a href="fileshare.php" class="active">
                        <span class="inline-icon">
                          <?php echo file_get_contents("img/icons/connect.svg"); ?>
                        </span>
                        <span class="menu-txt">
                          Take offline
                        </span>
                      </a>
                    </li>

                  </ul>

                  <ul class="menu-list action-menu small-secondary">

                    <li>
                      <a href="index.php">
                        <span class="inline-icon">
                          <?php echo file_get_contents("img/icons/trash.svg"); ?>
                        </span>
                        <span class="menu-txt">
                          Delete file share
                        </span>
                      </a>
                    </li>

                  </ul>
                </div>
              </section>
            </div>
            <!--detail page wrap-->

          </div>
        </main>
    </div>
  </div>

  <div class="layer notification-layer info is-hidden">
    <div class="layer-box">
      <a class="close-button" href="#nogo">
        <?php echo file_get_contents("img/icons/close.svg"); ?>
      </a>
    <div class="layer-wrap row">
      <div class="layer-icon col-1">
        <span class="icon-holder">
           <?php echo file_get_contents("img/icons/upgrade.svg"); ?>
        </span>
      </div>
      <div class="layer-content col-7">
        <p>
          A new version of management console update is ready to install.
          <span class="secondary-line">Version 1.1.2.3</span>
        </p>
      </div>
      <div class="layer-action col-4">
        <a class="button small-button primary" href="#">
          Install update
        </a>
      </div>
    </div>
    </div>
  </div>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

   
</body>

</html>
