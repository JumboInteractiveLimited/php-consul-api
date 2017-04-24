<?php namespace DCarbone\PHPConsulAPITests\Definition\Catalog;

/*
   Copyright 2016-2017 Daniel Carbone (daniel.p.carbone@gmail.com)

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

use DCarbone\PHPConsulAPI\Catalog\CatalogDeregistration;
use DCarbone\PHPConsulAPITests\Definition\AbstractDefinitionTestCases;

/**
 * Class CatalogDeregistrationDefinitionTest
 * @package DCarbone\PHPConsulAPITests\Definition\Catalog
 */
class CatalogDeregistrationDefinitionTest extends AbstractDefinitionTestCases
{
    /** @var bool */
    protected $requiresSetters = true;

    /**
     * @inheritDoc
     */
    protected function getSubjectClassName()
    {
        return CatalogDeregistration::class;
    }
}