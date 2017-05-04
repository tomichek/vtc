
(function getEventsByCity (){
   // recupere la date voulu
  var date = $('#datetimepicker').datepicker({ dateFormat: 'yymmdd00-yymmdd00'}).val();
  // debug
  // console.log(date);
  var oArgs = {
      app_key: 'Hd8K3jsXgcg8DRfx' ,
      where: 'Paris',
      within: '55',
      date: date, 
      sort_order: 'popularity',
      page_size: '400',
    };
  
    EVDB.API.call('/events/search', oArgs, function(oData) {
     //console.log(oData);
      // console.log(typeof oData['events']['event']);
      if(oData['events'] != null){
        if (oData['events']['event'] != null){
          var kikou = oData['events']['event'];
          //console.log(kikou);
          $.each(kikou, function( index, value ) { 
            var ville = kikou[index]['postal_code'];
            // rajout de marker pour sur les adresses des evenements
            if(kikou[index]['latitude'] && kikou[index]['longitude']){
              var marker = L.marker([kikou[index]['latitude'], kikou[index]['longitude']]).addTo(mymap);
              marker.bindPopup(
                'lieu : ' +kikou[index]['venue_name'] + 
                '<br> start : ' + kikou[index]['start_time'] + ' End : ' +kikou[index]['stop_time'] + 
                '<br> description : '+ kikou[index]['description'] +
                '<br><a href="#"">' +kikou[index]['venue_address']+ '<a/>'
              );
            }
            else if (!(kikou[index]['latitude'] && kikou[index]['longitude']) && kikou[index]['postal_code'] ){
                // 
                console.log ('j ai pas de lat et long mais un postal code');

            }
            // Si ville prise en compte 
            // Amlerioation si pas de ville lat/long a voir si un solution global c pas mieux
            if(ville){    
              // ajout dasn le talbeau solution finale tous sur la carte c'est mieux               
               $('#modal-'+ville +' .modal-body').append(
                      $('<p/>')
                          .attr('class', 'even')
                          .html('description : '+ kikou[index]['description']+
                                'image : '+ kikou[index]['image'] +
                                'latitude : '+ kikou[index]['latitude']+
                                'longitude : '+ kikou[index]['longitude']+
                                'postal_code : '+ kikou[index]['postal_code']+             
                                'start_time : '+ kikou[index]['start_time']+
                                'stop_time : '+ kikou[index]['stop_time']+
                                'title : '+ kikou[index]['title']+
                                'url : '+ kikou[index]['url']+
                                'venue_address : '+ kikou[index]['venue_address']+
                                'venue_name : '+ kikou[index]['venue_name']+
                                'venue_url : '+ kikou[index]['venue_url']
                                )
                    );  
            } 
            
          }); 
        }
      }
    }); 
return false;
})()