<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Test\Amadeus\Client\Struct\Fare\GetFareRules;

use Amadeus\Client\Struct\Fare\GetFareRules\CorporateId;
use Amadeus\Client\Struct\Fare\GetFareRules\MultiCorporate;
use Test\Amadeus\BaseTestCase;

/**
 * MultiCorporateTest
 *
 * @package Test\Amadeus\Client\Struct\Fare\GetFareRules
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class MultiCorporateTest extends BaseTestCase
{
    public function testCanMakeWithNegoFares()
    {
        $obj = new MultiCorporate(
            [],
            [
                'ABC132324',
                'ERKLZRJ'
            ]
        );

        $this->assertCount(2, $obj->corporateId);
        $this->assertEquals('ABC132324', $obj->corporateId[0]->identity);
        $this->assertEquals(CorporateId::QUAL_AMADEUS_NEGO_FARES, $obj->corporateId[0]->corporateQualifier);
        $this->assertEquals('ABC132324', $obj->corporateId[1]->identity);
        $this->assertEquals(CorporateId::QUAL_AMADEUS_NEGO_FARES, $obj->corporateId[1]->corporateQualifier);
    }
}