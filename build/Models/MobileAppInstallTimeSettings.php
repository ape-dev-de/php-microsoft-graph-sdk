<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppInstallTimeSettings
 */
class MobileAppInstallTimeSettings
{
    public function __construct(
        /** The time at which the app should be installed. */
        public ?\DateTimeInterface $deadlineDateTime = null,
        /** The time at which the app should be available for installation. */
        public ?\DateTimeInterface $startDateTime = null,
        /** Contains properties used to determine when to offer an app to devices and when to install the app on devices. */
        public ?string $useLocalTime = null
    ) {}
}
