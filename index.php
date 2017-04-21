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
      <div class="text-center">
          <h1 class='text-primary'>Vtc Helper</h1>
           <div class='col-sm-3'>
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
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

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
  <div id="mapid" class="col-md-offset-4" style='width: 600px; height: 350px;'></div>
  <br>
  <div id='map'class="col-md-offset-4" style='width: 600px; height: 350px;'></div>
   <div id="fantome"></div>
  <br>
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
    $('.nbr').html($( "p .even" ).length); 
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

/*function callApi2(data){
  console.log("kikou");
  // revoir la localisation ile de franc e marche pas... 
  // revoir comment trier par ville 

  console.log("kikou2 "+data['date']);
  console.log("kikou 2"+data['villes']);
  var villes = data['villes'];
  var date = data['date'];
  var repartion_events = {};
  var oArgs = {
      app_key: "Hd8K3jsXgcg8DRfx" ,
      where: "France, Paris",
      date: date, 
      sort_order: "popularity",
      page_size: "400",
    //category : 'sports'
  };
    //console.log(oArgs);
  
  EVDB.API.call("/events/search", oArgs, function(oData) {
    //console.log(oData);
    // console.log(typeof oData['events']['event']);
    if(oData['events'] != null){
      if (oData['events']['event'] != null){
        var kikou = oData['events']['event'];
        //console.log(kikou);
        // tableau qui sera pusher sur la lobject liste villes pour avoir une repartion par ville des evenements
        var eventsByCity = new Array;
        $.each(kikou, function( index, value ) {
            ville = kikou[index]['postal_code'];
            if(ville){               
              $('#modal-'+ville +' .modal-body').append(
                      $('<p/>')
                          .html("description"+ kikou[index]['description']+
                                "image"+ kikou[index]['image'] +
                                "latitude"+ kikou[index]['latitude']+
                                "longitude"+ kikou[index]['longitude']+
                                "postal_code"+ kikou[index]['postal_code']+             
                                "start_time"+ kikou[index]['start_time']+
                                "stop_time"+ kikou[index]['stop_time']+
                                "title"+ kikou[index]['title']+
                                "url"+ kikou[index]['url']+
                                "venue_address"+ kikou[index]['venue_address']+
                                "venue_name"+ kikou[index]['venue_name']+
                                "venue_url"+ kikou[index]['venue_url'])
                          .append('<br>')
              );  
            }
        });
      }
    }
  }); 
}*/
/*$(document).ready(function(){
      // recupere la liste des villes 
      var town_list = ['75001','75002','75003','75004','75005','75006','75007','75008','75009','75010','75011','75012','75013','75014','75015','75016','75017','75018','75019','75020'];
      //console.log(town_list);
      // initialise de datepicker recupere d qui est la date du jour pour lancer la 1er fois avec la date du jour
      // sur le changement de date la nouvelle date est pris en compte et la function de recueprations des données 
      //est relancé
      var d = $('#datetimepicker').datepicker({
        onSelect: function() {
          // nouvelle date
          d = $(this).val();
         // console.log('date choisi '+d);
          //getAPIrslt(date_choosen);
          // redefini lodject avec la nvlle date
          data = {
            date: d,
            villes: town_list 
          };
          // relance la function pour recuperer les données sur la nouvelle date
          callApi2(data);
        },
        dateFormat: 'yymmdd00-yymmdd00'
      }).val();

      //console.log('final ' + d);
      // YYYYMMDD00-YYYYMMDD00
      // données pour le 1er chargement
      data = {
        date: d,
        villes: town_list 
      };
      // console.log(data);
      // appelle pour la 1er chargement
      callApi2(data);

  }); */
// initialiser la carte sur paris zoom sur ile de france complete
var mymap = L.map('mapid').setView([48.856614, 2.352222], 11);

// initialise la carte defini sur la site mapbox avec els parametre voulu
L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoidG9taWNoZWsiLCJhIjoiY2oxb29oM3FyMDAzZTJxbW5jOHNpODNiayJ9.evcZSeAyL7IaGMkxnbMBgA', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    maxZoom: 18,
    minZoom: 9,
    id: 'mapbox.mapbox-traffic-v1',
    accessToken: 'pk.eyJ1IjoidG9taWNoZWsiLCJhIjoiY2oxb29oM3FyMDAzZTJxbW5jOHNpODNiayJ9.evcZSeAyL7IaGMkxnbMBgA'
}).addTo(mymap);
mymap.locate({setView: true, maxZoom: 11});
function onLocationFound(e) {
    var radius = e.accuracy / 2;

    L.marker(e.latlng).addTo(map)
        .bindPopup("You are within " + radius + " meters from this point").openPopup();

    L.circle(e.latlng, radius).addTo(map);
}

map.on('locationfound', onLocationFound);

//combiner les deux en un filtre ou trouver une solution pour cohabiter les marker evenement et le les zone pour mon 
// a voir au clique d'une zone liste les evenement  



// rajout d'une zone pour voir le nombre devenement par commune



// mapboxgl.accessToken = 'pk.eyJ1IjoidG9taWNoZWsiLCJhIjoiY2oxb29oM3FyMDAzZTJxbW5jOHNpODNiayJ9.evcZSeAyL7IaGMkxnbMBgA';
// var map = new mapboxgl.Map({
// container: 'map',
// style: 'mapbox://styles/mapbox/streets-v10'
// });




</script>

