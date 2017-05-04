<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="vtc helper">
    <meta name="author" content="tom fournier">


    <title>VTC Helper</title>

    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <!-- Optional theme -->
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="custom.css">

   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
   <script src='https://api.mapbox.com/mapbox-gl-js/v0.35.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.35.1/mapbox-gl.css' rel='stylesheet' />

  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-2 col-lg-2" style="background-color: red;">
          <div class="form-group">
            <div class='input-group date' id='datetimepicker' >
              <input id="picker" name='pikcer' type='text' class=" ui-datepicker ui-widget 
                  ui-widget-content ui-helper-clearfix ui-corner-all" />
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
          </div>
        </div> 
        <div class="col-xs-8 col-lg-8">
          <h1 class="text-primary text-center">Vtc Helper</h1>
        </div>  
        <div class="col-xs-8 col-lg-8" style='background-color: red;'>
          <div id="mapid" style='height: 600px;background-color: red;'></div>
        </div> 
      </div>
    </div>
    <div class="container">
<!--     
          <p class="lead">Carte PARIS</p>
          <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
            <th class="text-center" colspan="10">Imitation carte PARIS</th>
            </thead>
            <tbody>
              <tr>
              <td id="75001" class="town" data-toggle="modal" data-target="#modal-75001" >75001</td>
              <td id="75002" class="town" data-toggle="modal" data-target="#modal-75002" >75002</td>
              <td id="75003" class="town" data-toggle="modal" data-target="#modal-75003" >75003</td>
              <td id="75004" class="town" data-toggle="modal" data-target="#modal-75004" >75004</td>
              <td id="75005" class="town" data-toggle="modal" data-target="#modal-75005" >75005</td>
              <td id="75006" class="town" data-toggle="modal" data-target="#modal-75006" >75006</td>
              <td id="75007" class="town" data-toggle="modal" data-target="#modal-75007" >75007</td>
              <td id="75008" class="town" data-toggle="modal" data-target="#modal-75008" >75008</td>
              <td id="75009" class="town" data-toggle="modal" data-target="#modal-75009" >75009</td>
              <td id="75010" class="town" data-toggle="modal" data-target="#modal-75010" >75010</td>
            </tr>
            <tr>
              <td id="75011" class="town" data-toggle="modal" data-target="#modal-75011">75011</td>
              <td id="75012" class="town" data-toggle="modal" data-target="#modal-75012">75012</td>
              <td id="75013" class="town" data-toggle="modal" data-target="#modal-75013">75013</td>
              <td id="75014" class="town" data-toggle="modal" data-target="#modal-75014">75014</td>
              <td id="75015" class="town" data-toggle="modal" data-target="#modal-75015">75015</td>
              <td id="75016" class="town" data-toggle="modal" data-target="#modal-75016">75016</td>
              <td id="75017" class="town" data-toggle="modal" data-target="#modal-75017">75017</td>
              <td id="75018" class="town" data-toggle="modal" data-target="#modal-75018">75018</td>
              <td id="75019" class="town" data-toggle="modal" data-target="#modal-75019">75019</td>
              <td id="75020" class="town" data-toggle="modal" data-target="#modal-75020">75020</td>
            </tr>
            </tbody>
          </table>
          </div>
        </div>
    </div><!-- /.container -->
    <!-- Modal -->
  <div id="modal-75001" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Paris 1er nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75002" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 2eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75003" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 3eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75004" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 4eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75005" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 5eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75006" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 6eme <span class="nbr"></span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75007" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 7eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75008" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 8eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75009" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 9eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75010" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 10eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75011" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 11eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75012" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 12eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75013" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 13eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75014" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 14eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75015" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 15eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75016" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 16eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75017" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 17eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75018" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 18eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75019" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 19eme nombre d'évènements :<span class="nbr">0</span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="modal-75020" class="modal fade eventsByCity" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Paris 20eme nombre d'évènements :<span class="nbr"></span></h4>
        </div>
        <div class="modal-body">
          <p>Pas d'évenements</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  
  <div id='map'class="col-md-offset-4" style='width: 600px; height: 350px;'></div>
</body>
</html> 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://api.eventful.com/js/api"></script>
  <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>

  <script>
  // function qui llance l'apelle ajax pour recuperer le sdonnées
  function callApi(){
     $.ajax({
        url: 'events.js',
        cache: false,
        type: 'GET',
        dataType: 'script',
        success: fctSuccess,
        complete: fctComplete,
        error: function(xhr,status,erreur){ console.log(xhr.status+" "+status+" "+ erreur);},
      });
  }
  function fctComplete(arg){
    // console.log(typeof(arg));
    // console.log(arg);
  }
  function fctSuccess(arg){
    console.log(typeof(arg));
    console.log(arg);
  }

  $(document).ready(function(){
      $('#datetimepicker').datepicker({
        onSelect: function() {
          // relance la function pour recuperer les données sur la nouvelle date
          callApi();
        },
      });
      // appelle pour la 1er chargement
      callApi();

  }); 

// initialiser la carte sur paris zoom sur ile de france complete
var mymap = L.map('mapid').setView([48.856614, 2.352222], 11);

// initialise la carte defini sur la site mapbox avec els parametre voulu
L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoidG9taWNoZWsiLCJhIjoiY2oxb29oM3FyMDAzZTJxbW5jOHNpODNiayJ9.evcZSeAyL7IaGMkxnbMBgA', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    minZoom: 5,
    id: 'mapbox.mapbox-traffic-v1',
    accessToken: 'pk.eyJ1IjoidG9taWNoZWsiLCJhIjoiY2oxb29oM3FyMDAzZTJxbW5jOHNpODNiayJ9.evcZSeAyL7IaGMkxnbMBgA'
}).addTo(mymap);



//combiner les deux en un filtre ou trouver une solution pour cohabiter les marker evenement et le les zone pour mon 
// a voir au clique d'une zone liste les evenement  




</script>

