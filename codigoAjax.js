$(document).ready(function(e){
  $("#dialog-confirm").hide();
	$(".menuPrincipal a").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$(".conteudo").load(href + " .conteudo");
 });
}); 

function dialogo(){
	$("#dialog-confirm").dialog({
		resizable: false,
		width:400,
		modal: true,
		buttons: {
			"Confirma": function() {
                var n1 = document.querySelector("#nome").value;
                var n2 = document.querySelector("#email").value;
                var ni=n1.length;
                var ne=n2.length;
                var v=false;
                var cont=0;
                var cont2=-1;
                for(var i=0;i<ni;i++){
                   cont=cont + 1;
                    if(n1[i]=='@'){
                     if(cont>=3){
                       v=true;
                       cont2=cont2+1;
                     }  
                    }
                 }
					if((v!=true) || (cont2<4)){
                 alert("Dados preenchidos incorretamente");
                }
    				var j=0;
                cont2=-1;
                cont=0;
                v=false;
               for(j=0;j<ne;j++){
                  cont=cont + 1;
                   if(n2[j]==" "){
                     if(cont>=3){
                       v=true;
                       cont2=cont2+1;
                     }  
                   }
               }
              if((v!=true) || (cont2<4)){
                alert("Dados preenchidos incorretamente");
              }
				$(this).dialog( "close" );
			},
			"Cancelar": function() {
				$(this).dialog( "close" );
			} 
		}
});
};
