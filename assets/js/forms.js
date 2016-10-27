$(function() {

	var images = [];

	$('.browse-file').on('click', function(e) {
    $('input[type=file]').trigger('click');
    e.preventDefault();
	});

	$('#file').on('change', function(e) {
		e.preventDefault();
			var file  = e.target.files;

			for (var i = 0, f; f = file[i]; i++)
			{
				if (jQuery.inArray(f.name, images) == -1)
				{
					images.push(f);
				}
			}

	  $.each($('#file')[0].files, function(i, file)
	  {
		  if (!(/\.(gif|jpg|jpeg|png)$/i).test(file.name))
		  {
		  	$("#file").val("");
	    	$('.popupCons.popupCons5').show();
		    $('.popupCons.popupCons5 .popupCont3').show();
		    $('.popupCons.popupCons5 .popupCont3 .title').html('Пожалуйста, выберите изображение <center>для загрузки</center>');
	    	return false;
	    }
	  });

	  if (images.length > 50)
	  {
	  	$("#file").val("");
	  	$('.popupCons.popupCons5').show();
	    $('.popupCons.popupCons5 .popupCont3').show();
	    $('.popupCons.popupCons5 .popupCont3 .title').html('Максимальное количество файлов для загрузки 50!');
	  }
	  else if(images.length > 0)
	  {
		  $("#amount").text(images.length);
		  $(".load-resulr").show();
		}
	});

  $('#form').on('submit', function(e) {
  		var phone = $("input[name='phone']").val();
  		if (phone.length < 7)
  		{
  			$('.popupCons.popupCons5').show();
		    $('.popupCons.popupCons5 .popupCont3').show();
		    $('.popupCons.popupCons5 .popupCont3 .title').html('<center>Телефон должен состоять<br/>минимум из 7 цифр</center>');
  		}
  		else if(phone.match(/^\d+$/) === null)
  		{
  			$('.popupCons.popupCons5').show();
		    $('.popupCons.popupCons5 .popupCont3').show();
		    $('.popupCons.popupCons5 .popupCont3 .title').html('<center>Пожалуйста, введите корректный<br/>номер телефона</center>');
  		}
  		else
  		{

	  		var data = new FormData();

		    for(var i = 0;i<images.length;i++)
		    {
		        data.append("file_"+i, images[i]);
		    }
		    var other_data = $('#form').serializeArray();
		    $.each(other_data,function(key,input){
		        data.append(input.name,input.value);
		    });
		    $.ajax({
	        url: 'forms.php',
	        data: data,
	        contentType: false,
	        processData: false,
	        type: 'POST',
	        success: function(data)
	        {
	            $("#file").val("");
	            images = [];
	            $(".load-resulr").hide();
	            $("input[name='username']").val('Ваше имя:');
	            $("input[name='phone']").val('Ваш телефон:');
	            $('.popupConsCont .close').trigger('click');
	            $('.popupCons.popupCons4').show();
	            $('.popupCons.popupCons4 .popupCont2').show();
	        }
		    });
	  	}
    e.preventDefault();
  });

   $('#form2').on('submit', function(e) {
   	var phone = $("input[name='phone1']").val();
  		if (phone.length < 7)
  		{
  			$('.popupCons.popupCons1').hide();
  			$('.popupCons.popupCons5').show();
		    $('.popupCons.popupCons5 .popupCont3').show();
		    $('.popupCons.popupCons5 .popupCont3 .title').html('<center>Телефон должен состоять<br/>минимум из 7 цифр<br/><span class="inpBtn" style="font-size: 14px; padding: 5px 10px">попробовать снова</span></center>');

		    $('.popupCons.popupCons5 .inpBtn').on('click', function(){
		    	$('.popupCons.popupCons5').hide();
		    	$('.popupCons.popupCons1').show();
		    });
  		}
  		else if(phone.match(/^\d+$/) === null)
  		{
  			$('.popupCons.popupCons1').hide();
  			$('.popupCons.popupCons5').show();
		    $('.popupCons.popupCons5 .popupCont3').show();
		    $('.popupCons.popupCons5 .popupCont3 .title').html('<center>Пожалуйста, введите корректный<br/>номер телефона<br/><span class="inpBtn" style="font-size: 14px; padding: 5px 10px">попробовать снова</span></center>');

		    $('.popupCons.popupCons5 .inpBtn').on('click', function(){
		    	$('.popupCons.popupCons5').hide();
		    	$('.popupCons.popupCons1').show();
		    });
  		}
  		else
  		{
	   		var data = $('#form2').serializeArray();
		   	$.ajax({
	        url: 'forms.php',
	        data: data,
	        type: 'POST',
	        success: function(data)
	        {
	            $("input[name='username1']").val('Ваше имя:');
	            $("input[name='phone1']").val('Ваш телефон:');
	            $('.popupConsCont .close').trigger('click');
	            $('.popupCons.popupCons4').show();
	            $('.popupCons.popupCons4 .popupCont2').show();
	        }
	    	});
	   }
   	e.preventDefault();
   });
});

var mouse_is_inside = false;

$(document).ready(function()
{
    $('.popupConsCont').hover(function(){
        mouse_is_inside=true;
    }, function(){
        mouse_is_inside=false;
    });

    $("body").mouseup(function(){
        if(! mouse_is_inside) $(".popupCons").fadeOut();
    });
});