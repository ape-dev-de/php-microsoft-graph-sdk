<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxRestoreArtifactsBulkAdditionRequest
 */
class MailboxRestoreArtifactsBulkAdditionRequest
{
    /**
     * The list of directory object IDs that are added to the corresponding Exchange restore session in a bulk operation.
     */
    private ?string $directoryObjectIds;

    /**
     * The list of email addresses that are added to the corresponding Exchange restore session in a bulk operation.
     */
    private ?string $mailboxes;

    public function getDirectoryObjectIds(): ?string
    {
        return $this->directoryObjectIds;
    }

    public function setDirectoryObjectIds(?string $directoryObjectIds): self
    {
        $this->directoryObjectIds = $directoryObjectIds;
        return $this;
    }

    public function getMailboxes(): ?string
    {
        return $this->mailboxes;
    }

    public function setMailboxes(?string $mailboxes): self
    {
        $this->mailboxes = $mailboxes;
        return $this;
    }

}
