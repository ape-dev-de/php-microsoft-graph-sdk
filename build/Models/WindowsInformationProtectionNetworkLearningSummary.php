<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionNetworkLearningSummary
 */
class WindowsInformationProtectionNetworkLearningSummary
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Device Count */
        public ?float $deviceCount = null,
        /** Website url */
        public ?string $url = null
    ) {}
}
