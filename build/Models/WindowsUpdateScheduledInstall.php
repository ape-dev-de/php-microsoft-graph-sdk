<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsUpdateScheduledInstall
 */
class WindowsUpdateScheduledInstall
{
    public function __construct(
        /**  */
        public ?string $scheduledInstallDay = null,
        /** Scheduled Install Time during day */
        public ?string $scheduledInstallTime = null
    ) {}
}
