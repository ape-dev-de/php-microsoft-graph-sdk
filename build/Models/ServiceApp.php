<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceApp
 */
class ServiceApp
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The Entra ID application ID. */
        public ?string $application = null,
        /** Timestamp of the effective activation of the service app. */
        public ?\DateTimeInterface $effectiveDateTime = null,
        /** Identity of the person who last modified the entity. */
        public ?string $lastModifiedBy = null,
        /** Timestamp of the last modification of the entity. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Timestamp of the creation of the service app entity. */
        public ?\DateTimeInterface $registrationDateTime = null,
        /** The status of the service app. This value indicates whether or not the application can be used to control the backup service. The possible values are: inactive, active, pendingActive, pendingInactive, unknownFutureValue. */
        public ?string $status = null
    ) {}
}
