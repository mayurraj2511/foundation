function loadData() {
    alert('ok');
        $.ajax({
            url:'backend/load_users-process.php',
            method:'POST',
            data:{"type": "012"},
            beforeSend: function(){
                $('.loader').show();
            },
            success: function(res){
                $('.loader').hide();
                var data = jQuery.parseJSON(res);
                console.log(data);
                
                // var data_table = "";
                // $("#AllAdminList").html();
                // var x = 1;
                // for(i=0;i<data.length; i++){
                //     var presentStatus = data[i][7] == 1? 'checked' : '';
                //     data_table += ` <tr>
                //     <th scope="row">${x}</th>
                //     <td>${data[i][2]}</td>
                //     <td>${data[i][3]}</td>
                //     <td>${data[i][6]}</td>
                //     <td><div class="form-check form-switch">
                //     <input class="form-check-input" type="checkbox" onchange="DisableAdmin(${data[i][0]} , ${data[i][7]})" role="switch" id="flexSwitchCheckDefault${x}" ${presentStatus}>
                //         </div></td>
                //     </tr>`;
                //     x++;
                // }
                // $("#AllAdminList").html(data_table);
            }
        });
    
}


function loadUsers() {
    $.ajax({
        url : 'backend/load_users-process.php' ,
        method : 'GET' ,
        success : function ( res ) {
            $("#res").html(res);
        }
    });
}