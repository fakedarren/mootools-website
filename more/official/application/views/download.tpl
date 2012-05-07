<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MooTools More - Download</title>
	<?=$baseCSS?>
	<?php require($serverroot . 'application/views/shared/css.tpl');?>
</head>
<body class="<?=$mode?>" onload="prettyPrint()">
<?php require($serverroot . 'application/views/shared/header.tpl');?>
<div class="container">
	<div class="row">
	    <div class="span9">
			<h1>Download</h1>		
			<table class="table table-striped">
				<thead>
					<tr>
						<th colspan="2">File</th>
						<th>Provides</th>
						<th class="">Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox" /></td>
						<td>More</td>
						<td class="middle provides"><em>MooTools.More</em></td>
						<td class="description">MooTools More</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Events.Pseudos</td>
						<td class="middle provides"><em>Events.Pseudos</em></td>
						<td class="description">Adds the functionality to add pseudo events</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Class.Refactor</td>
						<td class="middle provides"><em>Class.refactor, Class.Refactor</em></td>
						<td class="description">Extends a class onto itself with new property, preserving any items attached to the class's namespace.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Class.Binds</td>
						<td class="middle provides"><em>Class.Binds</em></td>
						<td class="description">Automagically binds specified methods in a class to the instance of the class.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Class.Occlude</td>
						<td class="middle provides"><em>Class.Occlude</em></td>
						<td class="description">Prevents a class from being applied to a DOM element twice.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Chain.Wait</td>
						<td class="middle provides"><em>Chain.Wait</em></td>
						<td class="description">value, Adds a method to inject pauses between chained events.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Array.Extras</td>
						<td class="middle provides"><em>Array.Extras</em></td>
						<td class="description">Extends the Array native object to include useful methods to work with arrays.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Date</td>
						<td class="middle provides"><em>Date</em></td>
						<td class="description">Extends the Date native object to include methods useful in managing dates.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Date.Extras</td>
						<td class="middle provides"><em>Date.Extras</em></td>
						<td class="description">Extends the Date native object to include extra methods (on top of those in Date.js).</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Number.Format</td>
						<td class="middle provides"><em>Number.Format, Number.Extras</em></td>
						<td class="description">Extends the Number Type object to include a number formatting method.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Object.Extras</td>
						<td class="middle provides"><em>Object.Extras</em></td>
						<td class="description">Extra Object generics, like getFromPath which allows a path notation to child elements.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>String.Extras</td>
						<td class="middle provides"><em>String.Extras</em></td>
						<td class="description">Extends the String native object to include methods useful in managing various kinds of strings (query strings, urls, html, etc).</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>String.QueryString</td>
						<td class="middle provides"><em>String.QueryString</em></td>
						<td class="description">Methods for dealing with URI query strings.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>URI</td>
						<td class="middle provides"><em>URI</em></td>
						<td class="description">Provides methods useful in managing the window location and uris.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>URI.Relative</td>
						<td class="middle provides"><em>URI.Relative</em></td>
						<td class="description">Extends the URI class to add methods for computing relative and absolute urls.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Hash</td>
						<td class="middle provides"><em>Hash</em></td>
						<td class="description">Contains Hash Prototypes. Provides a means for overcoming the JavaScript practical impossibility of extending native Objects.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Hash.Extras</td>
						<td class="middle provides"><em>Hash.Extras</em></td>
						<td class="description">Extends the Hash Type to include getFromPath which allows a path notation to child elements.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Element.Forms</td>
						<td class="middle provides"><em>Element.Forms</em></td>
						<td class="description">Extends the Element native object to include methods useful in managing inputs.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Elements.From</td>
						<td class="middle provides"><em>Elements.from, Elements.From</em></td>
						<td class="description">Returns a collection of elements from a string of html.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Element.Event.Pseudos</td>
						<td class="middle provides"><em>Element.Event.Pseudos, Element.Delegation</em></td>
						<td class="description">Adds the functionality to add pseudo events for Elements</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Element.Event.Pseudos.Keys</td>
						<td class="middle provides"><em>Element.Event.Pseudos.Keys</em></td>
						<td class="description">Adds functionality fire events if certain keycombinations are pressed</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Element.Measure</td>
						<td class="middle provides"><em>Element.Measure</em></td>
						<td class="description">Extends the Element native object to include methods useful in measuring dimensions.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Element.Pin</td>
						<td class="middle provides"><em>Element.Pin</em></td>
						<td class="description">Extends the Element native object to include the pin method useful for fixed positioning for elements.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Element.Position</td>
						<td class="middle provides"><em>Element.Position</em></td>
						<td class="description">Extends the Element native object to include methods useful positioning elements relative to others.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Element.Shortcuts</td>
						<td class="middle provides"><em>Element.Shortcuts</em></td>
						<td class="description">Extends the Element native object to include some shortcut methods.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Form.Request</td>
						<td class="middle provides"><em>Form.Request</em></td>
						<td class="description">Handles the basic functionality of submitting a form and updating a dom element with the result.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Form.Request.Append</td>
						<td class="middle provides"><em>Form.Request.Append</em></td>
						<td class="description">Handles the basic functionality of submitting a form and updating a dom element with the result. The result is appended to the DOM element instead of replacing its contents.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Form.Validator</td>
						<td class="middle provides"><em>Form.Validator, InputValidator, FormValidator.BaseValidators</em></td>
						<td class="description">A css-class based form validation system.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Form.Validator.Inline</td>
						<td class="middle provides"><em>Form.Validator.Inline</em></td>
						<td class="description">Extends Form.Validator to add inline messages.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Form.Validator.Extras</td>
						<td class="middle provides"><em>Form.Validator.Extras</em></td>
						<td class="description">Additional validators for the Form.Validator class.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>OverText</td>
						<td class="middle provides"><em>OverText</em></td>
						<td class="description">Shows text over an input that disappears when the user clicks into it. The text remains hidden if the user adds a value.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Fx.Elements</td>
						<td class="middle provides"><em>Fx.Elements</em></td>
						<td class="description">Effect to change any number of CSS properties of any number of Elements.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Fx.Accordion</td>
						<td class="middle provides"><em>Fx.Accordion</em></td>
						<td class="description">An Fx.Elements extension which allows you to easily create accordion type controls.</td>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td>Fx.Move</td>
						<td class="middle provides"><em>Fx.Move</em></td>
						<td class="description">Defines Fx.Move, a class that works with Element.Position.js to transition an element from one location to another.</td>
					</tr>
					<tr>
						<th colspan="4">Options</th>
					</tr>
					<tr>
						<td><input type="checkbox" /></td>
						<td class="name">Include Compatibility</td>
						<td colspan="2" class="description">This puts MooTools in compatibility mode with previous versions (1.3 and 1.2).</td>
					</tr>
					<tr>
						<th colspan="4">Compressor</th>
					</tr>
					<tr>
						<td><input type="radio" name="compressor" /></td>
						<td>YUI Compressor</td>
						<td colspan="2">
							Uses <a href="http://www.julienlecomte.net/yuicompressor/">YUI Compressor</a> by <a href="http://www.julienlecomte.net">Julien Lecomte</a>, to clean whitespace and rename internal variables to shorter values. Highest compression ratio.
						</td>
					</tr>
					<tr>
						<td><input type="radio" name="compressor" /></td>
						<td>No Compression</td>
						<td colspan="2">Uncompressed source. Recommended in testing phase.</td>
					</tr>
				</tbody>
			</table>			
	    </div>
	    <div class="span3">
	    </div>
	  </div>
</div>
<?php require($serverroot . 'application/views/shared/footer.tpl');?>
<?php require($serverroot . 'application/views/shared/javascript.tpl');?>
</body>
</html>