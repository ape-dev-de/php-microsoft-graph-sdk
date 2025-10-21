<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminRelationshipOperation
 */
class DelegatedAdminRelationshipOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The time in ISO 8601 format and in UTC time when the long-running operation was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The data (payload) for the operation. Read-only. */
        public ?string $data = null,
        /** The time in ISO 8601 format and in UTC time when the long-running operation was last modified. Read-only. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /**  */
        public ?DelegatedAdminRelationshipOperationType $operationType = null,
        /**  */
        public ?LongRunningOperationStatus $status = null
    ) {}
}
