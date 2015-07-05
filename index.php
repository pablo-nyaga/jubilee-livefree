<?php
//require_once ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jubilee</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--    [if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->



    <!-- Hotjar Tracking Code for www.jubileeinsurance.com -->
    <script>
      (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
          (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {hjid: 47584, hjsv: 5};
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
      })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W2L6W5"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({'gtm.start':
                new Date().getTime(), event: 'gtm.js'});
      var f = d.getElementsByTagName(s)[0],
              j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
              '//www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W2L6W5');
  </script>

  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
              m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-50441358-2', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
  </script>


</head>
<body>
  <div class="redStrip" style="height: 8px"></div>
  <div class="container">
    <header>

      <div id="top-header">
        <div class="row">
          <!--logo section-->
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
            <img src="img/logo.png">
          </div>
          <!--facebook, twitter likes-->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div id="social-plugins-parent">
              <div id="social-plugins">
                <div style="margin-right: 10px; position: relative; bottom: 4px;"id="fb-button" class="fb-like" data-href="https://www.facebook.com/Jubileekenya" data-width="200px" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
                <!--<br/><br/>-->
                <a  href="https://twitter.com/JubileeKenya" class="twitter-follow-button" data-show-count="true" >Follow @JubileeKenya</a>
              </div>
            </div>
          </div>
          <!--social media icon list-->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
            <div id="list-header" class="clearfix">
              <ul class="list-unstyled list-inline pull-right">
                <!--<li><span class="glyphicon glyphicon-stats"></span></li>-->
                <!--<li><a href="http://mail.jubileekenya.com/owa"><i class="fa fa-envelope-o"></i></a></li>-->
                <li><a href="https://www.facebook.com/Jubileekenya"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/JubileeKenya"><i class="fa fa-twitter"></i></a></li>
                <li><a href="http://www.youtube.com/watch?v=Ary9-4Cd8Go"><i class="fa fa-youtube"></i></a></li>
                <li><a href="http://www.linkedin.com/company/705038?trk=tyah&trkInfo=tas%3Ajubilee"><i class="fa fa-linkedin"></i></a></li>
              </ul>
              <!--                <form class="clearfix" >
                                <div class="form-group  ">
                                  <input type="text" name="" class="form-control"/>
                                </div>
                              </form>-->
            </div>
          </div>
        </div>
      </div>


<!--      <nav class="navbar navbar-default" id="nav-red">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="nav-red-list">
              <li><a href="https://www.jubileeinsurance.com/ke/index.php">Home <span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav">
              <li><a href="https://www.jubileeinsurance.com/ke/index.php/about-us#.VYqmEUbw2g0">About <span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav">
              <li><a href="https://www.jubileeinsurance.com/ke/index.php/products-solutions#.VYqmJkbw2g0">Products & Solutions <span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav">
              <li><a href="https://www.jubileeinsurance.com/ke/index.php/customer-relations#.VZFjDEbw2Ac">Customer Relations <span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav">
              <li><a href="https://www.jubileeinsurance.com/ke/index.php/jubilee-group#.VZFjNkbw2Ac">Jubilee Group <span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav">
              <li><a href="https://jubileeinsure.com/"> Buy Online<span class="sr-only"></span></a></li>
            </ul>

          </div> /.navbar-collapse 
        </div> /.container-fluid 
      </nav>-->
    </header>

    <div >
      <div class="slider">
        <img class="img-responsive" src="img/slider-1.png" style="width: 100%;"/>
        <div id="catchPhrase">
          Get Free Personal Accident benefit for Principle member
        </div>
      </div>
    </div>


    <!--  -->
    <div class="col-md-8 col-sm-6">
      <!--1st column-->
      <div class="col-md-6 col-sm-12">
        <div class="">
          <img class="img-responsive" src="img/jCareMIC.png">
          <div class="grey-div">
            <h2>PERSONAL ACCIDENT BENEFIT</h2>
            <p id="p-accident-cover">Take care of your loved ones even when you are gone. They will be given
              <b id="amount">Kshs.500,000 </b>
              in the event of your accidental death.
            </p>
            <div class="live-free">
              <a href="https://www.jubileeinsurance.com/ke/index.php/products-solutions/individual-insurance/general-products/personal-accident#.VYv0YEbw2g1" target="new">View more...</a>
            </div>
          </div>
        </div>
      </div>
      <!--2nd column-->
      <div class="col-md-6 col-sm-12">
        <div id="imgDiscount">
          <img class="img-responsive" src="img/get_discount.png">
        </div>
        <div id="discount">Let Jubilee Insurance iron out the risk!</div>
        <!--For more information on how to purchase J Care kindly contact your insurance intermediary or you can also reach us on <b>0719 222 111</b>-->
        <div class="grey-div">
          <h2>PRODUCTS & SOLUTIONS </h2>
          <!--          <ul class="products-menu">
                      <a href="javascript:void(0)"><li>Outpatient Cover</li></a>
                      <a href="javascript:void(0)"><li>Inpatient Cover</li></a>
                      <a href="javascript:void(0)"><li>Maternity Cover</li></a>
                      <a href="javascript:void(0)"><li>Dental & Optical Cover</li></a>
                      <a href="javascript:void(0)"><li>Last Expense Cover</li></a>
                      <a href="javascript:void(0)"><li>Personal Accident Benefit Cover</li></a>
                    </ul>-->
          <ul class="products-menu">
            <a href="https://www.jubileeinsurance.com/ke/index.php/products-solutions/individual-insurance/general-products/motor-insurance#.VYvxaUbw2g0" target="new"><li>Motor Insurance</li></a>
            <a href="https://www.jubileeinsurance.com/ke/index.php/products-solutions/individual-insurance/general-products/personal-accident#.VYvxaUbw2g0" target="new"><li>Personal Accident</li></a>
            <a href="https://www.jubileeinsurance.com/ke/index.php/products-solutions/individual-insurance/general-products/travel-insurance#.VYvxZ0bw2g0" target="new"><li>Travel Insurance</li></a>
            <a href="https://www.jubileeinsurance.com/ke/index.php/products-solutions/individual-insurance/life-insurance/family-shield-cover#.VYvzRUbw2g0" target="new"><li>Family shield cover</li></a>
            <a href="https://www.jubileeinsurance.com/ke/index.php/products-solutions/individual-insurance/pension-products/personal-pension-plan#.VYvzfEbw2g0" target="new"><li style="border: none">Personal Pension Plan </li></a>
          </ul>
        </div>
      </div>
    </div>


    <!--3rd absolute column-->
    <div class="col-md-4 col-sm-6">
      <div id="lead-capture-form">

        <?php
        if (isset($_POST["buttonSubmit"])) {
          $firstName = $_POST['firstName'];
          $lastName = $_POST['lastName'];
          $phoneNumber = $_POST['phoneNumber'];
          $location = $_POST['location'];
          $policy = $_POST['policy'];

//          if (isset($_POST['terms'])) {
//            $terms = $_POST['terms'];
//          } else {
//            $terms = 'no terms';
//          }
          if (isset($_POST['callback'])) {
            $callback = $_POST['callback'];
          } else {
            $callback = 'no callback';
          }




//            echo $callback= $_POST['callback'];


          $sql = "INSERT INTO leads (
                      firstName,
                      lastName,
                      phoneNumber,
                      location,
                      policy, 
                      callback )
                    VALUES (
                      :firstName,
                      :lastName,
                      :phoneNumber,
                      :location,
                      :policy, 
                      :callback
                    )";
          $query = $connPDO->prepare($sql);
          $query->execute(array(
              ':firstName' => $firstName,
              ':lastName' => $lastName,
              ':phoneNumber' => $phoneNumber,
              ':location' => $location,
              ':policy' => $policy, 
              ':callback' => $callback));
//            if ($dbh->query($sql)) {
//              echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
//            } else {
//              echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
//            }
//            $sql = "INSERT INTO leads (student_name, student_email, student_city)
//                    VALUES ('" . $_POST["stu_name"] . "','" . $_POST["stu_email"] . "','" . $_POST["stu_city"] . "')";
//            if ($dbh->query($sql)) {
//              echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
//            } else {
//              echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
//            } 
        }
        ?>
        <fieldset>
          <!--<b style="color: white">Get Free Personal Accident benefit for Principle member</b>-->
          <form method="post" action="thank_you.php">
            <legend class="text-center" style="color: #fff; font-size: 23px;" >Get a free callback!</legend>
            <div class="form-group">
              <label for="fullName">Name:</label>
              <input type="text" class="form-control" name="fullName" required>
            </div>
<!--            <div class="form-group">
              <label for="lastName">Last Name:</label>
              <input type="text" class="form-control" name="lastName">
            </div>-->
            <div class="form-group">
              <label for="phoneNumber">Phone Number:</label>
              <input type="text" class="form-control" name="phoneNumber" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <!--              <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" class="form-control" name="location">
                          </div>-->
<!--            <div class="form-group">
              <label for="location">Location/County:</label>
              <select class="form-control" name="location">
                <option value="Nairobi">Nairobi</option>
                <option value="Baringo">Baringo</option>
                <option value="Baringo">Baringo</option>
                <option value="Bomet">Bomet</option>
                <option value="Bungoma">Bungoma</option>
                <option value="Busia">Busia</option>
                <option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
                <option value="Embu">Embu</option>
                <option value="Garissa">Garissa</option>
                <option value="Homa Bay">Homa Bay</option>
                <option value="Isiolo">Isiolo</option>
                <option value="Kajiado">Kajiado</option>
                <option value="Kakamega">Kakamega</option>
                <option value="Kericho">Kericho</option>
                <option value="Kiambu">Kiambu</option>
                <option value="Kilifi">Kilifi</option>
                <option value="Kirinyaga">Kirinyaga</option>
                <option value="Kisii">Kisii</option>
                <option value="Kisumu">Kisumu</option>
                <option value="Kitui">Kitui</option>
                <option value="Kwale">Kwale</option>
                <option value="Laikipia">Laikipia</option>
                <option value="Lamu">Lamu</option>
                <option value="Machakos">Machakos</option>
                <option value="Makueni">Makueni</option>
                <option value="Mandera">Mandera</option>
                <option value="Meru">Meru</option>
                <option value="Migori">Migori</option>
                <option value="Marsabit">Marsabit</option>
                <option value="Mombasa">Mombasa</option>
                <option value="Muranga">Muranga</option>
                <option value="Nairobi">Nairobi</option>
                <option value="Nakuru">Nakuru</option>
                <option value="Nandi">Nandi</option>
                <option value="Narok">Narok</option>
                <option value="Nyamira">Nyamira</option>
                <option value="Nyandarua">Nyandarua</option>
                <option value="Nyeri">Nyeri</option>
                <option value="Samburu">Samburu</option>
                <option value="Siaya">Siaya</option>
                <option value="Taita Taveta">Taita Taveta</option>
                <option value="Tana River">Tana River</option>
                <option value="Tharaka Nithi">Tharaka Nithi</option>
                <option value="Trans Nzoia">Trans Nzoia</option>
                <option value="Turkana">Turkana</option>
                <option value="Uasin Gishu">Uasin Gishu</option>
                <option value="Vihiga">Vihiga</option>
                <option value="Wajir">Wajir</option>
                <option value="West Pokot">West Pokot</option>
              </select>
            </div>-->
            <div class="form-group">
              <label for="policy">I'd like to know more about:</label>
              <select class="form-control" name="policy">
                <option value="JCare Medical Insurance Cover">JCare Medical Insurance Cover</option>
                <option value="Motor Insurance">Motor Insurance</option>
                <option value="Travel">Travel</option>
                <option value="Career/Education">Career/Education</option>
                <option value="Personal pension plan">Personal pension plan</option>
              </select>
            </div>

            <div class="checkbox">
              <!--<label><input type="checkbox" name="terms" value="terms" checked>Accept General Terms & Conditions</label>-->
              <label><input type="checkbox" name="callback" value="Yes" checked>I Agree you may contact me</label>
            </div>



            <div class="form-group">
              <input type="submit" value="I CHOOSE TO LIVE FREE" class="form-control buttonSubmit" name="buttonSubmit">
            </div>


          </form>
        </fieldset>

      </div>
      <div class="grey-div" id='divJcare'>
        <h2>JCare - Medical Solution </h2>
        <center>
          <img src="img/medical-products.png">
        </center>
      </div>
    </div>






    <footer>
      <div id="contacts" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <b class="text-left">Our Contacts: 020 328 1000 / 0719 222 111 | </b>
        <b class="text-left">info@jubileekenya.com | </b>
        <b class="text-left">WhatsApp – 0713 222 111</b>
        <!--<b>Our Contacts: 020 328 1000 / 0719 222 111 &nbsp;&nbsp; | &nbsp;&nbsp; info@jubileekenya.com &nbsp;&nbsp; | &nbsp;&nbsp; WhatsApp – 0713 222 111</b>-->
      </div>
    </footer>
    <br/>
    <div class="clearfix"></div>







  </div>
  <div id="redStrip-bottom">
    Copyright 2015. All rights reserved. Privacy Policy  |  Terms and Conditions apply
  </div>

  <div id="fb-root"></div>
  <script>
    //facebook
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id))
        return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=350704431710441";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    //twitter
    !function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
      if (!d.getElementById(id)) {
        js = d.createElement(s);
        js.id = id;
        js.src = p + '://platform.twitter.com/widgets.js';
        fjs.parentNode.insertBefore(js, fjs);
      }
    }(document, 'script', 'twitter-wjs');
  </script>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>