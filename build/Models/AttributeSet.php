<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeSet
 */
class AttributeSet
{
    public function __construct(
        /** Description of the attribute set. Can be up to 128 characters long and include Unicode characters. Can be changed later. */
        public ?string $description = null,
        /** Maximum number of custom security attributes that can be defined in this attribute set. Default value is null. If not specified, the administrator can add up to the maximum of 500 active attributes per tenant. Can be changed later. */
        public ?string $maxAttributesPerSet = null
    ) {}
}
