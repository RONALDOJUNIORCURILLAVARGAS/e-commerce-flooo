$(document).ready(function()
        {
            $("#btncambiar1").click(function()
            {
              var opc=$('#btncambiar1').val();
             $("#form").attr('action','../../controladores/controlador_inicio.php');
             $("#form").attr('method','GET');
             $('input[name=op]').val(opc);
             $("#form").submit();
            });
            
            $("#btncambiar2").click(function()
            {
              var opc=$('#btncambiar2').val();
             $("#form").attr('action','../../controladores/controlador_inicio.php');
             $("#form").attr('method','GET');
             $('input[name=op]').val(opc);
             $("#form").submit();
            });
            
             $("#btncambiar3").click(function()
            {
              var opc=$('#btncambiar3').val();
             $("#form").attr('action','../../controladores/controlador_inicio.php');
             $("#form").attr('method','GET');
             $('input[name=op]').val(opc);
             $("#form").submit();
            });
            
             $("#btncambiar4").click(function()
            {
              var opc=$('#btncambiar4').val();
             $("#form").attr('action','../../controladores/controlador_inicio.php');
             $("#form").attr('method','GET');
             $('input[name=op]').val(opc);
             $("#form").submit();
            });
            
             $("#btncambiar5").click(function()
            {
              var opc=$('#btncambiar5').val();
             $("#form").attr('action','../../controladores/controlador_inicio.php');
             $("#form").attr('method','GET');
             $('input[name=op]').val(opc);
             $("#form").submit();
            });
            
             $("#btncambiar6").click(function()
            {
               var opc=$('#btncambiar6').val();
             $("#form").attr('action','../../controladores/controlador_inicio.php');
             $("#form").attr('method','GET');
             $('input[name=op]').val(opc);
             $("#form").submit();
            });
        });
        