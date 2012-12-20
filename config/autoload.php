<?php

return array
(
	'BlueTihi\Context' => $path . (version_compare(PHP_VERSION, '5.3.4') < 0 ? 'lib/context_compat.php' : 'lib/context.php'),
	'BlueTihi\Engine' => $path . 'lib/core.php'
);