<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertTrigger
 */
class AlertTrigger
{
    public function __construct(
        /** Name of the property serving as a detection trigger. */
        public ?string $name = null,
        /** Type of the property in the key:value pair for interpretation. For example, String, Boolean etc. */
        public ?string $type = null,
        /** Value of the property serving as a detection trigger. */
        public ?string $value = null
    ) {}
}
