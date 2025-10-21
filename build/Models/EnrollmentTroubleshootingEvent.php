<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnrollmentTroubleshootingEvent
 */
class EnrollmentTroubleshootingEvent
{
    public function __construct(
        /** Azure AD device identifier. */
        public ?string $deviceId = null,
        /**  */
        public ?string $enrollmentType = null,
        /**  */
        public ?string $failureCategory = null,
        /** Detailed failure reason. */
        public ?string $failureReason = null,
        /** Device identifier created or collected by Intune. */
        public ?string $managedDeviceIdentifier = null,
        /** Operating System. */
        public ?string $operatingSystem = null,
        /** OS Version. */
        public ?string $osVersion = null,
        /** Event representing an enrollment failure. */
        public ?string $userId = null
    ) {}
}
