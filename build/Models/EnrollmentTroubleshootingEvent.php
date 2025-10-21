<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EnrollmentTroubleshootingEvent
 */
class EnrollmentTroubleshootingEvent
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Id used for tracing the failure in the service. */
        public ?string $correlationId = null,
        /** Time when the event occurred . */
        public ?\DateTimeInterface $eventDateTime = null,
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
        /** Identifier for the user that tried to enroll the device. */
        public ?string $userId = null
    ) {}
}
