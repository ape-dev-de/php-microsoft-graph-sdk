<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ControlScore
 */
class ControlScore
{
    public function __construct(
        /** Control action category (Identity, Data, Device, Apps, Infrastructure). */
        public ?string $controlCategory = null,
        /** Control unique name. */
        public ?string $controlName = null,
        /** Description of the control. */
        public ?string $description = null,
        /** Tenant achieved score for the control (it varies day by day depending on tenant operations on the control). */
        public ?string $score = null
    ) {}
}
