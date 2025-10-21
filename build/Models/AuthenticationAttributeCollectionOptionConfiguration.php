<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionOptionConfiguration
 */
class AuthenticationAttributeCollectionOptionConfiguration
{
    public function __construct(
        /** The label of the option that will be displayed to user, unless overridden. */
        public ?string $label = null,
        /** The value of the option that will be stored. */
        public ?string $value = null
    ) {}
}
