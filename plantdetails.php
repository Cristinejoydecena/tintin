<nav>
    <div class="navbar">
      <div class="logo"><a href="#"> P-Shop</a></div>
      <ul class="menu">
        <li><a href=index.php>Home</a></li>
        <li><a href=admindetails.php>Log in</Details></a></li>
        <li><a href=customerdetails.php>Registration</a></li>
        <li><a href=plantdetails.php>Product</a></li>
        <div class="cancel-btn">
          <i class="fas fa-times"></i>
        </div>
      </ul>
      <div class="media-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
    <section>
                <br><br><br><br>
            <div class="row">
 
  <div class="column">
    <div class="content">
      <img src="img.jpg" alt="Lights" style="width:250px; height:250px">
      <h3>Plant 1</h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="img1.jpeg" alt="Nature" style="width:250px; height:250px">
      <h3>Plant 2</h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="img2.jpg" alt="Mountains" style="width:250px; height:250px">
      <h3>Plant 3</h3>
    </div>
  </div>
</div>

</div>
</section>

<script>
* {
  box-sizing: border-box;
}

section {
  background-image:url("img3/background.jpg");
  padding: 20px;
  font-family: Arial;
}


.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}


.row,
.row > .column {
  padding: 8px;
}

.column {
  float: left;
  width: 25%;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


.content {
  background-color: white;
  padding: 10px;
}


@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}


@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</script>