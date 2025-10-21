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
     * @var string[]
     */
    private array $directoryObjectIds = [];

    /**
     * The list of email addresses that are added to the corresponding Exchange restore session in a bulk operation.
     * @var string[]
     */
    private array $mailboxes = [];


    /**
     * @return string[]
     */
    public function getDirectoryObjectIds(): array
    {
        return $this->directoryObjectIds;
    }

    /**
     * @param string[] $directoryObjectIds
     */
    public function setDirectoryObjectIds(array $directoryObjectIds): self
    {
        $this->directoryObjectIds = $directoryObjectIds;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMailboxes(): array
    {
        return $this->mailboxes;
    }

    /**
     * @param string[] $mailboxes
     */
    public function setMailboxes(array $mailboxes): self
    {
        $this->mailboxes = $mailboxes;
        return $this;
    }

}
