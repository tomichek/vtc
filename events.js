
(function getEventsByCity (){
  // dquelle vile il faut remplir a voir si on laiss ene dur plus secure pour le moment
  var villes = ['75001','75002','75003','75004','75005','75006','75007','75008','75009','75010','75011','75012','75013','75014','75015','75016','75017','75018','75019','75020'];
  // recupere la date voulu
  var date = $('#datetimepicker').datepicker({ dateFormat: 'yymmdd00-yymmdd00'}).val();
  // debug
  // console.log(villes);
  // console.log(date);
  // parcours le tableau des ville pour lancer ville par ville
  // Amélioration a faire ile de france complete et gere les par lat/long
  for(i = 0 ; i < villes.length ; i++){
    var oArgs = {
      app_key: 'Hd8K3jsXgcg8DRfx' ,
      where: 'France, '+villes[i],
      date: date, 
      sort_order: 'popularity',
      page_size: '400',
    };
    console.log(oArgs.where);
  
    EVDB.API.call('/events/search', oArgs, function(oData) {
     //console.log(oData);
      // console.log(typeof oData['events']['event']);

      if(oData['events'] != null){
        if (oData['events']['event'] != null){
          var kikou = oData['events']['event'];
          //console.log(kikou);
          var j = 0;
          $.each(kikou, function( index, value ) { 
            ville = kikou[index]['postal_code'];
            console.log(ville + ' '+ j  + ' ' + oArgs.where);
            //$('#modal-'+ville +' .nbr').html(j); 
            j++;  
            // rajout de marker pour sur les adresses des evenements
            
            var marker = L.marker([kikou[index]['latitude'], kikou[index]['longitude']]).addTo(mymap);
            marker.bindPopup(
              'lieu : ' +kikou[index]['venue_name'] + 
              '<br> start : ' + kikou[index]['start_time'] + ' End : ' +kikou[index]['stop_time'] + 
              '<br><a href="#"">' +kikou[index]['venue_address']+ '<a/>'

              );
            // Si ville prise en compte 
            // Amlerioation si pas de ville lat/long a voir sir un solution global c pas mieux
            if(ville){    
              // ajout dasn le talbeau
              // amélioration ajout sur la carte en meme temps    
                    
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
            else{
              console.log('No postal_code');
            }
            
          }); 
        }
      }
    }); 
  }

return false;
})()