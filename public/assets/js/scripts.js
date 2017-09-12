$(document).ready(function ()
{
	const canvasElement = $('canvas#creator');
	const editorElement = $('textarea.code-input');

	MINI_YOU.init(editorElement, canvasElement);

	let code = `{
	"info": {
		"name": "Carlos",
		"author": "cajogos@github"
	},
	"head" : {
		"color": "blue"
	}
}`;

	MINI_YOU.EDITOR.setText(code);
});