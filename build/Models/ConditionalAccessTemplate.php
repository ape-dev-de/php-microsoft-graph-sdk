<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessTemplate
 */
class ConditionalAccessTemplate
{
    public function __construct(
        /** The user-friendly name of the template. */
        public ?string $description = null,
        /**  */
        public ?string $details = null,
        /** The user-friendly name of the template. */
        public ?string $name = null,
        /**  */
        public ?string $scenarios = null
    ) {}
}
