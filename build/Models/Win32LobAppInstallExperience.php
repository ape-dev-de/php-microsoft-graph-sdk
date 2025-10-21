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
        public ?Win32LobAppRestartBehavior $deviceRestartBehavior = null,
        /**  */
        public ?RunAsAccountType $runAsAccount = null
    ) {}
}
