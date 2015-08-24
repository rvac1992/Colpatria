var nit=false;
var swnit=false;
function myFunction(){
        //obtener el nit de la vista 
        var nit= $('#colpatria_folmulariobundle_formulario_nit').val(); 
        //alert("enton a comprobar el usuario= "+nit);
       // $.ajax('{{path('+colpatriafolmulario_comprobarnit+')}}',{data1: 'mydata1', data2:'mydata2'},function(response){if(response.code == 100 && response.success){}}, "json");  
      
      if(nit.length){

        var url=$('#UrlAjax').val();      

         $.ajax({
          type:"POST",
          dataType: "json",
          url:url,    
          data: {nitForm: nit},      
          success: function(data){       
          
           //alert("CASEA= "+data['Validacion']);
            if(data['Validacion']==true){
              alert("NIT introducido ya existe");
              swnit=false;
              $('#trNit').removeClass();
              $('#trNit').addClass("alert alert-danger");

            }else{
             // alert("Nit Valido");
              $('#trNit').removeClass();
              $('#trNit').addClass("alert alert-success");
              swnit=true;
            }
          }
         });    

       }

}


function ActualizarDepartamento(){
   var  idDepartamento= $('#departamentos').val(); 
   if(idDepartamento!=0){
    var ciudadSelect=$('#ciudad option');
    ciudadSelect.remove();
    var url=$('#UrlAjaxMunicipio').val();
    //alert("La url Es "+url);
    $.ajax({
      type:"POST",
      dataType: "json",
      url:url, 
      data: {idDepa: idDepartamento},
      success: function(data){      
          //alert(data['nombres']);
        
          ciudadSelect.remove();
          //  alert("1 ..."+data['nombes'][1]);
           $('#ciudad').append($('<option>',{
            value: "",
            text:  "Selecione una Ciudad"
          }));


          for (var i=0;i<data['ids'].length;i++) {
           // alert("Finaliso "+id);
           $('#ciudad').append($('<option>',{
            value: data['ids'][i],
            text:  data['nombes'][i]
          }));

          }
        }
    });






   }else{
    $('#ciudad option').remove();
          //  alert("1 ..."+data['nombes'][1]);
           $('#ciudad').append($('<option>',{
            value: "",
            text:  "Selecione una Ciudad"
    }));

   }

   //alert("enton a mirar los municipios = "+idDepartamento);

}
function comprobarForm(){

  
  if(swnit){
    $('#colpatria_folmulariobundle_formulario_departamento').val($('#departamentos').val());
    $('#colpatria_folmulariobundle_formulario_ciudad').val($('#ciudad').val());
    return true;
  }else{
      alert("El NIT introducido NO es validacion");
      return false;
  }  
}
//colpatria_folmulariobundle_formulario_departamento   
//colpatria_folmulariobundle_formulario_ciudad