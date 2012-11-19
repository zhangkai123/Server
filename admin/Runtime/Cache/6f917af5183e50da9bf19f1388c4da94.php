<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=7" /><link href="__ROOT__/statics/admin/css/style.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/statics/css/dialog.css" rel="stylesheet" type="text/css" /><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/jquery-1.4.2.min.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidator.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/jquery/plugins/formvalidatorregex.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/admin/js/admin_common.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/dialog.js"></script><script language="javascript" type="text/javascript" src="__ROOT__/statics/js/iColorPicker.js"></script><script language="javascript">var URL = '__URL__';
var ROOT_PATH = '__ROOT__';
var APP	 =	 '__APP__';
var lang_please_select = "<?php echo (L("please_select")); ?>";
var def=<?php echo ($def); ?>;
$(function($){
	$("#ajax_loading").ajaxStart(function(){
		$(this).show();
	}).ajaxSuccess(function(){
		$(this).hide();
	});
});

</script><title><?php echo (L("website_manage")); ?></title></head><body><div id="ajax_loading">提交请求中，请稍候...</div><?php if($show_header != false): if(($sub_menu != '') OR ($big_menu != '')): ?><div class="subnav"><div class="content-menu ib-a blue line-x"><?php if(!empty($big_menu)): ?><a class="add fb" href="<?php echo ($big_menu["0"]); ?>"><em><?php echo ($big_menu["1"]); ?></em></a>　<?php endif; ?></div></div><?php endif; endif; ?><div class="pad_10"><form action="<?php echo u('items_collect/taobao_collect');?>" method="post" name="myform" id="myform"><input type="hidden" name="cate_id" value="<?php echo ($cate_id); ?>" /><input type="hidden" name="cate_name" value="<?php echo ($cate_name); ?>" /><table width="100%" cellpadding="2" cellspacing="1" class="table_form"><tr><th width="100">保存分类 :</th><td><?php echo ($cate_name); ?></td></tr><tr><th>搜索关键词 :</th><td><input type="text" id="keywords" name="keywords" value="<?php echo ($cate_name); ?>"></td></tr><tr><th>采集页数 :</th><td><input type="text" name="pages" value="1"><span class="gray">每页40个商品</span></td></tr><tr><th></th><td><input type="submit" value="开始采集" name="dosubmit" class="button" id="dosubmit"></td></tr></table></form><script type="text/javascript">$(function(){
	$("#cate_id").change(function(){
		keywords = $(this).find("option:selected").attr("keywords");
		$("#keywords").val(keywords);
	});
})
</script></div></body></html>