# SweetPrompt

[![GitHub stars](https://img.shields.io/github/stars/derogab/SweetPrompt.svg)](https://github.com/derogab/SweetPrompt/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/derogab/SweetPrompt.svg)](https://github.com/derogab/SweetPrompt/network)
[![GitHub issues](https://img.shields.io/github/issues/derogab/SweetPrompt.svg)](https://github.com/derogab/SweetPrompt/issues)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://raw.githubusercontent.com/derogab/SweetPrompt/master/LICENSE)
[![Status](https://img.shields.io/badge/status-deprecated-red.svg)](#deprecated)

An awesome replacement for JavaScript's prompt.
It is only an addition of [SweetAlert](https://github.com/t4t5/sweetalert) by Tristan Edwards ([@t4t5](https://github.com/t4t5)).

![Dimostration](https://cloud.githubusercontent.com/assets/4183824/5696868/a63946e8-99df-11e4-9d22-03f3579e2459.gif)

## Usage
You can download the package and reference the JavaScript and CSS files:

```html
<script src="lib/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="lib/sweet-alert.css">
<script src="lib/sweet-prompt.min.js"></script>
<link rel="stylesheet" type="text/css" href="lib/sweet-prompt.css">
```

## Example SweetAlert
View the [SweetAlert source](https://github.com/t4t5/sweetalert).

## Example SweetPrompt

```javascript
sweetPrompt("Title", "Description Content", "Confirm", "Cancel", function(response){

  console.log('This is your response: '+response);

});
```

## Credits
<b>Gabriele De Rosa</b>
<ul>
<li><a href="https://www.github.com/derogab">GitHub</a></li>
<li><a href="https://www.facebook.com/derogab">Facebook</a></li>
<li><a href="https://www.twitter.com/derogab">Twitter</a></li>
</ul>

## Deprecated
This repository is deprecated because **SweetPrompt** is now natively contained in [SweetAlert](https://github.com/t4t5/sweetalert).

## Donate
If this project help you reduce time to develop, you can [give me a cup of coffee](https://www.paypal.me/derogab) :)
