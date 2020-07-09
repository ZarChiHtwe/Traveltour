$(document).ready(function(){
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	$(".from-select").change(function(){
		var id = $(this).val();

		$.post('/search_route',{id:id},function(res){
			var html="";
			// console.log(res);
			$.each(res,function(i,v){
				// console.log(v);
				html+=`<option value="${v.id}" style="color: black;">${v.name}</option>`;
			});
			$(".to-select").html(html)
		});
	});
})