<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxProtectionUnitsBulkAdditionJob
 */
class MailboxProtectionUnitsBulkAdditionJob
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identity of person who created the job. */
        public ?IdentitySet $createdBy = null,
        /** The time of creation of the job. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The name of the protection units bulk addition job. */
        public ?string $displayName = null,
        /** Error details containing resource resolution failures, if any. */
        public ?PublicError $error = null,
        /** The identity of the person who last modified the job. */
        public ?IdentitySet $lastModifiedBy = null,
        /** Timestamp of the last modification made to the job. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /**  */
        public ?ProtectionUnitsBulkJobStatus $status = null,
        /** @var string[] The list of Exchange directoryObjectIds to add to the Exchange protection policy. */
        public array $directoryObjectIds = [],
        /** @var string[] The list of Exchange email addresses to add to the Exchange protection policy. */
        public array $mailboxes = []
    ) {}
}
