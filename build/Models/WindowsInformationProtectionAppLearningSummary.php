<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionAppLearningSummary
 */
class WindowsInformationProtectionAppLearningSummary
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Application Name */
        public ?string $applicationName = null,
        /**  */
        public ?string $applicationType = null,
        /** Device Count */
        public ?float $deviceCount = null
    ) {}
}
