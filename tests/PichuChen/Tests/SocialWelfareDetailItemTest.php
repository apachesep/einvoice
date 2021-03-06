<?php 
/*
 * Copyright 2015 Pichu Chen, TIH
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PichuChen\Tests\einvoice;

use PichuChen\einvoice\SocialWelfareDetailItem;
//use PichuChen\einvoice\InvoiceDateItem;

class SocialWelfareDetailItemTest extends \PHPUnit\Framework\TestCase {

  var $mockFile = 'tests/mock/SocialWelfareDetailItem_response';

  function testGetRowNum(){
    $response = new SocialWelfareDetailItem(
      json_decode(file_get_contents($this->mockFile),true)
    );
    $this->assertEquals('0',$response->getRowNum());
  }

  function testGetLoveCode(){
    $response = new SocialWelfareDetailItem(
      json_decode(file_get_contents($this->mockFile),true)
    );
    $actual = $response->getLoveCode();
    $this->assertIsString($actual);
  }
  
  function testGetSocialWelfareBAN(){
    $response = new SocialWelfareDetailItem(
      json_decode(file_get_contents($this->mockFile),true)
    );
    $actual = $response->getSocialWelfareBAN();
    $this->assertIsString($actual);
  }

  function testGetSocialWelfareName(){
    $response = new SocialWelfareDetailItem(
      json_decode(file_get_contents($this->mockFile),true)
    );
    $actual = $response->getSocialWelfareName();
    $this->assertIsString($actual);
  }

  function testGetSocialWelfareAbbrev(){
    $response = new SocialWelfareDetailItem(
      json_decode(file_get_contents($this->mockFile),true)
    );
    $actual = $response->getSocialWelfareAbbrev();
    $this->assertIsString($actual);
  }

}



