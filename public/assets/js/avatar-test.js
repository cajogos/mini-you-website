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
	"body": {
		"shape": "shape1",
		"color": "lightblue"
	},
	"eyes": {
		"shape": "basic",
		"color": "red"
	},
	"tops": {
		"shape": "vneck",
		"color": "purple"
	},
	"bottoms": {
		"shape": "shorts",
		"color": "blue"
	}
}`;

	MINI_YOU.EDITOR.setText(code);
});
