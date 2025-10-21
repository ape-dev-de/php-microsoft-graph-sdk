<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsDeviceADAccount
 */
class WindowsDeviceADAccount
{
    public function __construct(
        /** Not yet documented */
        public ?string $password = null,
        /** Not yet documented */
        public ?string $domainName = null,
        /** Not yet documented */
        public ?string $userName = null
    ) {}
}
