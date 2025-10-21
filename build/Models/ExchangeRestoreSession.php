<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExchangeRestoreSession
 */
class ExchangeRestoreSession
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The time of completion of the restore session. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The identity of person who created the restore session. */
        public ?IdentitySet $createdBy = null,
        /** The time of creation of the restore session. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Contains error details if the restore session fails or completes with an error. */
        public ?PublicError $error = null,
        /** Identity of the person who last modified the restore session. */
        public ?IdentitySet $lastModifiedBy = null,
        /** Timestamp of the last modification of the restore session. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Indicates whether the restore session was created normally or by a bulk job. */
        public ?RestoreJobType $restoreJobType = null,
        /** The number of metadata artifacts that belong to this restore session. */
        public ?RestoreSessionArtifactCount $restoreSessionArtifactCount = null,
        /** Status of the restore session. The value is an aggregated status of the restored artifacts. The possible values are: draft, activating, active, completedWithError, completed, unknownFutureValue, failed. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: failed. */
        public ?RestoreSessionStatus $status = null,
        /**  */
        public array $granularMailboxRestoreArtifacts = [],
        /** A collection of restore points and destination details that can be used to restore Exchange mailboxes. */
        public array $mailboxRestoreArtifacts = [],
        /** A collection of user mailboxes and destination details that can be used to restore Exchange mailboxes. */
        public array $mailboxRestoreArtifactsBulkAdditionRequests = []
    ) {}
}
