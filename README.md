# Basic PHP MVC example

Hello World kind of MVC framework. Just to teach the basics


## Short tags

The example view utilizes [PHP short open tags](http://www.php.net/manual/en/ini.core.php#ini.short-open-tag), 
for readability and shorter code.

This means that writing `<? foreach ($result as $product): ?>` instead of `<?php foreach ($result as $product): ?>`, 
and `<?= $product['id'] ?>` instead of `<?php echo $product['id'] ?>`. Also, note that we can leave out trailing
semicolons for single statements.

You might have to enable `short_open_tag` in your PHP config.