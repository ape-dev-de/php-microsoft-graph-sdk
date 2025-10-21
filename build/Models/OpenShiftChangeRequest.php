<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OpenShiftChangeRequest
 */
class OpenShiftChangeRequest
{
    public function __construct(
        /** ID for the open shift. */
        public ?string $openShiftId = null
    ) {}
}
