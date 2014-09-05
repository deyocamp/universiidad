$(document).ready(function(){
    $('#cb_op').menu();
    $("#calc").dialog({
      modal:true,
      autoOpen:true,
      width:600,
      buttons:{
          ok:function(){
              if(!Guardar())
                  return;
              $(this).dialog('close');
          
          }
      }
    });
    $('#form_test').submit(function (e)
    {
       if($('#cb_op option:selected').val() === '1') 
       {
            alert('mamo');
            e.preventDefault();
       }
    });
});

function Guardar()
{
    if($('#txt_Nombre').val() === '')
        return false;
    var Recuest = {'Nombre':$('#txt_Nombre').val() };
    $.ajax({
       url:'saludo.php' ,
       data:Recuest,
       type:'post',
       datatype:'html',
        success: function(data) {
          var jsonX = JSON.parse(data);
          $('#Recolector').html(jsonX['data']);
          alert(jsonX['saludo']);
        }
    });
}


