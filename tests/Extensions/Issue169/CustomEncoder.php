<?php namespace Neomerx\Tests\JsonApi\Extensions\Issue169;

use \Neomerx\JsonApi\Encoder\Encoder;
use \Neomerx\JsonApi\Contracts\Factories\FactoryInterface;
use Neomerx\JsonApi\Encoder\EncoderOptions;
use \Neomerx\JsonApi\Encoder\Serialize\ArraySerializerTrait;

/**
 * Copyright 2015-2017 info@neomerx.com
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
 */

/**
 * @package Neomerx\Tests\JsonApi
 */
class CustomEncoder extends Encoder
{
    use ArraySerializerTrait;

    /**
     * @param array               $schemas
     * @param EncoderOptions|null $encodeOptions
     *
     * @return CustomEncoder
     */
    public static function instance(array $schemas = [], EncoderOptions $encodeOptions = null)
    {
        return parent::instance($schemas, $encodeOptions);
    }

    /**
     * @return FactoryInterface
     */
    protected static function createFactory()
    {
        return new CustomFactory();
    }
}
