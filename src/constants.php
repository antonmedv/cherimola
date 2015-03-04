<?php
/* (c) Anton Medvedev <anton@elfet.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Boolean true constants
define('yes', true);
define('ok', true);
define('okay', true);
define('✔', true);
define('correct', true);

// Boolean false constants
define('no', false);
define('not', false);
define('✘', false);
define('wrong', false);

// Constants with a random boolean value
define('maybe', (bool)rand(0, 1));
define('perhaps', (bool)rand(0, 1));
define('possibly', (bool)rand(0, 2));
define('unlikely', rand(0, 99) < 20);
