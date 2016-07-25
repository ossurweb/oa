   
    <footer id="footerWrapper" class="footer2">
    <section id="mainFooter">
        <div class="container">
            <div class="row">
            
                <div class="col-md-2 col-md-offset-1 col-xs-6">
                    <div class="footerWidget">
                        <h3>Get a brace</h3>
                        <ul class="list-unstyled worksList">
                            <li><a href="#" class="tips" title="">Find a Practitioner</a></li>
                            <li><a href="#" class="tips" title="">Request More Information</a></li>
                            <li><a href="#" class="tips" title=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="footerWidget">
                        
                        <h3>Learn more</h3>
                        <ul class="list-unstyled worksList">
                            <li><a href="#" class="tips" title="">Braces</a></li>
                            <li><a href="#" class="tips" title="">FAQs</a></li>
                            <li><a href="#" class="tips" title="">Success Stories</a></li>
                        </ul>
                        
                    </div>
                </div>
                
                <div class="col-md-2 col-xs-6">
                    <div class="footerWidget">
                        <h3>Company</h3>
                        <ul class="list-unstyled worksList">
                            <li><a href="#" class="tips" title="">About Össur</a></li>
                            <li><a href="#" class="tips" title="">Össur Corporate</a></li>
                            <li><a href="#" class="tips" title="">Other Össur Sites</a></li>
                        </ul>
                    </div>
                </div>
            
                    <div class="col-md-2 col-xs-6">
                    <div class="footerWidget">
                        <h3>Össur americas</h3>
                        <ul class="list-unstyled worksList">
                            <li><a href="#" class="tips" title="">Toll Free: 800-233-6263</a></li>
                            <li><a href="#" class="tips" title="">Phone: 949-382-3883</a></li>
                            <li><a href="#" class="tips" title="">Fax: 800-831-3160</a></li>
                            <li><a href="#" class="tips" title="">ossurusa@ossur.com</a></li>
                        </ul>
                    </div>
                </div>
                    <div class="col-md-2 col-xs-6">
                    <div class="footerWidget">
                        <h3>Össur Canada</h3>
                        <ul class="list-unstyled worksList">
                            <li><a href="#" class="tips" title="">Toll Free: 800-663-5982</a></li>
                            <li><a href="#" class="tips" title="">Phone: 604-241-8152</a></li>
                            <li><a href="#" class="tips" title="">Fax: 866-441-3880</a></li>
                            <li><a href="#" class="tips" title="">ossurcanada@ossur.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="footerRights">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-12">
                    <ul class="socialNetwork">
                        <li><a href="#" class="tips" title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
                        <li><a href="#" class="tips" title="follow me on Twitter"><i class="icon-twitter-bird iconRounded"></i></a></li>
                        <li><a href="#" class="tips" title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
                        <li><a href="#" class="tips" title="follow me on Linkedin"><i class="icon-linkedin-1 iconRounded"></i></a></li>
                        <li><a href="#" class="tips" title="follow me on Dribble"><i class="icon-dribbble iconRounded"></i></a></li>
                    </ul>     
                </div> -->
                <div class="col-md-10 col-md-offset-1 footer-rights-bottom">
                    <p><a href="#" target="">Sitemap</a><a href="#" target="">Privacy Policy</a><a href="#" target="">Terms of use</a>Össur americas © 2016 </p>
                </div>
            </div>
        </div>
    </section>
</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
     <script src="../js/auto-hiding-navbar.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/ekko-lightbox.js"></script> 

    <script> 
    $(".navbar-fixed-top").autoHidingNavbar();
    </script>
    
    <!-- store locator specific -->
    <script src="assets/js/libs/handlebars.min.js"></script> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBosJjLKnJ8uUIdnc2Rm39inPQj2JluDXM&v=3.exp&libraries=places&region=US"></script>
    <script src="assets/js/plugins/storeLocator/jquery.storelocator.js"></script> 


   
      <script>

     
                        
                
        $(function() {
                    $('#bh-sl-map-container').storeLocator({
                        'maxDistance': true,
                        'autoGeocode': true,
                        'mapSettings' : {
                            zoom : 12,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            disableDoubleClickZoom: true,
                            scrollwheel: false,
                            navigationControl: true,
                            draggable: true

                        }
                    });
                    
        });

//Contain to a specific region
(function($) { $(document).ready(function() { var autocomplete; var geocoder; var input = document.getElementById('bh-sl-address'); var options = { componentRestrictions: {'country':'us'}, types: ['(regions)'] }; autocomplete = new google.maps.places.Autocomplete(input,options); }); })(jQuery);


 $( "#bh-sl-find" ).click(function() {
        $('#bh-sl-map-container').storeLocator({
                        'autoGeocode': true,
                        'mapSettings' : {
                            zoom : 12,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            disableDoubleClickZoom: true,
                            scrollwheel: false,
                            navigationControl: false,
                            draggable: true

                        }
                    });
});

//hide/show adresslist in mobile
$( "#show-list" ).hide();
 $( ".toggle-list" ).click(function() {
    $( ".bh-sl-loc-list" ).toggle();
});
//toggle show/hide list button
  $( "#hide-list" ).click(function() {
   $( "#hide-list" ).toggle();
    $( "#show-list" ).toggle();

});

   $( "#show-list" ).click(function() {
   $( "#hide-list" ).toggle();
    $( "#show-list" ).toggle();

});
      </script>
  </body>
</html>
