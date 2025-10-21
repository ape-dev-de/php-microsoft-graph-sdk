<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterOperatorSchema
 */
class FilterOperatorSchema
{
    public function __construct(
        /**  */
        public ?string $arity = null,
        /**  */
        public ?string $multivaluedComparisonType = null,
        /** @var string[] Attribute types supported by the operator. Possible values are: Boolean, Binary, Reference, Integer, String. */
        public array $supportedAttributeTypes = []
    ) {}
}
