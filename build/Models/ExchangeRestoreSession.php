<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExchangeRestoreSession
 */
class ExchangeRestoreSession
{
    /**
     */
    private array $granularMailboxRestoreArtifacts = [];

    /**
     * A collection of restore points and destination details that can be used to restore Exchange mailboxes.
     */
    private array $mailboxRestoreArtifacts = [];

    /**
     * A collection of user mailboxes and destination details that can be used to restore Exchange mailboxes.
     * @var string[]
     */
    private array $mailboxRestoreArtifactsBulkAdditionRequests = [];


    public function getGranularMailboxRestoreArtifacts(): array
    {
        return $this->granularMailboxRestoreArtifacts;
    }

    public function setGranularMailboxRestoreArtifacts(array $granularMailboxRestoreArtifacts): self
    {
        $this->granularMailboxRestoreArtifacts = $granularMailboxRestoreArtifacts;
        return $this;
    }

    public function getMailboxRestoreArtifacts(): array
    {
        return $this->mailboxRestoreArtifacts;
    }

    public function setMailboxRestoreArtifacts(array $mailboxRestoreArtifacts): self
    {
        $this->mailboxRestoreArtifacts = $mailboxRestoreArtifacts;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMailboxRestoreArtifactsBulkAdditionRequests(): array
    {
        return $this->mailboxRestoreArtifactsBulkAdditionRequests;
    }

    /**
     * @param string[] $mailboxRestoreArtifactsBulkAdditionRequests
     */
    public function setMailboxRestoreArtifactsBulkAdditionRequests(array $mailboxRestoreArtifactsBulkAdditionRequests): self
    {
        $this->mailboxRestoreArtifactsBulkAdditionRequests = $mailboxRestoreArtifactsBulkAdditionRequests;
        return $this;
    }

}
