$(function(){


    if($("#head-container-index").length > 0){
     $.ajax({
        url: 'http://eonet.sci.gsfc.nasa.gov/api/v2.1/events',
       error: function() {
           $('#info').html('<p>An error has occurred</p>');
        },
        dataType: 'json',
        type: 'GET',
        success: function(data) {
           var count = data.events.length;
           var i=0;
           while (count > i) {
                 $('#head-container-index').append('<div class="card-panel white news-container"><div class="row"><div class="col s6 l5"><h5><a href="#" class="title">'+data.events[i].title+'</a></h5></div><div class="col s6 l7"><p class="time">'+data.events[i].geometries[0].date+' </p></div><div class="col l12"><p class="big">'+data.events[i].description+'</p></div></div></div>');
                i++;
             }
        }
     });
     }
     if($("#head-container-category").length > 0){
       function getUrlVars()
        {
            var vars = [], hash;
            var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
            for(var i = 0; i < hashes.length; i++)
            {
                hash = hashes[i].split('=');
                vars.push(hash[0]);
                vars[hash[0]] = hash[1];
            }
            return vars;
        }
        var me = getUrlVars()["category"];
      $.ajax({
         url: 'http://eonet.sci.gsfc.nasa.gov/api/v2.1/events',
        error: function() {
            $('#info').html('<p>An error has occurred</p>');
         },
         dataType: 'json',
         type: 'GET',
         success: function(data) {
            var count = data.events.length;
            var i=0;
            while (count > i) {
              var cat=data.events[i].categories[0].id;
              if (cat==me) {
                $('#head-container-category').append('<div class="card-panel white news-container"><div class="row"><div class="col s6 l5"><h5><a href="article.php?fullinfo='+data.events[i].id+'"class="title">'+data.events[i].title+'</a></h5></div><div class="col s6 l7"><p class="time">'+data.events[i].geometries[0].date+'</p></div><div class="col l12"><p class="big">'+data.events[i].description+'</p></div></div></div>');
              }
                 i++;
              }
         }
      });
      }
      if($("#full").length > 0){
        function getUrlVars()
         {
             var vars = [], hash;
             var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
             for(var i = 0; i < hashes.length; i++)
             {
                 hash = hashes[i].split('=');
                 vars.push(hash[0]);
                 vars[hash[0]] = hash[1];
             }
             return vars;
         }
         var me = getUrlVars()["fullinfo"];
       $.ajax({
          url: 'http://eonet.sci.gsfc.nasa.gov/api/v2.1/events',
         error: function() {
             $('#info').html('<p>An error has occurred</p>');
          },
          dataType: 'json',
          type: 'GET',
          success: function(data) {
             var count = data.events.length;
             var i=0;
             while (count > i) {
               var cat=data.events[i].id;
               if (cat==me){
                 $("#titles").html(data.events[i].title);
                 $("#date").html(data.events[i].geometries[0].date);
                 $("#description").html(data.events[i].description);
                 var o = 0;
                 if(data.events[i].geometries[0].type=="Point"){
                  while(data.events[i].geometries.length > o ){


                    o++;
                  }
                }
                 else{
                   console.log(data.events[i].geometries[0]);
                 }
               }
                  i++;
               }
          }
       });
       }
     $.ajax({
       url: "http://eonet.sci.gsfc.nasa.gov/api/v2.1/categories",
       dataType: 'json',
       type: "GET",
       success: function(data){
         var i = 0
         while(data.categories.length > i){
          $("#categories").append("<a href='category.php?category="+data.categories[i].id+"' class='collection-item'>"+data.categories[i].title+"</a>");
          i++;
         }
       }
     });
});
