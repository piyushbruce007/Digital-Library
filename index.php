<?php

 include("includes/connection.php");
?>
<?php $page="dashboard"; ?>
<!DOCTYPE html>
<html lang="en" class="app">
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>DIGITAL LIBRARY IIIT NR </title>
    <?php require"includes/header.php"; ?>
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>
<body class="home">
<!-- =======Header ======= -->
		<?php require"includes/header_info.php"; ?>
<!-- ======= /Header ======= -->
<!-- ======= mainmenu-area section ======= -->
		<?php require"includes/menu.php"; ?>
<!-- ======= /mainmenu-area section ======= -->
<!-- ======= revolution slider section ======= -->
	<section class="rev_slider_wrapper me-fin-banner">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<li data-transition="fade">
					<img src="images/slides/iiit.jpg"  alt="">
					<div class="tp-caption sfb tp-resizeme banner-h1" 
				        data-x="left" data-hoffset="0" 
				        data-y="top" data-voffset="0" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="500">
						 <br>Welcome To IIIT NR 
                                                 <br>DIGITAL LIBRARY
                                     
				    </div>
					<div class="tp-caption sfb tp-resizeme banner-border" 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="400" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="800">
						<span></span>
				    </div>
					<div class="tp-caption sfb tp-resizeme banner-text" 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="435" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1100">
						<p>.</p>
				    </div>
					<div class="tp-caption sfl tp-resizeme " 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="510" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1400">
						<a class="banner-button" href="">Contact Us <i class="fa fa-arrow-circle-right"></i></a>
				    </div>
					<div class="tp-caption sfr tp-resizeme " 
				        data-x="left" data-hoffset="580" 
				        data-y="top" data-voffset="510" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="1700">
						<a class="banner-button blue-bg" href="">View More <i class="fa fa-arrow-circle-right"></i></a>
				    </div>
				</li>
				<li data-transition="fade">
					<img src="images/slides/2.JPG"  alt="">
					<div class="tp-caption sfb tp-resizeme banner-h1" 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="290" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="500">
						Best Book Search Resource <br>Without Guidance
				    </div>
					<li data-transition="fade">
					<img src="images/slides/3.jpg"  alt="">
					<div class="tp-caption sfb tp-resizeme banner-border" 
				        data-x="left" data-hoffset="380" 
				        data-y="top" data-voffset="400" 
				        data-whitespace="nowrap"
				        data-transform_idle="o:1;" 
				        data-transform_in="o:0" 
				        data-transform_out="o:0" 
				        data-start="800">
						<span></span>
				    </div>
					</li>
				</li>
			</ul>
		</div>
	</section>
<!-- ======= /revolution slider section ======= -->
<!-- ======= Testimonial & Company Values ======= -->
		<section class="testimonial_sec clear_fix">
			<div class="container">
				<div class="row">
					<div  class="col-lg-5 col-md-12 col-sm-12 col-xs-12 testimonial_container">
						<div class="sec-title">
							<h2>IIIT NR DIGILIB</h2>
						</div>
						<div id="owl">
							<div>
								<div class="testimonial">									
									<img class="round_img" src="images/Vyas_2.png" alt="images">
									<div class="float_right client_info">
										<p> Library Catalog</p>
										<span></span>
										<ul>
											<li><a href=""></a></li>
											<li><a href=""></a></li>
											<li><a href=""></a></li>
											<li><a href=""></a></li>
											<li><a href=""></a></li>
										</ul>
									</div>
								</div>
								<p class="john_speach">DIGILIB offers you to search your Book and it provides you the best user experience . <p>
								<img src="images/sign.jpg" alt="images">
							</div>
							
						</div> <!-- End owl -->
					</div>
					<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 company">
						<h2>Category Defination </h2>
						<div class="company-tab">
							<ul class="nav nav-pills nav-justified">
							    <li class="active"><a data-toggle="pill" href="#menu1">Computer Science </a></li>
							    <li><a data-toggle="pill" href="#menu2">Electronics And Communication</a></li>
							    <li><a data-toggle="pill" href="#menu3">Maths</a></li>
                                                            <li><a data-toggle="pill" href="#menu4">Physics</a></li>
                                                            <li><a data-toggle="pill" href="#menu5">Others</a></li>
						  	</ul>
						  
							 <div class="tab-content">
							    <div id="menu1" class="tab-pane fade in active">
							      <h3>Computer Science</h3>
                                                              <p>It refers to Books related to Computer science subject and category Id no.1</p>
							    </div>
							    <div id="menu2" class="tab-pane fade">
							      <h3>Electronics and communication</h3>
                                                              <p>It refers to Books related to Electronics and communication subject and category Id no.2</p>
							    </div>
							    <div id="menu3" class="tab-pane fade">
							      <h3>Maths</h3>
                                                              <p>.It refers to Books related to Maths and category Id no.3</p>
							    </div>
                                                             <div id="menu4" class="tab-pane fade">
							      <h3>Physics</h3>
                                                              <p>It refers to Books related to Physics subject and category Id no.4</p>
							    </div>
                                                             <div id="menu5" class="tab-pane fade">
							      <h3>Others</h3>
							      <p>Journals ,Magazines ,Novels comes under this category and category Id no.5</p>
							      
							    </div>
							 </div>
						
							<ul class="nav nav-pills nav-justified">
							    <li class="active"><a data-toggle="pill" href="#menu6">ISBN</a></li>
							    <li><a data-toggle="pill" href="#menu7">Title</a></li>
							    <li><a data-toggle="pill" href="#menu8">Author</a></li>
                                                            <li><a data-toggle="pill" href="#menu9">Subject</a></li>
                                                            <li><a data-toggle="pill" href="#menu10">Year Published</a></li>
						  	</ul>
						  
							 <div class="tab-content">
							    <div id="menu6" class="tab-pane fade in active">
							      <h3>ISBN(Serial Number)</h3>
                                                              <p>Sequential number assigned to each record or volume as it is added to a database (such as a library catalog or index) and which indicates the chronological order of its acquisition. Compare with acquisition number</p>
							    </div>
							    <div id="menu7" class="tab-pane fade">
							      <h3>Book Title</h3>
                                                              <p>An identifying name given to a book, play, film, musical composition, or other work.</p>
							    </div>
							    <div id="menu8" class="tab-pane fade">
							      <h3>Book Author</h3>
                                                              <p>A person who writes a novel, poem, essay, etc.; the composer of a literary work, as distinguished from a compiler, translator, editor, or copyist.</p>
							    </div>
                                                             <div id="menu9" class="tab-pane fade">
							      <h3>Book Subject</h3>
                                                              <p>That which forms a basic matter of thought, discussion, investigation, etc.:</p>
							    </div>
                                                             <div id="menu10" class="tab-pane fade">
							      <h3>Year Published</h3>
                                                              <p>The date on which a book or periodical is or is planned to be published.</p>
							    </div>
							 </div>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End Container -->
		</section> <!-- testimonial -->
<!-- ======= /Testimonial & Company Values ======= -->
<!--====Footer===-->
<?php require"includes/footer.php"; ?>
<!--==./Footer==-->
</body>
</html>

