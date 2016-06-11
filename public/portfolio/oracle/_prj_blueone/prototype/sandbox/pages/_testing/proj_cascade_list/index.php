<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Cascade List</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="global/css/default.css" />
	<link rel="stylesheet" type="text/css" href="global/css/multi_list.css" />
   	<link rel="stylesheet" type="text/css" href="global/css/multi_select_cascade_list_tree.css" />
	<link rel="stylesheet" type="text/css" href="_cascade_list.css" />
	<script type="text/javascript" src="global/js/yui/yahoo-dom-event/yahoo-dom-event.js"></script>
	<script type="text/javascript" src="global/js/common.js"></script>
	<script type="text/javascript" src="global/js/yui/dragdrop/dragdrop-min.js"></script>
	<script type="text/javascript" src="global/js/action_dialogs.js"></script>
	<script type="text/javascript" src="global/js/yui/treeview/treeview.js"></script>
	<script type="text/javascript" src="AgileCascadeList.js"></script>
	<!-- INCLUDE AGILE CUSTOM CLASSES -->
	<script type="text/javascript" src="global/js/dataset.js"></script>
	<script type="text/javascript" src="global/js/treeview/AgileConstants.js"></script>
	<script type="text/javascript" src="global/js/treeview/AgileKeyReader.js"></script>
	<script type="text/javascript" src="global/js/treeview/AgileCascadeListTree.js"></script>
    <script type="text/javascript" src="global/js/treeview/AgileCascadeListNode.js"></script>
	<!-- INCLUDE AGILE PROJECT SPECIFIC CLASSES -->
	<script type="text/javascript" src="AgileCascadeListNode.js"></script>
	<script type="text/javascript" src="AgileCascadeListBuilder.js"></script>
</head>
<body class="action_dialog"> 
    <!--************************************
        PALETTE
    *************************************-->
    <div id="palette" class="palette nodrag">
        <div id="floater_content" class="palette_content nodrag">
            <div id="drag_handle" class="handlebar"></div><a href="#" id="close_palette" class="close_palette"><span>close</span></a>
			<div id="floater_title" class="palette_title nodrag">Cascade List</div>
            <div id="mscl_treeContainerDiv" class="palette_results_list nodrag">
                <div id="mscl_treeContainer" class="nodrag treeContainer" tabindex="-1" style="-moz-outline-style: none;"></div>  
            </div>
            <div id="resize_handle" class="palette_resizer nodrag">&nbsp;</div>
        </div>
    </div>  

<div id="header" class="header">
	<!--************************************
		HEADER
	*************************************-->
	<div class="header_wrapper">
		<div class="column_one">
			<h2>Cascade List</h2>
			<p>August 2007</p>
		</div>		
		<div class="column_three">
			<a href="#" class="button" onclick="doSave();"><span>Save</span></a>
			<a href="#" onclick="javascript:window.close();" class="button"><span>Cancel</span></a>
		</div>
	</div>
	
	<!--************************************
		MESSAGES
	*************************************-->
	<div id="page_message" class="message info">
		<p>Click save to view errors.</p>
	</div>
</div>
<div id="content" class="content">
    <form id="form_dialogs" name="form_dialogs" action="">
        <div id="edit_mode">
        <!-- MULTI SELECT LIST SECTION -->
            <fieldset class="dynamic">
                <!-- MULTI SELECT LIST -->
                <dl class="side_by_side">
                    <dt><label for="multi_select_query">Cascade List:</label></dt>
                    <dd class="multiselect_textbox">
	                    <div id="mscl_added_notice" class="added_notice" style="display: none;">Added</div>
                        <div class="mscl medium_width">
                            <div id="mscl_container" class="mscl_container" tabindex="-1">
                                <ul id="mscl_pillbox" class="pillbox"></ul>
                          </div>
                        </div>
                        <a href="#" id="open_palette" class="button"><span><em class="view_details">&nbsp;</em>&nbsp;</span></a>
                    </dd>
                </dl>
            </fieldset>
        </div>
    </form>
    <!-- needed! do not delete --><p class="action_dialog_foot_spacer">.</p><!-- needed! do not delete -->
</div>
</body>
</html>
