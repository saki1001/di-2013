var $j = jQuery.noConflict();

$j(document).ready(function() {
    
    var ajaxRequest = function(postDate) {
        $j.ajax({
            type: "GET",
            url: "wp-content/themes/cleanslate/php/get-adjacent-post.php",
            data: {
                post_date : postDate
            },
            dataType: "html",
            beforeSend: function(){
            },  
            success: function(data){
                
                $j('#content').html(data);
                
            },  
            error: function(jqXHR, textStatus, errorThrown) {
                alert(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
    };
    
    var getAdjacentPost = function() {
        
        $j("#prev-link").off('click', getAdjacentPost);
        $j("#next-link").off('click', getAdjacentPost);
        
        var postId = $j(this).attr('data-id');
        var postDate = $j(this).attr('data-post-date');
        
        ajaxRequest(postDate);
        
        $j("#prev-link").live('click', getAdjacentPost);
        $j("#next-link").live('click', getAdjacentPost);
        
        return false;
    };
    
    $j("#prev-link").live('click', getAdjacentPost);
    $j("#next-link").live('click', getAdjacentPost);
    
});