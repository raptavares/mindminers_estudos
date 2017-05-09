/*
	Extend Link
	By Alobaidi
	http://wp-plugins.in
*/

(function() {

	tinymce.PluginManager.add('wptp_extend_link_tinymce', function( editor, url ) {

		editor.addButton( 'wptp_extend_link_tinymce', {

			text: 'Extend Link',

			title: 'Add link Rel, ID, Classes, and more..',

			icon: false,

			onclick: function() {
				var wptExtLinkGetSelection = tinyMCE.activeEditor.selection;

				var wptExtLinkSelectedText = wptExtLinkGetSelection.getContent( { format: "text" } );

				if( !wptExtLinkSelectedText ){
					alert('Firstly select link or text, and click on "Extend Link" button.');
					return false;
				}

				var wptExtLinkGetHref = wptExtLinkGetSelection.getNode().getAttribute('href');

				var wptExtLinkGetRel = wptExtLinkGetSelection.getNode().getAttribute('rel');

				var wptExtLinkGetTitle = wptExtLinkGetSelection.getNode().getAttribute('title');

				var wptExtLinkGetID = wptExtLinkGetSelection.getNode().getAttribute('id');

				var wptExtLinkGetClass = wptExtLinkGetSelection.getNode().getAttribute('class');

				var wptExtLinkGetTarget = wptExtLinkGetSelection.getNode().getAttribute('target');

				var wptExtLinkGetDownload = wptExtLinkGetSelection.getNode().getAttribute('download');

				if( wptExtLinkGetTarget ){
					var wptexl_TargetChecked = true;
				}else{
					var wptexl_TargetChecked = false;
				}

				if( wptExtLinkGetDownload ){
					var wptexl_DownloadChecked = true;
				}else{
					var wptexl_DownloadChecked = false;
				}

				editor.windowManager.open( {

					title: 'Extend Link',

					body: [
							{
								type: 'textbox',
								name: 'wptexl_LinkText',
								label: 'Link Text',
								value: wptExtLinkSelectedText,
								minWidth: 400
							},

							{
								type: 'textbox',
								name: 'wptexl_URL',
								label: 'URL',
								value: wptExtLinkGetHref,
								minWidth: 400
							},

							{
								type: 'textbox',
								name: 'wptexl_Rel',
								label: 'Rel',
								value: wptExtLinkGetRel,
								minWidth: 400
							},

							{
								type: 'textbox',
								name: 'wptexl_Title',
								label: 'Title',
								value: wptExtLinkGetTitle,
								minWidth: 400
							},

							{
								type: 'textbox',
								name: 'wptexl_ID',
								label: 'ID',
								value: wptExtLinkGetID,
								minWidth: 400
							},

							{
								type: 'textbox',
								name: 'wptexl_Class',
								label: 'Class',
								value: wptExtLinkGetClass,
								minWidth: 400
							},

							{
								type: 'checkbox',
								name: 'wptexl_Target',
								label: 'Open link in a new tab',
								checked: wptexl_TargetChecked
							},

							{
								type: 'checkbox',
								name: 'wptexl_Download',
								label: 'Downloadable',
								checked: wptexl_DownloadChecked
							}
					],

					onsubmit: function(e) {

						if( e.data.wptexl_Rel ){
							var wptexlAttrRel = ' rel="'+e.data.wptexl_Rel+'"';
						}else{
							var wptexlAttrRel = null;
						}

						if( e.data.wptexl_Title ){
							var wptexlAttrTitle = ' title="'+e.data.wptexl_Title+'"';
						}else{
							var wptexlAttrTitle = null;
						}

						if( e.data.wptexl_ID ){
							var wptexlAttrID = ' id="'+e.data.wptexl_ID+'"';
						}else{
							var wptexlAttrID = null;
						}

						if( e.data.wptexl_Class ){
							var wptexlAttrClass = ' class="'+e.data.wptexl_Class+'"';
						}else{
							var wptexlAttrClass = null;
						}

						if( e.data.wptexl_Target === true){
							var wptexlAttrTarget = ' target="_blank"';
						}else{
							var wptexlAttrTarget = null;
						}

						if( e.data.wptexl_Download === true){
							var wptexlAttrDownload = ' download="true"';
						}else{
							var wptexlAttrDownload = null;
						}

                		editor.insertContent('<a href="'+e.data.wptexl_URL+'"'+wptexlAttrRel+wptexlAttrTitle+wptexlAttrID+wptexlAttrClass+wptexlAttrDownload+wptexlAttrTarget+'>'+e.data.wptexl_LinkText+'</a>');
            		}

				})

			}

		});

	});

})();