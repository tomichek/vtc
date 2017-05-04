// revoir la localisation ile de franc e marche pas... 
// revoir comment trier par ville 

console.log("kikou "+data['date']);
console.log("kikou "+data['villes']);
var villes = data['villes'];
var date = data['date'];
villes = ['75001']
//var repartion_events = {};
// objet pour recuperer les données 

// boucle sur chaque communne voulu car code postaux chelou 
// rajouter traitement paris et ile de france et les trier dans les villes existante.
//console.log(villes.length);
function getEventsByCity (villes,date){
  var repartion_events = {};
  for(i = 0 ; i < villes.length ; i++){
    var oArgs = {
      app_key: "Hd8K3jsXgcg8DRfx" ,
      where: "France, "+villes[i],
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
            var events = {
              "description": kikou[index]['description'],
              "image": kikou[index]['image'], 
              "latitude": kikou[index]['latitude'],
              "longitude": kikou[index]['longitude'],
              "postal_code": kikou[index]['postal_code'],// faire un traitement ici si null avec latitude longitude
              "start_time": kikou[index]['start_time'],
              "stop_time": kikou[index]['stop_time'],
              "title": kikou[index]['title'],
              "url": kikou[index]['url'],
              "venue_address": kikou[index]['venue_address'],
              "venue_name": kikou[index]['venue_name'],
              "venue_url": kikou[index]['venue_url']
            };
            // rajouter l'objet dans le tableau de la ville 
            eventsByCity.push(events);   
            ville = kikou[index]['postal_code'];  
          }); 
            // console.log(eventsByCity);
            // console.log(ville);
            
            repartion_events[ville] = eventsByCity;        
            //console.log(vil +" = "+ eventsByCity);
        }
      }
    }); 
    // console.log(repartion_events);
  }
  // console.log(repartion_events['75001'] );

return data;
}
var datas = getEventsByCity(villes,date);

//console.log(repartion &&  repartion['75001'] );
//console.log(repartion['ville-75001']);

/*
$('').each(function(repartition){
    var idville = $(this).attr('id');
    var ville = $(this).text();
    // console.log("idville: "+ idville +" ville: "+ ville);
    $("#modal-"+ idville +" .modal-title").text("Liste des évènements pour "+ ville+ " le :"+d );
    var oArgs = {
      app_key: "Hd8K3jsXgcg8DRfx" ,
      where: "France, "+ville,
      date: d, 
      sort_order: "popularity",
      page_size: "200",
      // category : 'sports'
    };
          // console.log(oArgs);
          EVDB.API.call("/events/search", oArgs, function(oData) {
            //console.log(typeof oData['events']['event']);

            if(oData['events'] != null){
            if (oData['events']['event'] != null){
              if(repartition['laville-'+idville] != null){
                repartition['laville-'+idville] += 1;
              }
              else{
                repartition['laville-'+idville] = 1;
              }
              
              console.log(repartition);
              var kikou = oData['events']['event'];
              //console.log(kikou);
              $("#modal-"+ idville +" .modal-body").empty();
              $.each(kikou, function( index, value ) {
                // console.log(kikou[index]['description']);
                var description = kikou[index]['description'] ? kikou[index]['description'] : "No descirption ";
                var title_events =  kikou[index]['title'] ? kikou[index]['title'] : " No titlre"  ;
                var start_events =  kikou[index]['start_time'] ? kikou[index]['start_time'] : "No start time " ;
                var end_events =  kikou[index]['stop_time'] ? " To "+kikou[index]['stop_time'] : " No end time ";
             
             $("#modal-"+ idville +" .modal-body").append("<p class='events'>"+title_events+ " date: "+start_events +" "+ end_events+"</p><br>");
             });
            } 
            }   

          });
         console.log(repartition);

  });

      // je colorise le backgroud des cellules pou voir les communu le splus interessante
 function repartitionColors () {
    var allevents = $('.events').length;
    //console.log(' all events :' +allevents);
    $('.eventsByCity').each(function(){
      var id = $(this).attr('id');
      //var id =$(this).parent().parent().parent().parent().attr('id');
      //var closest = $(this).closest('[id]').attr('id');
      //console.log("id ville : "+ id);
      var idparent= id.split('-');
      //console.log("id celluel : "+ idparent[1]);
      var nbreventsparvile = $(this).hasClass("events").length;
      //console.log("nbr evenment pour la ville :"+idparent[1] + " "+ nbreventsparvile );
    });
  //var repartition = [];
  // $('.events').each(function(){
  //   var id =$(this).parent().parent().parent().parent().attr('id');
  //   var closest = $(this).closest('[id]').attr('id');
  //   console.log("id parent : "+ id);
  //   var idparent= id.split('-');
  //   console.log("id celluel : "+ idparent[1]);
  //   //$(this).parent().parent().parent().parent().css( "background-color", "red" );
  //   var nbrEventsVille = $(this).length ;
  //   var reparti = (nbrEventsVille/allevents)*100;
  //   console.log(" nbreventville : "+nbrEventsVille+" / allevents "+allevents +" * 100  = reparti " + reparti);
  //    switch(reparti){
  //             case reparti > 75:
  //               $(this).css({ "background-color": "red"});
  //               break;
  //             case reparti > 50:
  //               $(this).css({ "background-color": "orange"});
  //               break;
  //             case reparti > 35:
  //               $(this).css({ "background-color": "yellow"});
  //               break;
  //             case reparti > 25:
  //               $(this).css({ "background-color": "blue"});
  //               break;
  //             case reparti > 15:
  //               $(this).css({ "background-color": "green"});
  //               break;
  //             case reparti > 5:
  //               $(this).css({ "background-color": "grey"});
  //               break;

  //           }
  //           repartition.push(reparti);  
  //         });
  //         console.log(repartition);
}
          //setTimeout(repartitionColors, 5000);

          */
          
