$j(document).ready(function() {
    
    var submitSearch = function(value) {
        // Make sure the user searched for something
        // if ( value ){
        //     
        //     $j.get( '/', { s: value }, function( data ){
        //     
        //         // Place the fetched results inside the #content element
        //         $j('.browse-posts').html(data);
        //     });
        // }
        
        $j.get(search.php,{search_string:value},
            function(data){
                if(data.length>0){
                    $j('.browse-posts').html(data);
                }
        });
    };
    
    var submitNewsletter = function(value) {
        
        // Make sure the field isn't empty
        if (value =! '') {
            
            $j('#newsletter-form').submit();
            
        } else {
            // do nothing
        }
        

    };
    
    
    // Bind the submit event for your form
    var submitOnEnter = function(e) {
        
        if (e.which == 13) {
            
            $j(this).unbind('keypress', submitOnEnter);
            
            // Get the input value
            var value = $j(this).val();
            var thisID = $j(this).attr('id');
            console.log(thisID);
            console.log(value);
            if (thisID === 's') {
                submitSearch(value);
                
            } else if (thisID === 'n') {
                submitNewsletter(value);
                
            } else {
                // do nothing
            }
            
            $j(this).bind('keypress', submitOnEnter);
            
            return false;
        }
        
    };
    
    $j('#n').bind('focus', clearOnFocus);
    $j('#n').bind('keypress', submitOnEnter);
    
    $j('#s').bind('focus', clearOnFocus);
    $j('#s').bind('keypress', submitOnEnter);
});