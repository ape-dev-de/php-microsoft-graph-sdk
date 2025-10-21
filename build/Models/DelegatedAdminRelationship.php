<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationship
 */
class DelegatedAdminRelationship
{
    public function __construct(
        /**  */
        public ?string $accessDetails = null,
        /** The date and time in ISO 8601 format and in UTC time when the relationship became active. Read-only. */
        public ?\DateTimeInterface $activatedDateTime = null,
        /** The duration by which the validity of the relationship is automatically extended, denoted in ISO 8601 format. Supported values are: P0D, PT0S, P180D. The default value is PT0S. PT0S indicates that the relationship expires when the endDateTime is reached and it isn''t automatically extended. */
        public ?string $autoExtendDuration = null,
        /** The date and time in ISO 8601 format and in UTC time when the relationship was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The display name and unique identifier of the customer of the relationship. This is configured either by the partner at the time the relationship is created or by the system after the customer approves the relationship. Can't be changed by the customer. */
        public ?string $customer = null,
        /** The display name of the relationship used for ease of identification. Must be unique across all delegated admin relationships of the partner and is set by the partner only when the relationship is in the created status and can't be changed by the customer. Maximum length is 50 characters. */
        public ?string $displayName = null,
        /** The duration of the relationship in ISO 8601 format. Must be a value between P1D and P2Y inclusive. This is set by the partner only when the relationship is in the created status and can't be changed by the customer. */
        public ?string $duration = null,
        /** The date and time in ISO 8601 format and in UTC time when the status of relationship changes to either terminated or expired. Calculated as endDateTime = activatedDateTime + duration. Read-only. */
        public ?\DateTimeInterface $endDateTime = null,
        /** The date and time in ISO 8601 format and in UTC time when the relationship was last modified. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The status of the relationship. Read Only. The possible values are: activating, active, approvalPending, approved, created, expired, expiring, terminated, terminating, terminationRequested, unknownFutureValue. Supports $orderby. */
        public ?string $status = null,
        /** The access assignments associated with the delegated admin relationship. */
        public array $accessAssignments = [],
        /** The long running operations associated with the delegated admin relationship. */
        public array $operations = [],
        /** @var string[] The requests associated with the delegated admin relationship. */
        public array $requests = []
    ) {}
}
