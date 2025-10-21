<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AgreementAcceptance
 */
class AgreementAcceptance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identifier of the agreement file accepted by the user. */
        public ?string $agreementFileId = null,
        /** The identifier of the agreement. */
        public ?string $agreementId = null,
        /** The display name of the device used for accepting the agreement. */
        public ?string $deviceDisplayName = null,
        /** The unique identifier of the device used for accepting the agreement. Supports $filter (eq) and eq for null values. */
        public ?string $deviceId = null,
        /** The operating system used to accept the agreement. */
        public ?string $deviceOSType = null,
        /** The operating system version of the device used to accept the agreement. */
        public ?string $deviceOSVersion = null,
        /** The expiration date time of the acceptance. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ge, le) and eq for null values. */
        public ?\DateTimeInterface $expirationDateTime = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $recordedDateTime = null,
        /** The state of the agreement acceptance. Possible values are: accepted, declined. Supports $filter (eq). */
        public ?string $state = null,
        /** Display name of the user when the acceptance was recorded. */
        public ?string $userDisplayName = null,
        /** Email of the user when the acceptance was recorded. */
        public ?string $userEmail = null,
        /** The identifier of the user who accepted the agreement. Supports $filter (eq). */
        public ?string $userId = null,
        /** UPN of the user when the acceptance was recorded. */
        public ?string $userPrincipalName = null
    ) {}
}
