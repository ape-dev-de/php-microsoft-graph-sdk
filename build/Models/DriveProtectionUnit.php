<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveProtectionUnit
 */
class DriveProtectionUnit
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identity of the person who created the protection unit. */
        public ?IdentitySet $createdBy = null,
        /** The time of creation of the protection unit. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Contains error details if an error occurred while creating a protection unit. */
        public ?PublicError $error = null,
        /** The identity of person who last modified the protection unit. */
        public ?IdentitySet $lastModifiedBy = null,
        /** Timestamp of the last modification of this protection unit. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The unique identifier of the protection policy based on which protection unit was created. */
        public ?string $policyId = null,
        /** The status of the protection unit. The possible values are: protectRequested, protected, unprotectRequested, unprotected, removeRequested, unknownFutureValue, offboardRequested, offboarded, cancelOffboardRequested. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: offboardRequested, offboarded, cancelOffboardRequested. */
        public ?ProtectionUnitStatus $status = null,
        /** ID of the directory object. */
        public ?string $directoryObjectId = null,
        /** Display name of the directory object. */
        public ?string $displayName = null,
        /** Email associated with the directory object. */
        public ?string $email = null
    ) {}
}
