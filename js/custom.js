// JavaScript Document

/*setTimeout(fade_out, 5000);
$('.notify span').on('click',function(){
	
	$(this).parent('.notify').fadeOut().empty();
});*/
// fadeout .notify class automatically 
setTimeout(fade_out, 1500);
function fade_out() {
  $(".notify").fadeOut().empty();
}
///function add new student submit 
// $('form#addstudent').on('submit',function(e){
// 	e.preventDefault(); //prevent default task
// 	$('span.error').html(''); //
// 	var check = 1; //
// 	$('form#addstudent input[type="text"]').each(function(key,value){ //validate input type text whether it's empty or not
// 		if($(this).val()==''){
// 			$(this).parent('p').find('span.error').html('Required');
// 			check = 0;
// 		}
// 	});
// 	if(check==0){
// 		return false;
// 	}
// 	else{
// 		formdata = $('form#addstudent').serialize();
// 		data = formdata;
// 		url ='http://localhost/newajax/save.php';
// 		$('.loading').fadeIn(500);	
// 		$.post(url,data,function(response){
// 			$('.loading').fadeOut(500);
// 			if(response==1){
// 				window.location.href = 'http://localhost/newajax/index.php?page=student&msg=1';
// 			}
// 		})
// 	}
// 	check if form is validated or not
// });



