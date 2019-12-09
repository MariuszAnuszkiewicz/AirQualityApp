
   function researchParams(url, buttonId, arr) {

       $.ajax({
           url: url,
           type: 'GET',
           dataType: 'json',

           success: function (data) {
               var content = '<table class="table">';
               var result = '';
               var label = 'Badane Parametry';
               for (var i = 0; i < data.length; i++) {
                   result += JSON.stringify(data[i].param.paramName);
               }
               content += '<thead class="thead-dark">';
               content += '<tr>';
               content += '<th class="text-center">Id</th>';
               content += '<th class="text-center">' + label + '</th>';
               content += '</tr>';
               content += '</thead>';
               content += '<tbody>';
               content += '<tr>';
               content += '<td class="text-center">' + buttonId + '</td>';
               content += '<td class="text-center">' + result.replace(/\"/g, "&nbsp") + '</td>';
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
                   $('.research-params-table').append(content).css({display: 'block'});
                   $('.cl1').css({display: 'block'});
               }
           }
       });
   }
