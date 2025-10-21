<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserAttributeValuesItem
 */
class UserAttributeValuesItem
{
    public function __construct(
        /** Determines whether the value is set as the default. */
        public ?bool $isDefault = null,
        /** The display name of the property displayed to the user in the user flow. */
        public ?string $name = null,
        /** The value that is set when this item is selected. */
        public ?string $value = null
    ) {}
}
