<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Products' clonable='1' >
  <cms:editable name='product_content' type='richtext' />
  <cms:editable name='product_image' crop='1' width='610' height='150' type='image' />
</cms:template>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Madison Electric</title>
<style>
      #map {
        height: 400px;
        width: 100%;
       }
       body {
         background: #efefef;
         margin: 0px;
         padding: 0px;
         font-family: verdana;
         font-size: 14px;
       }

       #header {
         background: #fff;
         -webkit-box-shadow: -1px 6px 5px 0px rgba(204,204,204,1);
       -moz-box-shadow: -1px 6px 5px 0px rgba(204,204,204,1);
       box-shadow: -1px 6px 5px 0px rgba(204,204,204,1);
        width: 100%;
        height: 79px;
        display: block;
        margin-bottom: 15px;
       }
       .content {
         width: 80%;
         margin: 0 auto;
       }

       #header img {
         display: inline-block;
         height: 75px;
       }
       #header ul#nav {

         display: inline-block;
margin: 0px;
padding: 0px;
height: 75px;
vertical-align: top;
float: right;
       }
       #header ul#nav li {

         display: inline-block;
position: relative;
height: 75px;
vertical-align: middle;
line-height: 75px;
border-bottom: #fff 4px solid;
padding: 0px 15px;
font-weight: bold;
       }
       #header ul#nav li ul {
         display: none;
         position: absolute;
          top: 78px;
          left: 0px;
          margin: 0px;
          padding: 0px;
          z-index: 2;
          white-space: nowrap;
          background: #fff;
          -webkit-box-shadow: -1px 6px 5px 0px rgba(204,204,204,1);
        -moz-box-shadow: -1px 6px 5px 0px rgba(204,204,204,1);
        box-shadow: -1px 6px 5px 0px rgba(204,204,204,1);
       }
       #header ul#nav li:hover, #header ul#nav li.current {
         background: #e4231f;
         border-bottom: #000 4px solid;
         color: #fff;
         transition: .3s all ease;
       }
       #header ul#nav li:hover ul {
         display: block;
       }
       #header ul#nav ul li {
         display: block;
   padding: 5px 20px;
   border-bottom: 1px solid #ccc;
   height: 20px;
   line-height: 20px;
   color: #000;
   font-weight: normal;
       }
       #header ul#nav ul li:hover {
         background: #ccc;
         border: none;
         color: #000;
       }


    </style>
</head>

<body>
  <div id="header">
    <div class="content">
      <img src="images/MEC100logo.png" />
      <ul id="nav">
        <li class="current">Home</li>
        <li>About Us
          <ul>
            <li>Certifications & Awards</li>
            <li>Mission & Vision</li>
            <li>History</li>
          </ul>
        </li>
        <li>Locations
          <ul>
            <li>Corporate Office</li>
            <li>Branches</li>
          </ul>
        </li>
        <li>Products</li>
        <li>Contact Us</li>
        <li>Online Store</li>
      </ul>
      <!--end of navigation-->
    </div>
  </div>
  <!-- end of header -->
  <div>
    <img src="https://media.istockphoto.com/photos/blurred-forklift-in-factory-picture-id868748664?s=2048x2048" />


  </div>
  <div id="map"></div>

</body>
<script>
  function initMap() {

    var uluru = {lat: 42.3751887, lng: -83.6147356};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB9IAIoaYifVFG1HtfH94zVV96S4gvb4s&callback=initMap">
</script>
</html>
<?php COUCH::invoke(); ?>
