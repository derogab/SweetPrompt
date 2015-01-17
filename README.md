# SweetPrompt
An awesome replacement for JavaScript's prompt.
It is only an addition of [SweetAlert](https://github.com/t4t5/sweetalert) by Tristan Edwards ([@t4t5](https://github.com/t4t5)).

[See it in action!](http://bit.ly/sweetprompt)

![Dimostration](https://cloud.githubusercontent.com/assets/4183824/5696868/a63946e8-99df-11e4-9d22-03f3579e2459.gif)

#Usage
You can download the package and reference the JavaScript and CSS files:

```html
<script src="lib/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="lib/sweet-alert.css">
<script src="lib/sweet-prompt.min.js"></script>
<link rel="stylesheet" type="text/css" href="lib/sweet-prompt.css">
```

#Example SweetAlert
View the [SweetAlert source](https://github.com/t4t5/sweetalert)

#Example SweetPrompt

```javascript
sweetPrompt("Title", "Description Content", "Confirm", "Cancel", function(response){

  console.log('This is your response: '+response);

});
```
