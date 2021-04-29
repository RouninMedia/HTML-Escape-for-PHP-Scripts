# HTML Escape for PHP Scripts
A simple PHP function to escape any HTML reserve characters submitted to a server-side script via an HTML `<form>`.

```
  //*******************************//
 // ESCAPE HTML-SOURCE FORM DATA  //
//*******************************//

function HTML_Escape($String) {

  $String = str_replace('\'', '&#39;', $String);
  $String = str_replace('"', '&quot;', $String);
  $String = str_replace('<', '&lt;', $String);
  $String = str_replace('>', '&gt;', $String);
  $String = str_replace('{', '&#123;', $String);
  $String = str_replace('}', '&#125;', $String);
  $String = str_replace('[', '&#91;', $String);
  $String = str_replace(']', '&#93;', $String);
  $String = str_replace(['\%', '%'], '&#37;', $String);
  $String = str_replace('*', '&#42;', $String);
  $String = str_replace(["\r\n", "\r", "\n"], '␤', $String);

  return $String;
}

$myData = HTML_Escape(htmlspecialchars($_POST['my-data'], ENT_NOQUOTES, 'UTF-8', FALSE));

```

______

## Reverse HTML Escape in Javascript (Optional)

It may be necessary to _reverse HTML Escape_ the HTML-escaped string, if the string ever needs to be displayed in:

 - `<input type="text" />`
 - `<textarea></textarea>`
 
on the client-side.

In this situation, the following `reverseHTMLEscape()` javascript function will return the string to its original form:

```
const reverseHTMLEscape = (escapedHTMLString) => {

  escapedHTMLString = escapedHTMLString.replace(/&lt;/g, '<');
  escapedHTMLString = escapedHTMLString.replace(/&gt;/g, '>');
  escapedHTMLString = escapedHTMLString.replace(/&#123;/g, '{');
  escapedHTMLString = escapedHTMLString.replace(/&#125;/g, '}');
  escapedHTMLString = escapedHTMLString.replace(/&#91;/g, '[');
  escapedHTMLString = escapedHTMLString.replace(/&#93;/g, ']');
  escapedHTMLString = escapedHTMLString.replace(/&#39;/g, '\'');
  escapedHTMLString = escapedHTMLString.replace(/&quot;/g, '"');
  escapedHTMLString = escapedHTMLString.replace(/&amp;/g, '&');
  escapedHTMLString = escapedHTMLString.replace(/&#37;/g, '%');
  escapedHTMLString = escapedHTMLString.replace(/&#42;/g, '*');
  escapedHTMLString = escapedHTMLString.replace(/␤/g, '\n');
  return escapedHTMLString;
};
```




