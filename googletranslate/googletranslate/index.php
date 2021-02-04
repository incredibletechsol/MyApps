<!DOCTYPE html>
<html lang="en-US">
 <link href="language.css" rel="stylesheet">
<body>

<h1>My Web Page</h1>

<p>Hello everybody!</p>

<p>Translate this page:</p>

<div id="google_translate_element"></div>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 

<script>
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<p>You can translate the content of this page by selecting a language in the select box.</p>

</body>
</html>
