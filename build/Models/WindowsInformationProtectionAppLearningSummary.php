<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionAppLearningSummary
 */
class WindowsInformationProtectionAppLearningSummary
{
    public function __construct(
        /** Application Name */
        public ?string $applicationName = null,
        /**  */
        public ?string $applicationType = null,
        /** Windows Information Protection AppLearning Summary entity. */
        public ?string $deviceCount = null
    ) {}
}
