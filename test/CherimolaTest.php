<?php
/* (c) Anton Medvedev <anton@elfet.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require __DIR__ . '/../vendor/autoload.php';

class CherimolaTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param string $name
     * @param bool $value
     * @param bool $expected
     * @dataProvider constantsProvider
     */
    public function test($name, $value, $expected)
    {
        $this->assertTrue(defined($name), "Failed asserting that constant `$name` does not defined.");
        $this->assertInternalType('bool', $value, "Failed asserting that constant `$name` is not of type `bool`.");
        $this->assertEquals($expected, $value, "Failed asserting that constant `$name` is not `" . ($expected ? 'true' : 'false') . "`.");
    }

    public function constantsProvider()
    {
        return array(
            array('yes', yes, true),
            array('ok', ok, true),
            array('okay', okay, true),
            array('✔', ✔, true),
            array('no', no, false),
            array('not', not, false),
            array('✘', ✘, false),
        );
    }
    
    /**
     * @param string $name
     * @param bool $value
     * @dataProvider randomConstantsProvider
     */
    public function testRandomConstants($name, $value)
    {
        $this->assertTrue(defined($name), "Failed asserting that constant `$name` does not defined.");
        $this->assertInternalType('bool', $value, "Failed asserting that constant `$name` is not of type `bool`.");
    }
    
    public function randomConstantsProvider()
    {
        return array(
            array('maybe', maybe),
            array('perhaps', perhaps),
            array('possibly', possibly),
        );
    }
}
