<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/header.php'); ?>



<title> The Evolution | Official Website </title>



<div class="fluid-container" id="homeDiv">
	<div class="container" id="contentBox">
		<div class="row">
			<div class="col-md-4">
				<h4 class="title">Featured Video</h4>
				<iframe id="ytVid" src="https://www.youtube.com/embed/SSapbu3Q_gc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<p class="viewLink"><a href="https://www.youtube.com/channel/UCtBskuLYOltYy1gOaOa7x9g" target="blank">View all</a></p>
			</div>
			<div class="col-md-4">
				<img id="midImg" src="https://kambizmag.com/image/183465-full_music-note-disc-flat-icon-transparent-png-svg-vector.png">
			</div>
			<div class="col-md-4">
				<h4 class="title">Image Gallery</h4>
				<img id="rightImg" src="https://www.advisorsib.com/wp-content/uploads/2018/06/Untitled-design-6.png">
				<p class="viewLink" data-toggle="modal" data-target="#exampleModalCenter">View all</p>
			</div>
		</div>
	</div>
</div>
<br>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Gallery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="https://s.yimg.com/ny/api/res/1.2/61F8Uwa2O_qwMCyZfP6_Zg--~A/YXBwaWQ9aGlnaGxhbmRlcjtzbT0xO3c9ODAw/https://media.zenfs.com/en/harper_s_bazaar_391/b0152d3776c13ef3fcca44a2ce7b0ea1" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://cdn.eventfinda.co.nz/uploads/artists/transformed/995645-1539-14.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://imgix.bustle.com/elite-daily/2016/06/07172725/Selena-Gomez-Did-A-Commercial-In-Spanish-And-Her-Fans-Are-Losing-It.png" alt="Third slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://c1.staticflickr.com/5/4232/34505847513_65f1c58070_c.jpg" alt="Fourth slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://pbs.twimg.com/media/Cq9PLqZWgAAjUq1.jpg" alt="Fifth slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://i0.heartyhosting.com/okmagazine.com/wp-content/uploads/2018/11/selena-gomez-pp-1.jpg?fit=800%2C400&ssl=1" alt="Sixth slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="https://imgix.bustle.com/elite-daily/2016/04/07040801/elite-daily-selena-gomez.jpg" alt="Seventh slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>      
	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container" id="secondDiv">
	<h4 id="mainTitle"> <strong>About the Band</strong> </h4>
	<hr color="#d4b24d">
	<p id="about">
		

		<p>Praesent cubilia magna. Maecenas sociosqu quis tempor feugiat lobortis cras fusce eleifend tristique senectus viverra feugiat laoreet tincidunt praesent at cras nunc feugiat senectus ut, cum mauris felis lacinia orci nam.</p>

		<p>Faucibus fringilla turpis purus. Fermentum. Malesuada blandit penatibus fermentum. Mi viverra ac. Dolor posuere fames, metus.</p>

		<p>Diam <strong>Ultrices</strong> sodales laoreet, tellus. Primis elementum hendrerit. Ante accumsan proin nascetur augue venenatis erat enim id at.</p>

		<p><em>Semper</em> lacus. Vulputate dis sodales. Proin ut hendrerit donec. Augue <strong>penatibus</strong> tellus. Dignissim aliquam penatibus platea varius imperdiet, penatibus suscipit imperdiet bibendum venenatis Hendrerit litora vestibulum sed placerat lacinia elementum eleifend molestie. Imperdiet, potenti inceptos.</p>

	</p>
</div>

<br>
<br>

<div class="container">
	<h4 id="mainTitle"> <strong>Upcoming Tours</strong></h4>
	<hr color="#d4b24d">
	<div class="container">
		<table>
				<tbody>
					<tr>
						<td>
							<p id="tableDataLeft">28<sup>th</sup>January</p>
						</td>
						<td>
							<p id="tableDataRight">
							Venue: Gangtok Groove <br>
							Time: 6 p.m. onwards <br>
							Entry Fee: ₹200<br> 
							</p>
						</td>

					</tr>
					<tr>
						<td>
							<p id="tableDataLeft">14<sup>th</sup>February</p>
						</td>
						<td>
							<p id="tableDataRight">
							Venue: Cafe Live n Loud <br>
							Time: 6 p.m. onwards <br>
							Entry Fee: FREE!<br> 
							</p>
						</td>
					</tr>

					<tr>
						<td>
							<p id="tableDataLeft">21<sup>st</sup>February</p>
						</td>
						<td>
							<p id="tableDataRight">
							Venue: Buddha Cafe <br>
							Time: 8 p.m. onwards <br>
							Entry Fee: ₹300<br> 
							</p>
						</td>
					</tr>
				</tbody>
		</table>
		<p class="viewLink1"> <a id="viewLink2" href="<?php echo url_for('/tour'); ?>">View all</a> </p>

	</div>
</div>
<?php include(SHARED_PATH . '/footer.php'); ?>
