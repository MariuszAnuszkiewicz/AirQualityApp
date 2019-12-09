
   function qualityAir(url, buttonId, arr) {

       $.ajax({
           url: url,
           type: 'GET',
           dataType: 'json',

           success: function (data) {
               var content = '<table class="table quantity-air">';
               var result = '';
               var label = 'Współczynnik Indeksu Powietrza';
               result += JSON.stringify(data.stIndexLevel.indexLevelName);
               content += '<thead class="thead-dark">';
               content += '<tr>';
               content += '<th class="text-center">Id</th>';
               content += '<th class="text-center">' + label + '</th>';
               content += '</tr>';
               content += '</thead>';
               content += '<tbody>';
               content += '<tr>';
               content += '<td class="text-center">' + buttonId + '</td>';
               content += '<td class="text-center">' + result.replace(/\"/g, " ") + '</td>';
               content += '</tr>';
               content += '</tbody>';
               content += '</table>';
               arr.push(buttonId);
               var doubleValue = arr.filter(function(value){
                   return value === buttonId;
               }).length;

               if (doubleValue > 1) {
                   return false;
               } else {
                   console.log(arr);
                   $('.quantity-air-table').append(content).css({display: 'block'});
                   $('.cl2').css({display: 'block'});
               }
           }
       });
   }
