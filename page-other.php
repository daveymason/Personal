<?php get_header();?>

<div class="container-fluid" id="projectsOtherIntro">
        <div class="row">
            <div class="col-sm-12 text-center">
                <i class="fas fa-file-code projectsIntroIcon"></i>
                <h1 class="display-2">Other</h1>
                <p>Having fun with code</p>
                <a href="#websitesRow">
                    <i class="fas fa-arrow-down projectsIconIntro"></i>
                </a>
            </div>
        </div>     
</div> <!-- #Intro -->
<!-- FP: This next part should be a post loop -->
<div class="container-fluid" id="projectsContainer">
    <div class="row" id="websitesRow">
        <div class="col-sm-12 text-center">
            <div class="card bottomMargin cardNav">
                
                <div class="card-header headerNav">
                    <h2><a href="https://daveymason.com/projects/other/nasa-potd">NASA Picture of the day</a> - Stunning imagery, changes daily! </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-4">
                        <a target="_blank" href="https://daveymason.com/projects/other/nasapotd"><img class="img-responsive paddedText hvr-float-shadow bottomMargin" src="https://daveymason.com/wp-content/themes/Personal/Images/projectsOtherNasaThumb.jpg" alt="Davey Mason" width="75%" height="auto"></a>
                        </div>

                        <div class="col-xs-12 col-md-5 d-flex align-items-center text-center">
                            <p class="paddedText"> See a beautiful image chosen by NASA every day. This project leverages the NASA API to display the image. All formatting was done in HTML, CSS & Bootstrap. Php was used to help the page display as part of the WordPress ecosystem. </p>
                        </div>
                        <div class="col-xs-12 col-md-3 d-flex align-items-center gamesCenterButton">
                            <a class="btn btn-projectsWebsites btn-lg" href="https://daveymason.com/projects/other/nasapotd" role="button">View >></a>                      
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div> <!-- id="websitesRow" -->
    

</div> <!-- id="projectsContainer" -->

<hr class="otherProjectsSplit">

<div class="container-fluid" id="projectOtherContainer">
    <div class="row" id="whiteText">
        <div class="col-sm-12 text-center bottomMargin">
            <h2 class="display-3">Other Projects</h1>
            <p> Check out some of my websites and other projects </p>
        </div>
    </div>
    
    <div class="row" id="whiteText">
        <div class="col-sm-6 col-xs-12">
          <div class="card text-center transparent topMargin bottomMargin">
            <div class="card-header transparent">
              <i class="fas fa-laptop pageDevelopIcon hvr-float-shadow"></i>
              <br>
            </div>
            <div class="card-body">
            <h2>Websites</h2>
              <p class="card-title">Take a look at some of my websites.</p>
              <p><a class="btn btn-projects btn-lg" href="https://daveymason.com/projects/websites" role="button">Let's Go >></a></p>
            </div>
          </div> <!-- card -->
        </div> <!-- col-sm-4 -->

        <div class="col-sm-6 col-xs-12">
          <div class="card text-center transparent topMargin bottomMargin">
            <div class="card-header transparent">
              <i class="fas fa-gamepad pageDevelopIcon hvr-float-shadow"></i>
              <br>
            </div>
            <div class="card-body">
            <h2>Games</h2>
              <p class="card-title">Take a look at some of my games.</p>
              <p><a class="btn btn-projects btn-lg" href="https://daveymason.com/projects/games" role="button">Let's Go >></a></p>
            </div>
          </div> <!-- card -->
        </div> <!-- col-sm-6 -->
    </div> <!--row-->
</div> <!-- projectsContainer -->

<hr class="projectsContactSplit">

<?php get_footer();?>