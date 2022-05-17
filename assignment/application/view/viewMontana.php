<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>

    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">
    
    <title>Web 3D Applications Submission - Cope20</title>

  </head>
  <body id="bodyColor">

      <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_montana">
      

            <div class="logo">
              <a class="navbar-brand" href="#">
                <h1>A</h1>
                <h2>gua</h2>
                <h2>Montana</h2>
                <p>Enhanced hydration, straight from The Pyrenees</p>
              </a>
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="More info about this submission" data-content="Github link and message of authenticity provided.">About</a>
                  </li>

                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="Link for access to the Agua Montana range modeled in 3D">Models</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact Details</a>
                  </li>
                </ul>
            </div>
      </nav>

      <div class="container-fluid">

          <div id="home" class="main_contents">

            <div class="row">
              <div class="col-sm-12">
                  <div id="main_3d_image">
                      <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"></div>
                        <div id="subTitle_home"></div>
                        <div id="description_home"></div>
                      </div> 
                    </div>
              </div>
            </div>  

            <div class="row">
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/render_images/montana.jpg" data-fancybox data-caption="My Agua Montana Can Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/montana.jpg" alt="Agua Montana">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                            <a href="https://en.wikipedia.org/wiki/Mineral_water" class="btn btn-primary btn-responsive">Find out more ...</a>                 
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card">
                          <a href="../application/assets/images/render_images/limon.jpg" data-fancybox data-caption="My  Agua Limon Can Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/limon.jpg" alt="Agua Limon">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a href="https://en.wikipedia.org/wiki/Lemon" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/render_images/fresa.jpg" data-fancybox data-caption="My Agua Fresa Can Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/fresa.jpg" alt="Agua Fresa">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                            <a href="https://en.wikipedia.org/wiki/Strawberry" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div> 

          <div id="about" style="display:none;">
            Linked below is the GitHub which includes the relevant models and code. This includes seperate 3ds Max Archives and X3D Models
            <br>          
            <a href="https://github.com/Cam235/web3Dapps">GitHub</a>
            <br>
            <a href="https://github.com/Cam235/web3Dapps/tree/main/X3D%20Models">Specific X3D Models with textures</a>      
            <br>
            <br>
            These web pages are submitted as part requirement for the degree of Finance and Technology at the University of Sussex.  They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged
          </div>  


          <div id="models" class="main_contents" style="display:none;">

            <div class="row">

              <div class="col-sm-8">
                <div class="card text-left">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a id="navMontana" class="nav-link active" href="#">X3D Models</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">

                    <div>
                        <div id="x3dModelTitle_montana" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_limon" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_fresa" class="card-title drinksText"></div>

                        <button type="button" class="btn btn-secondary btn-responsive" onMouseUp="montanaScene(); montanaDescription();">Agua Montana</button>
                        <button type="button" class="btn btn-secondary btn-responsive" onMouseUp="limonScene(); limonDescription();">Agua Limon</button>
                        <button type="button" class="btn btn-secondary btn-responsive" onMouseUP="fresaScene(); fresaDescription();">Agua Fresa</button>

                        <div class="model3D">
                          <x3d id="wire">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/montana.x3d" > </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/limon.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/fresa.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                        <div id="x3dCreationMethod_montana" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_limon" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_fresa" class="card-text drinksText"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">                
                <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">

                          <li class="nav-item">
                              <a class="nav-link active" href="#">Options</a>                              
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraFront();">Default</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraTop();">Top</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraBottom();">Bottom</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-outline-dark btn-responsive">Off</a>                        
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="spin();">Rotate</a>                          
                          <a href="#" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                          <div class="card-text x3dAnimationDescription drinksText">                              
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>                          
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                          <a href="#" class="btn btn-secondary btn-responsive" onclick="headLight();">Headlight</a>                                                  
                        </div>
                      </div>
              </div> 
            </div> 
          </div> 

          <div id="interaction" class="row" style="display:none;">

                <div class="col-sm-12">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                    </div>
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> 
                </div>

                
          </div> 

          <div id="montanaDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_montana" class="card-title drinksText"></div>
                          <div id="subTitle_montana" class="card-subtitle drinksText"></div>
                          <div id="description_montana" class="card-text drinksText"></div>   
                        <a href="https://en.wikipedia.org/wiki/Mineral_water" class="btn btn-primary btn-responsive">Visit Agua Montana</a>                 
                      </div>
                  </div>
              </div>
          </div> 

          <div id="limonDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_limon" class="card-title drinksText"></div>
                          <div id="subTitle_limon" class="card-subtitle drinksText"></div>
                          <div id="description_limon" class="card-text drinksText"></div>  
                        <a href="https://en.wikipedia.org/wiki/Lemon" class="btn btn-primary btn-responsive">Visit Agua Limon</a>                 
                      </div>
                  </div>
              </div>
          </div> 

          <div id="fresaDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_fresa" class="card-title drinksText"></div>
                        <div id="subTitle_fresa" class="card-subtitle drinksText"></div>
                        <div id="description_fresa" class="card-text drinksText"></div>  
                        <a href="https://en.wikipedia.org/wiki/Strawberry" class="btn btn-primary btn-responisve">Visit Agua Fresa.</a>                 
                      </div>
                  </div>
              </div>
          </div>

      </div>
      
      <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                <p><span class="align-baseline">&copy 2022 Cameron Edmiston Web 3D Apps</span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                  <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav> 

      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                  <h4 class="modal-title">My Contact Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  <p>Cameron Edmiston <br> Email: cope20@sussex.ac.uk</p>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>

      <script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/fontawesome-all.min.js"></script>
      <script src="../application/js/custom.js" crossorigin="anonymous"></script>
      <script src="../application/js/swap_restyle.js"></script>
      <script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
      <script type="text/javascript" src="../application/js/gallery_generator.js"></script>
      <script src="../application/js/getJsonData.js"></script>
      <script src="../application/js/modelInteractions.js"></script>
      <script src="../application/js/jquery.fancybox.min.js"></script>
  </body>
</html>