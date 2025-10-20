<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxProtectionUnitsBulkAdditionJob
 */
class MailboxProtectionUnitsBulkAdditionJob
{
    /**
     * The list of Exchange directoryObjectIds to add to the Exchange protection policy.
     */
    private ?string $directoryObjectIds;

    /**
     * The list of Exchange email addresses to add to the Exchange protection policy.
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
