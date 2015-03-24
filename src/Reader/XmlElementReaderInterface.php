<?php

/*
 * This file is part of the Indigo Data Import Extra package.
 *
 * (c) Indigo Development Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Indigo\DataImport\Reader;

interface XmlElementReaderInterface
{
    /**
     * Parse the string given in parameter
     *
     * @param string $xmlElementAsString
     *
     * @return mixed can be anything that represents the data of the xml element
     */
    public function read($xmlElementAsString);
}
