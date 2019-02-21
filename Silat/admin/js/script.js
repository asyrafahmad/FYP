$(document).ready(function(){


            //EDITOR CDEDITOR
            ClassicEditor
                    .create( document.querySelector( '#body' ) )
                    .catch( error => {
                        console.error( error );
                    } );
    
    
    
            //TO CHECK ALL ROW IN CHECKBOX
            $('#selectAllBoxes').click(function(event){
                
                        if(this.checked){

                                    $('.checkBoxes').each(function(){

                                        this.checked = true;
                                    });
                        }
                        else{

                                 $('.checkBoxes').each(function(){

                                        this.checked = false;
                                 });
                        }
                
                
            });
    
    
 });


function loadUsersOnline(){
    
        //JQuery, function get
        $.get("functions.php?onlineusers=result", function(data){

                $(".usersonline").text(data);
        });
    
}

setInterval(function(){
    
    loadUsersOnline();
    
},500);

loadUsersOnline();