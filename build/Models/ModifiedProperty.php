<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ModifiedProperty
 */
class ModifiedProperty
{
    public function __construct(
        /** Indicates the property name of the target attribute that was changed. */
        public ?string $displayName = null,
        /** Indicates the updated value for the propery. */
        public ?string $newValue = null,
        /** Indicates the previous value (before the update) for the property. */
        public ?string $oldValue = null
    ) {}
}
