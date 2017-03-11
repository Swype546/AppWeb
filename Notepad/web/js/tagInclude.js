function wrapText(elementID, openTag, closeTag) {
	var textArea = $('#' + elementID);
	var len = textArea.val().length;
	var start = textArea[0].selectionStart;
	var end = textArea[0].selectionEnd;
	var selectedText = textArea.val().substring(start, end);
	var replacement = openTag + selectedText + closeTag;
	textArea.val(textArea.val().substring(0, start) + replacement +
	textArea.val().substring(end, len));
}
$(document).ready(function(){
	$('#form_tag').click(function() {
		wrapText("form_content", "<tag>", "</tag>");
	});
});

