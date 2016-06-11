<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="global/css/default.css" />
    <link rel="stylesheet" type="text/css" href="create_new_activities.php.css" />
    <script type="text/javascript" src="global/js/jquery/jquery.js"></script>

    <script type="text/javascript" src="global/js/jquery/plugins/jquery.colors.js"></script>
    <script type="text/javascript" src="global/js/action_dialogs_common.js"></script>
    <script type="text/javascript" src="global/js/multi_counter_expander.js"></script>
	<title>Bulk Edit</title>
</head>
<body class="action_dialog">
	<div id="wrapper_action_dialog_header" class="header">
        <!--************************************
            HEADER
        *************************************-->	
        <div class="header_wrapper">
            <div class="column_one">
                <h2>Bulk Edit</h2>
                <p>Sourcing Project &bull; DELL_101</p>
            </div>		
        </div>
        <!--************************************
            MESSAGES
        *************************************-->
        <div id="page_message" class="message info">
            <p>Please select the attributes that you would like to edit and specify new values for the bulk update.  These new values will be applied to all selected rows.</p>
        </div>
	</div>

	<div id="wrapper_action_dialog_content" class="content">
		<form id="form1" name="form1" action="#">
        <fieldset class="dynamic">
			<style>
				table.pcm_pp th,
				table.pcm_pp td
				{
					padding: 5px 5px 5px 5px;
					background-color: #fff;
				}
				table.pcm_pp td input
				{
					vertical-align: inherit;
				}
				.nowrap
				{
					white-space:nowrap;
				}
				select.long_width
				{
					width:86% !important;
				}
			</style>
			<table class="pcm_pp">
            	<thead>
                	<tr>
                    	<th>Attribute</th>
                    	<th colspan="2">Value</th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                    	<td style="padding-top: 10px;">
                        	<select class="long_width">
                            	<option>Backup Buyer</option>
                            	<option>Buyer</option>
                            	<option>Commodity</option>
                            </select>
                        </td>
                        <td>
                        	<input type="text" class="long_width" />
                        </td>
                        <td>
	                        <a class="button" href="#"><span><em class="iconic remove">&nbsp;</em></span></a>
                        </td>
                    </tr>
                	<tr>
                    	<td>
                        	<select class="long_width">
                            	<option></option>
                            	<option>Backup Buyer</option>
                            	<option>Buyer</option>
                            	<option>Commodity</option>
                            </select>
                        </td>
                        <td>
                        	<input type="text" class="long_width" />
                        </td>
                        <td>
	                        <a class="button" href="#"><span><em class="iconic remove">&nbsp;</em></span></a>
                        </td>
                    </tr>
                	<tr>
                    	<td>
                        	<select class="long_width">
                            	<option></option>
                            	<option>Backup Buyer</option>
                            	<option>Buyer</option>
                            	<option>Commodity</option>
                            </select>
                        </td>
                        <td>
                        	<input type="text" class="long_width" />
                        </td>
                        <td>
	                        <a class="button" href="#"><span><em class="iconic remove">&nbsp;</em></span></a>
	                        <a class="button" href="#"><span><em class="iconic add">&nbsp;</em></span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
		</fieldset>

		</form>
	</div>
<!--************************************
	FOOTER
*************************************-->    
<div id="wrapper_action_dialog_footer" class="footer">
    <div class="column_three">
        <a href="#" id="cmdSend" class="button"><span><em class="save_dialog">&nbsp;</em>OK</span></a> 
        <a href="#" id="cmdCancel" class="button"><span><em class="cancel">&nbsp;</em>Cancel</span></a>
    </div>
</div>
</body>
</html>