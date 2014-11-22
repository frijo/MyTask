'use strict';
$(document).ready(function() {
  

  
   $("#btnTest").click(function() { 
        $("#modal-dialog").dialog({ 
            
            show: "scale", 
            hide: "scale", 
            resizable: "false", 
           
            modal: "true", 
            display:"true"
        });
    });

});