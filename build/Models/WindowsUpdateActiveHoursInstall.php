<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateActiveHoursInstall
 */
class WindowsUpdateActiveHoursInstall
{
    public function __construct(
        /** Active Hours End */
        public ?string $activeHoursEnd = null,
        /** Active Hours Start */
        public ?string $activeHoursStart = null
    ) {}
}
