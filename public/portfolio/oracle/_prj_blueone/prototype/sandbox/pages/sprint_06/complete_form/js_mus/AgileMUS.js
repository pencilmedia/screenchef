/////////////////////////////////////////////////////////////////////////
//  THIS SCRIPT IS FOR PROTOTYPING PURPOSES 
/////////////////////////////////////////////////////////////////////////
//	AGILE UX MULTI SELECT USER SEARCH
/////////////////////////////////////////////////////////////////////////
var uxDom = YAHOO.util.Dom;
registerNS('agile.ux.mus');
agile.ux.mus =
{
	/////////////////////////////////////////////////////////////////////
	//	INIT
	/////////////////////////////////////////////////////////////////////
	init: function()
	{
		agile.ux.mus.palette.init();
		agile.ux.mus.setEventHandlers();
	},	
	/////////////////////////////////////////////////////////////////////
	//	SET EVENT HANDLERS
	/////////////////////////////////////////////////////////////////////
	setEventHandlers : function()
	{
		addEvent(['cmdMusPallete','cmdMusPalleteClose'], 'click', agile.ux.mus.palette.toggle);
		addEvent('selGroup', 'change', agile.ux.mus.palette.handleTypeSelection);
		addEvent('cmdMusSearch', 'click', agile.ux.mus.palette.search);
		addEvent(['mus_target_query','mus_targetContainer'], 'focus', agile.ux.mus.pills.setFocus);
		addEvent('mus_targetContainer', 'click', agile.ux.mus.pills.setFocus);
		addEvent('mus_targetContainer',	'blur',	agile.ux.mus.pills.removeFocus);
		addEvent('cmdMusPallete','focus',agile.ux.mus.pills.removeFocus);
		addEvent('mus_targetContainer',	'keyup', agile.ux.mus.pills.multiSelectKeyHandler);
		addEvent('mus_palette_query', 'keydown', agile.ux.mus.palette.handleKeyPress);
	}
};

function textControlFocus(o)
{
	el = o;
	$(o).className += ' textControlFocus';
}