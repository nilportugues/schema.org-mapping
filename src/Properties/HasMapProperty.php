<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A URL to a map of the place.
 */
class HasMapProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/hasMap';
    const PROPERTY_NAME = 'hasMap';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Place',
    ];
}