<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="global/css/default.css" />
	<script type="text/javascript" src="global/js/jquery/jquery.js"></script>

	<script type="text/javascript" src="global/js/jquery/plugins/jquery.colors.js"></script><script type="text/javascript" src="global/js/action_dialogs_common.js"></script>
    <script type="text/javascript" src="global/js/multi_counter_expander.js"></script>
	<script type="text/javascript" src="send.php.js"></script>
	<title>Calculate Quantities</title>
</head>
<body class="action_dialog">
	<div id="wrapper_action_dialog_header" class="header">
        <div class="header_wrapper">
            <div class="column_one">
                <h2>Calculate Quantities</h2>
                <p>Sourcing Project &bull; SPIdentifier 001</p>
            </div>		
        </div>
        <div id="page_message" class="message info">
            <p>Calculating quantities will result in modified quantities in this project, related RFQs and RFQ Responses.  Click Calculate to execute this action.</p>
        </div>
	</div>
	<div id="wrapper_action_dialog_content" class="content">
	</div>
    <div id="wrapper_action_dialog_footer" class="footer">
        <div class="column_one">
            <input type="checkbox" id="optional" /> <label for="optional">Perform this as a background process</label>
        </div>
    	<div class="column_three">
	        <a href="#" id="cmdSend" class="button"><span><em class="save_dialog">&nbsp;</em>Calculate</span></a> 
    	    <a href="#" id="cmdCancel" class="button"><span><em class="cancel">&nbsp;</em>Cancel</span></a>
	    </div>
	</div>
</body>
</html>