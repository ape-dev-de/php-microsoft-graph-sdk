<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipRequest
 */
class DelegatedAdminRelationshipRequest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?DelegatedAdminRelationshipRequestAction $action = null,
        /** The date and time in ISO 8601 format and in UTC time when the relationship request was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The date and time in ISO 8601 format and UTC time when this relationship request was last modified. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The status of the request. Read-only. The possible values are: created, pending, succeeded, failed, unknownFutureValue. */
        public ?DelegatedAdminRelationshipRequestStatus $status = null
    ) {}
}
