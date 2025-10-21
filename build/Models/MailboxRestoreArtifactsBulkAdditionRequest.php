<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxRestoreArtifactsBulkAdditionRequest
 */
class MailboxRestoreArtifactsBulkAdditionRequest
{
    public function __construct(
        /** @var string[] The list of directory object IDs that are added to the corresponding Exchange restore session in a bulk operation. */
        public array $directoryObjectIds = [],
        /** @var string[] The list of email addresses that are added to the corresponding Exchange restore session in a bulk operation. */
        public array $mailboxes = []
    ) {}
}
