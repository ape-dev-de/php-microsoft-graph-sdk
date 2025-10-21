<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppInstallExperience
 */
class Win32LobAppInstallExperience
{
    public function __construct(
        /**  */
        public ?string $deviceRestartBehavior = null,
        /** Contains installation experience properties for a Win32 App */
        public ?string $runAsAccount = null
    ) {}
}
