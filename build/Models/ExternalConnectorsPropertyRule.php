<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsPropertyRule
 */
class ExternalConnectorsPropertyRule
{
    public function __construct(
        /**  */
        public ?string $operation = null,
        /** The property from the externalItem schema. Required. */
        public ?string $property = null,
        /** @var string[] A collection with one or many strings. One or more specified strings are matched with the specified property using the specified operation. Required. */
        public array $values = [],
        /**  */
        public ?string $valuesJoinedBy = null
    ) {}
}
