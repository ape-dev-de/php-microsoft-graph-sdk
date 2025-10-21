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
        /** Whether the local device time or UTC time should be used when determining the available and deadline times. */
        public ?bool $useLocalTime = null
    ) {}
}
