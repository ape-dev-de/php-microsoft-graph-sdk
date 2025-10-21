<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingSource
 */
class AttributeMappingSource
{
    public function __construct(
        /** Equivalent expression representation of this attributeMappingSource object. */
        public ?string $expression = null,
        /** Name parameter of the mapping source. Depending on the type property value, this can be the name of the function, the name of the source attribute, or a constant value to be used. */
        public ?string $name = null,
        /** If this object represents a function, lists function parameters. Parameters consist of attributeMappingSource objects themselves, allowing for complex expressions. If type isn't Function, this property is null/empty array. */
        public array $parameters = [],
        /**  */
        public ?string $type = null
    ) {}
}
