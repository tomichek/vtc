<?php 

echo "
//console.log(data);
(function getEventsByCity (){
	//console.log(data);
	var villes = ['75001','75002','75003','75004','75005','75006','75007','75008','75009','75010','75011','75012','75013','75014','75015','75016','75017','75018','75019','75020'];
	var date = $('#datetimepicker').datepicker({
        dateFormat: 'yymmdd00-yymmdd00'
      }).val();
	console.log(villes);
	console.log(date);
  var repartion_events = {};
  for(i = 0 ; i < villes.length ; i++){
    var oArgs = {
      app_key: 'Hd8K3jsXgcg8DRfx' ,
      where: 'France, '+villes[i],
      date: date, 
      sort_order: 'popularity',
      page_size: '400',
    };
    //console.log(oArgs);
  
    EVDB.API.call('/events/search', oArgs, function(oData) {
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
              $('#modal-'+ville).append(
                      $('<p/>')
                        .append('<span/>')
                          .html('description'+ kikou[index]['description']+
                                'image'+ kikou[index]['image'] +
                                'latitude'+ kikou[index]['latitude']+
                                'longitude'+ kikou[index]['longitude']+
                                'postal_code'+ kikou[index]['postal_code']+             
                                'start_time'+ kikou[index]['start_time']+
                                'stop_time'+ kikou[index]['stop_time']+
                                'title'+ kikou[index]['title']+
                                'url'+ kikou[index]['url']+
                                'venue_address'+ kikou[index]['venue_address']+
                                'venue_name'+ kikou[index]['venue_name']+
                                'venue_url'+ kikou[index]['venue_url'])
                    );  
              } 
          }); 
        }
      }
    }); 
  }

return repartion_events;
})();

";
?>
