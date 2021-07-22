<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<div class="container">
    <div class="container-box rotated">
        <button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModal">Admission Enquiry Form</button>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" font color="#000000">
                       Admission Enquiry Form
                   </h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>

               </div>
               <div class="modal-body">
                <form role="form" method="post" id="reused_form" >
                    <p> Fill the form below and you will be contacted</p>
                    <div class="form-group">
                        <label for="name"> Student's Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="name"> Class of Admission:</label>
                        <input type="text" class="form-control" id="class" name="class" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="name"> Phone No.:</label>
                        <input type="text" class="form-control" id="phone" name="phone" required maxlength="10">
                    </div>
                    <div class="form-group">
                        <label for="name"> Father's Name:</label>
                        <input type="text" class="form-control" id="fathername" name="fathername" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="email"> Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="name"> Message:</label>
                        <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Ask your query here" maxlength="6000" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Done&rarr;</button>
                </form>
                <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="page-wrapper">
    <div class="topbar-one">
        <div class="container">
            <div class="topbar-one__left">
                <a href="#">shashi.ischool@gmail.com</a>
                <a href="tel:7248080207">Call Us</a>
            </div><!-- /.topbar-one__left -->
            <div class="topbar-one__right">
                <div class="header__social">

                    <a href="#">Affiliation No :- 2133387</a>
                    <a href="https://www.youtube.com/channel/UCcwcRFVO25X3_aMvDT1AhRw/featured?view_as=subscriber"><i class="fab fa-youtube"></i></a>

                    <a href="https://www.facebook.com/shashi.ischool/"><i class="fab fa-facebook-square"></i></a>

                    <a href="https://www.instagram.com/shashi.ischool/"><i class="fab fa-instagram"></i></a>
                </div>
            </div><!-- /.topbar-one__right -->
        </div><!-- /.container -->
    </div><!-- /.topbar-one -->

    <header class="site-header site-header__header-one ">
        <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
            <div class="container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="logo-box clearfix">
                    <a class="navbar-brand" href="index.php">
                        <img src="kipsoassets/images/slogo.png" class="main-logo" width="220" alt="Awesome Image" />
                    </a>
                    <!-- /.header__social -->
                    <button class="menu-toggler" data-target=".main-navigation">
                        <span class="kipso-icon-menu"></span>
                    </button>
                </div>
                <!-- /.logo-box -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="main-navigation">
                    <ul class=" navigation-box">
                        <li class="current">
                            <a href="index.php">Home</a>

                        </li>
                        <li>
                            <a href="careers.php">Careers</a>

                        </li>
                        <li>
                            <a href="#">CBSE</a>
                            <ul class="sub-menu">
                                <li><a href="https://www.cbse.gov.in">CBSE</a></li>
                            </ul><!-- /.sub-menu -->
                        </li>
                        <li>
                            <a href="#">Gallery</a>
                            <ul class="sub-menu">
                                <li><a href="sisgallery.php">Photo Gallery</a></li>
                                <li><a href="webinars.php">Webinars and Seminars</a></li>
                            </ul><!-- /.sub-menu -->
                        </li>
                        <li>
                            <a href="#">Academics</a>
                            <ul class="sub-menu">
                                
                                  <li><a href="downloads/calender2021.pdf">Academic Calender 2021</a></li>
                                <li><a href="academics.php">Curriculam</a></li>
                                <li><a href="academics.php">Affiliation</a></li>
                                <li ><a >Faculties</a>
                                    <ul class="sub-menu"> 
                                        <li><a href="downloads/sisstaff.pdf">Faculty Staff List</a> </li>
                                
                                     </li></ul>



                                 </li>

                            </ul><!-- /.sub-menu -->
                        </li>
                        <li>
                            <a href="#">About School</a>
                            <ul class="sub-menu">
                                <li ><a >Managing Committee</a>
                                    <ul class="sub-menu"> 
                                        <li><a href="downloads/antiraggingcom.pdf">Anti-ragging Committee</a> </li>
                                     <li><a href="downloads/smc2021.pdf">School Managing Committee</a> </li>
                                     <li><a href="downloads/shc.pdf">Committee against sexual harassment</a> </li>
                                     <li><a href="downloads/vm.pdf">Vision/Mission</a> </li></ul>



                                 </li>
                                 <li><a href="rulesandregulations.php">Rules and Regulations</a> </li>
                                 <li><a href="vision.php">Vision/Mission</a></li>
                                 <li><a href="vision.php#idapproach">Our Approach</a></li>
                                 <li><a href="vision.php#idpledge">Our Pledge</a></li>
                                 <li><a href="vision.php#idassesment">Assesment</a></li>
                                 <li><a href="academics.php#msg-box4-1e">CBSE Affiliation</a></li>
                                 <li><a href="academics.php#msg-box4-1e">Academics</a></li>
                                 <li><a href="director.php#msg-box3-s">Director's Message</a></li>
                                 <li><a href="chairperson.php#msg-box3-y">Chairperson's Message</a></li>
                                 <li><a href="principal.php#msg-box3-13">Principal's Desk</a></li>
                                 <li><a href="faculty.php#msg-box3-18">Faculty and Staff</a></li>

                             </ul><!-- /.sub-menu -->
                         </li>
                         <li>
                            <a href="#">Infrastructure</a>
                            <ul class="sub-menu">
                                <li><a href="infrastructure.php#msg-box4-1x">Classrooms</a></li>
                                <li><a href="infrastructure.php#msg-box4-1j">Library</a></li>
                                <li><a href="infrastructure.php#msg-box4-1z">Computer Lab</a></li>
                                <li><a href="infrastructure.php#msg-box4-21">Science Lab</a></li>

                            </ul><!-- /.sub-menu -->
                        </li>
                        <li>
                            <a href="#">Admissions</a>
                            <ul class="sub-menu">
                                 <li><a href="tc.php">Transfer Certificate</a></li>
                                 <li ><a >School Fees</a>
                                    <ul class="sub-menu"> 
                                
                                     <li><a href="downloads/sf20_21.pdf">Fee Declaration 2020-21</a> </li>
                                     </li></ul>



                                 </li>
                                <li><a href="admissions.php">Admission Procedure</a></li>
                                <li><a href="admissions.php#msg-box3-26">Rules & Regulations</a></li>
                                <li><a href="admissions.php">Download Form</a></li>


                            </ul><!-- /.sub-menu -->
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->

            </div>
            <!-- /.container -->
        </nav>
        <div class="site-header__decor">
            <div class="site-header__decor-row">
                <div class="site-header__decor-single">
                    <div class="site-header__decor-inner-1"></div><!-- /.site-header__decor-inner -->
                </div><!-- /.site-header__decor-single -->
                <div class="site-header__decor-single">
                    <div class="site-header__decor-inner-2"></div><!-- /.site-header__decor-inner -->
                </div><!-- /.site-header__decor-single -->
                <div class="site-header__decor-single">
                    <div class="site-header__decor-inner-3"></div><!-- /.site-header__decor-inner -->
                </div><!-- /.site-header__decor-single -->
            </div><!-- /.site-header__decor-row -->
        </div><!-- /.site-header__decor -->
</header><!-- /.site-header -->