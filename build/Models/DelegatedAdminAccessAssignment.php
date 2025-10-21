<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminAccessAssignment
 */
class DelegatedAdminAccessAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?DelegatedAdminAccessContainer $accessContainer = null,
        /**  */
        public ?DelegatedAdminAccessDetails $accessDetails = null,
        /** The date and time in ISO 8601 format and in UTC time when the access assignment was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The date and time in ISO 8601 and in UTC time when this access assignment was last modified. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The status of the access assignment. Read-only. The possible values are: pending, active, deleting, deleted, error, unknownFutureValue. */
        public ?DelegatedAdminAccessAssignmentStatus $status = null
    ) {}
}
