<script>
	var is_enable= false;
	var seconds= 5;
	
	function load_link(){
		var c= jQuery("a.srzbtn1");
		c.css('opacity', '0.5'); /* Single style */

		if(seconds > 0){
		c.text('Please wait '+seconds+' sec...');
		seconds -= 1;
        setTimeout(load_link, 1100);
        return;}
        c.text('Getting Link..'); //getting link
        setTimeout(function(){ 
			is_enable = true;
			c.css('opacity', '1');  
            c.removeClass("disabled");
            c.text('Click Here to Generate Download Link'); //get link 
        },1100);
        return;
    }
	load_link();
	
	jQuery('a.srzbtn1').on('click',function(){
		
		if(!is_enable) return false;
		
	});
	
	
</script>