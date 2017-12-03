$.ajax({
	type: "POST",
    url: 'function/getjson.php',
    data: ({
        
    }),
	success: function(data){
				var returnvalue = data;
	         	console.log(data);
	         	getimg(data);      
			}
});