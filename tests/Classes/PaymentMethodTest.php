<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\PaymentMethod;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PaymentMethodTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PaymentMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PaymentMethod::schemaUrl(), "http://schema.org/PaymentMethod");
    }


}