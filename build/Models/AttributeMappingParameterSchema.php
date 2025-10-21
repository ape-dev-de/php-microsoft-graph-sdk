<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeMappingParameterSchema
 */
class AttributeMappingParameterSchema
{
    public function __construct(
        /** The given parameter can be provided multiple times (for example, multiple input strings in the Concatenate(string,string,...) function). */
        public ?bool $allowMultipleOccurrences = null,
        /** Parameter name. */
        public ?string $name = null,
        /** true if the parameter is required; otherwise false. */
        public ?bool $required = null,
        /**  */
        public ?AttributeType $type = null
    ) {}
}
