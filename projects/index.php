<!--
	Author:			Cyrus
	Created on:		2016 11 12
	Last modified:	2016 11 12
-->
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>T3D WareHouse | Projects</title>
  <?php require realpath($_SERVER['DOCUMENT_ROOT'])."/warehouse/include/head_style.php"; ?>
</head>
<script type="text/javascript">
  function setViewMy() {
    $_SESSION['view'] = "my";
    header("Refresh:0");
  }
  function setViewAll() {
    $_SESSION['view'] = "all";
    header("Refresh:0");
  }
</script>
<body>

<?php
  if (isset($_SESSION['view'])) {
    $view = $_SESSION['view'];
  }
  else {
    $view = "all";
  }
?>

<!-- header -->
<?php require realpath($_SERVER['DOCUMENT_ROOT'])."/warehouse/include/header.php"; ?>

<!-- body -->
<div class="container-fluid text-center">
  <div class="row content">

    <!-- left sidenav -->
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>

    <!-- center body -->
    <div class="col-sm-8 text-left">
      <h1>Projects</h1>
      <ul class="nav nav-tabs">
        <li class="active">
          <a href="#panel-summary" data-toggle="tab">My Projects</a>
        </li>
        <li>
          <a href="#panel-files" data-toggle="tab">All Projects</a>
        </li>
      </ul>
      <div class="tab-content">

        <div class="tab-pane active" id="panel-summary">
          <p>
            <div class="row">

              <div class="col-md-4">
                <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                    <h3>
                      <a href="/warehouse/project.php">Thumbnail label</a>
                    </h3>
                    <p>
                      Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                    <h3>
                      <a href="/warehouse/project.php">Thumbnail label</a>
                    </h3>
                    <p>
                      Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                    <h3>
                      <a href="/warehouse/project.php">Thumbnail label</a>
                    </h3>
                    <p>
                      Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                    <h3>
                      <a href="/warehouse/project.php">Thumbnail label</a>
                    </h3>
                    <p>
                      Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </p>
        </div>

        <div class="tab-pane" id="panel-files">
          <p>
            <div class="row">

              <div class="col-md-4">
                <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                    <h3>
                      <a href="/warehouse/project.php">Thumbnail label</a>
                    </h3>
                    <p>
                      Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                    <h3>
                      <a href="/warehouse/project.php">Thumbnail label</a>
                    </h3>
                    <p>
                      Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                    <h3>
                      <a href="/warehouse/project.php">Thumbnail label</a>
                    </h3>
                    <p>
                      Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                    <h3>
                      <a href="/warehouse/project.php">Thumbnail label</a>
                    </h3>
                    <p>
                      Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                    <h3>
                      <a href="/warehouse/project.php">Thumbnail label</a>
                    </h3>
                    <p>
                      Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                    <h3>
                      <a href="/warehouse/project.php">Thumbnail label</a>
                    </h3>
                    <p>
                      Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </p>
        </div>

      </div>
    </div>

    <!-- right sidenav -->
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>

  </div>
</div>

<?php include realpath($_SERVER['DOCUMENT_ROOT'])."/warehouse/include/footer.php"; ?>

</body>
</html>
