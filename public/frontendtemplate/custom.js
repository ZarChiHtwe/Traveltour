$(document).ready(function(){
	$(".from-select").change(function(){
		var id = $(this).val();

		$.post('/search_route',{id:id},function(res){
			var html="";
			$.each(res,function(i,v){
				html+=`<option>${v.name}</option>`;
			})
			$(".to-select").html(html)
		});
	});
})