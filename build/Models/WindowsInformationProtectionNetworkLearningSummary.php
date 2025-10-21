<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionNetworkLearningSummary
 */
class WindowsInformationProtectionNetworkLearningSummary
{
    public function __construct(
        /** Device Count */
        public ?float $deviceCount = null,
        /** Windows Information Protection Network learning Summary entity. */
        public ?string $url = null
    ) {}
}
