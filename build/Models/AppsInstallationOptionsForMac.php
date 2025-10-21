<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppsInstallationOptionsForMac
 */
class AppsInstallationOptionsForMac
{
    public function __construct(
        /** Specifies whether users can install Microsoft 365 apps on their MAC devices. The default value is true. */
        public ?bool $isMicrosoft365AppsEnabled = null,
        /** Specifies whether users can install Skype for Business on their MAC devices running OS X El Capitan 10.11 or later. The default value is true. */
        public ?bool $isSkypeForBusinessEnabled = null
    ) {}
}
