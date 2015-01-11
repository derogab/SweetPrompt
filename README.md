# SweetPrompt
An awesome replacement for JavaScript's prompt.
It is only an addition of [SweetAlert](https://github.com/t4t5/sweetalert) by Tristan Edwards ([@t4t5](https://github.com/t4t5)).

#Usage
You can download the package and reference the JavaScript and CSS files:

```html
<script src="lib/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="lib/sweet-alert.css">
<script src="lib/sweet-prompt.min.js"></script>
<link rel="stylesheet" type="text/css" href="lib/sweet-prompt.css">
```

#Example SweetAlert
View the [original source](https://github.com/t4t5/sweetalert)

#Example SweetPrompt

```javascript
swalprompt("Title", "Description Content", "Confirm", "Cancel", function(response){

  console.log('This is your response: '+response);

});
```
