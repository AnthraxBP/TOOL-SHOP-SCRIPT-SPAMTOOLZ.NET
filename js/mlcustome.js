var currentRequest=null;$(function(){$('[data-toggle="tooltip"]').tooltip();});var Process_limit=20;$(document).on("click",'.check_up_item',function(e){if(!$(this).hasClass("clicked_btn_no_click")){if(Process_limit>0){Process_limit--;var $input=$(this);var org=$input.html();$input.html("loading ...");$input.attr("disabled",'disabled');var id=$input.data("id");var $url=$input.data("href");var $buy_button_cont=$input.parents("tr");var $buy_button=$buy_button_cont.find('.buy_button');$buy_button.attr("disabled",'disabled');currentRequest=$.ajax({type:"post",url:$url,data:{id:id},dataType:'json',success:function(data){$input.removeClass("btn-primary");$input.html(data.message);if(data.status=='success'){$input.addClass("btn-warning");$input.addClass("clicked_btn_no_click");}else if(data.status=='error'){$input.addClass("btn-warning");$input.addClass("clicked_btn_no_click");}else{$input.addClass("btn-primary");$input.html(org);}},error:function(request,x,y){$input.html("Retry");$input.removeClass("btn-primary");$input.addClass("btn-warning");if(request.status==401||request.status==503){location.reload();}},complete:function(data){Process_limit++;$input.removeAttr("disabled");$buy_button.removeAttr("disabled");},beforeSend:function(){},});}else{swal('Limit Exceeded!',"You've Exceeded the limit of requests Per Once [20]",'warning');}}
e.preventDefault();});var Process_send_limit=20;$(document).on("click",'.check_send_item',function(e){if(!$(this).hasClass("clicked_btn_no_click")){if(Process_send_limit>0){Process_send_limit--;var $input=$(this);var org=$input.html();$input.html("loading ...");$input.attr("disabled",'disabled');var id=$input.data("id");var $url=$input.data("href");currentRequest=$.ajax({type:"post",url:$url,data:{id:id},dataType:'json',success:function(data){$input.removeClass("btn-primary");$input.html(data.message);if(data.status=='success'){$input.addClass("btn-warning");$input.addClass("clicked_btn_no_click");}else if(data.status=='error'){$input.addClass("btn-warning");$input.addClass("clicked_btn_no_click");}else{$input.addClass("btn-primary");$input.html(org);}},error:function(request,x,y){$input.html("Retry");$input.removeClass("btn-primary");$input.addClass("btn-warning");if(request.status==401||request.status==503){location.reload();}},complete:function(data){Process_send_limit++;$input.removeAttr("disabled");},beforeSend:function(){},});}else{swal('Limit Exceeded!',"You've Exceeded the limit of requests Per Once [20]",'warning');}}
e.preventDefault();});$(document).on("click",'.btn-rfrsh',function(e){});$(document).on("click",'#navbar_id li',function(e){$("nav .nav-item").removeClass("active");$(this).addClass("active");});$(document).on("click",'.removeEm',function(e){var $url=$(this).data("url");var $input=$(this);swal({title:'Are you sure?',text:"You won't be able to revert this!",type:'warning',showCancelButton:true,confirmButtonColor:'#3085d6',cancelButtonColor:'#d33',confirmButtonText:'Yes, delete it!'}).then((result)=>{if(result.value){currentRequest=$.ajax({type:"post",url:$url,data:{ok:"ok"},dataType:'json',success:function(data){if(data.status=='success'){swal('Deleted!','Your data has been deleted successfully.','success');}
if(data.reload=='true'){refresh();}},error:function(request,x,y){},complete:function(data){$input.removeAttr("disabled");},beforeSend:function(){$input.attr("disabled",'disabled');if(currentRequest!=null){currentRequest.abort();}},});}});});var load=function(url,title){$('.navbar-collapse').collapse('hide');$.ajax({url:url,cache:false,beforeSend:function(){$("#main_content").html('<div class="loading">Loading&#8230;</div>');},success:function(data){var main_content=$(data).filter('#main_content');var content=$(main_content).html();$("#main_content").html(content);history.pushState({url:url,title:title},title,url);if(title){document.title=title;}
var u=new URL(url);ga('set','page',u.pathname);ga('send','pageview');},error:function(request,x,y){if(request.status==401||request.status==503){location.reload();}}});};$(document).on("click",'#navbar_id a:not(.noAjax)',function(e){var $this=$(this),url=$this.attr("href");var title=$this.data("title")?$this.data("title"):$this.text();if(isURL(url)){load(url,title);e.preventDefault();}});$(document).on("click",'.pagination a,.ajax_load_url',function(e){var $this=$(this),url=$this.attr("href");var title=false;if(isURL(url)){load(url,title);e.preventDefault();}});var Process_limit_black_list=10;$(document).on("click",'.check_black_list',function(e){if(!$(this).hasClass("clicked_btn_no_click")){if(Process_limit_black_list>0){Process_limit_black_list--;var $input=$(this);var org=$input.html();var orginput=$input.clone();$input.html("loading ...");$input.attr("disabled",'disabled');var id=$input.data("id");var $url=$input.data("href");var $check_button_cont=$input.parents(".contains-blacklist");var $buy_button_cont=$input.parents("tr");var $buy_button=$buy_button_cont.find('.buy_button');$buy_button.attr("disabled",'disabled');currentRequest=$.ajax({type:"post",url:$url,data:{id:id},dataType:'json',success:function(data){$check_button_cont.html(data.message);},error:function(request,x,y){$input.html(org);$input.removeAttr("disabled");if(request.status==401||request.status==503){location.reload();}},complete:function(data){Process_limit_black_list++;$buy_button.removeAttr("disabled");},beforeSend:function(){},});}
else{swal('Limit Exceeded!',"You've Exceeded the limit of requests Per Once [10]",'warning');}}
e.preventDefault();});$(".dt-table").DataTable({"aaSorting":[],"paging":false,"bInfo":false,"searching":false});$(document).on('click','.buy_button',function(){var user_balance=Number($("#buyer_balance").html());if(user_balance>=$(this).data("price")){$("#buyModal").modal('show');var item_id_elem=$("#buyModal").find(".item_id");var item_name_elem=$("#buyModal").find(".item_name");item_id_elem.val($(this).data("id"));item_name_elem.val($(this).data("name"));}
else{$("#addBalanceModal").modal("show");}});$(document).on('submit','.delete',function(e){e.preventDefault()
var $url=$(this).attr("action");var $items=[]
var $ckecked=$(this).find('input[name="ids[]"]:checked');var $load_body=$('.tab-pane');var $load_url=$load_body.find('section').data('url');$ckecked.each(function(){$items.push($(this).val())});swal({title:'Are you sure?',text:"You won't be able to revert this!",type:'warning',showCancelButton:true,confirmButtonColor:'#3085d6',cancelButtonColor:'#d33',confirmButtonText:'Yes, delete it!'}).then((result)=>{if(result.value){$.ajax({type:"POST",url:$url,data:{ok:'ok',items:$items},dataType:'json',success:function(data){if(data.status=='success'){swal('Done!',data.message,'success');}
if(data.reload=='true'){$load_body.load($load_url);}},error:function(request,x,y){},complete:function(data){},beforeSend:function(){},});}});})
$(document).on('click','.tab',function(){var $this=$(this);var url=$this.data('href');$('.tab').parent().removeClass('active')
$('.tab-pane').html('<div class="loading">Loading&#8230;</div>')
$('.tab-pane').load(url);$this.parent().addClass('active')})
$(document).on('click','.date-filter',function(){var $this=$(this);var url=$this.data('href');$('.tab-pane').html('<div class="loading">Loading&#8230;</div>')
$('.tab-pane').load(url);})
$(document).on('click','.check-all',function(){$('input[type="checkbox"][name="ids[]').prop('checked',this.checked);})
$(document).on('click','.w-details',function(){$('#withdrawModal').find('.modal-body').html('<div class="loading">Loading&#8230;</div>')
var $this=$(this);var url=$this.data('href')
$('#withdrawModal').find('.modal-body').load(url)
$('#withdrawModal').modal('show')})
$(document).on('click','.s-show-item',function(){$('#s_showitemModal').find('.modal-body').html('<div class="loading">Loading&#8230;</div>')
var $this=$(this);var url=$this.data('href')
$('#s_showitemModal').find('.modal-body').load(url)
$('#s_showitemModal').modal('show')})