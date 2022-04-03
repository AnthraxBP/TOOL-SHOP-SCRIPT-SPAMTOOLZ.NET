function check(el){if($(el).hasClass('clicked')){return}
var url=$(el).attr('data-href')
$(el).removeAttr('class');$(el).addClass('btn btn-warning');$(el).html('<i class="fa fa-spinner fa-spin" id="spinner"></i>')
$.get(url,function(data){if(data!=='1'){$(el).removeAttr('class');$(el).addClass('btn btn-success');$(el).html('working')}else{$(el).removeAttr('class');$(el).addClass('btn btn-success');$(el).html('working')}
$(el).addClass('clicked')});}