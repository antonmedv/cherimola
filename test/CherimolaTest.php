<?php
/* (c) Anton Medvedev <anton@elfet.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require __DIR__ . '/../vendor/autoload.php';

class CherimolaTest extends PHPUnit_Framework_TestCase
{
    public function testYes()
    {
        $this->assertTrue(defined('yes'), 'Failed asserting that constant `yes` does not defined.');
        $this->assertInternalType('bool', yes, 'Failed asserting that constant `yes` is not of type `bool`.');
        $this->assertTrue(yes, 'Failed asserting that constant `yes` is not `true`.');
    }

    /**
     * @depends testYes
     */
    public function testOk()
    {
        $this->assertTrue(defined('ok'), 'Failed asserting that constant `ok` does not defined.');
        $this->assertInternalType('bool', ok, 'Failed asserting that constant `ok` is not of type `bool`.');
        $this->assertEquals(yes, ok, 'Failed asserting that constant `ok` is not match constant `yes`.');
    }

    /**
     * @depends testOk
     */
    public function testOkay()
    {
        $this->assertTrue(defined('okay'), 'Failed asserting that constant `okay` does not defined.');
        $this->assertInternalType('bool', okay, 'Failed asserting that constant `ok` is not of type `bool`.');
        $this->assertEquals(ok, okay, 'Failed asserting that constant `okay` is not match constant `ok`.');
    }

    public function testNo()
    {
        $this->assertTrue(defined('no'), 'Failed asserting that constant `no` does not defined.');
        $this->assertInternalType('bool', no, 'Failed asserting that constant `no` is not of type `bool`.');
        $this->assertFalse(no, 'Failed asserting that constant `no` is not `false`.');
    }

    /**
     * @depends testNo
     */
    public function testNot()
    {
        $this->assertTrue(defined('not'), 'Failed asserting that constant `not` does not defined.');
        $this->assertInternalType('bool', not, 'Failed asserting that constant `not` is not of type `bool`.');
        $this->assertEquals(no, not, 'Failed asserting that constant `not` is not match constant `no`.');
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
