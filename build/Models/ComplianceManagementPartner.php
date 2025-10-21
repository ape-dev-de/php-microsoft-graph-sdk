<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ComplianceManagementPartner
 */
class ComplianceManagementPartner
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** User groups which enroll Android devices through partner. */
        public array $androidEnrollmentAssignments = [],
        /** Partner onboarded for Android devices. */
        public ?bool $androidOnboarded = null,
        /** Partner display name */
        public ?string $displayName = null,
        /** User groups which enroll ios devices through partner. */
        public array $iosEnrollmentAssignments = [],
        /** Partner onboarded for ios devices. */
        public ?bool $iosOnboarded = null,
        /** Timestamp of last heartbeat after admin onboarded to the compliance management partner */
        public ?\DateTimeInterface $lastHeartbeatDateTime = null,
        /** User groups which enroll Mac devices through partner. */
        public array $macOsEnrollmentAssignments = [],
        /** Partner onboarded for Mac devices. */
        public ?bool $macOsOnboarded = null,
        /** Compliance management partner for all platforms */
        public ?string $partnerState = null
    ) {}
}
