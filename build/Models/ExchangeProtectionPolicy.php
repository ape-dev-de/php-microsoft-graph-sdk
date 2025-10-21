<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExchangeProtectionPolicy
 */
class ExchangeProtectionPolicy
{
    /**
     * The rules associated with the Exchange protection policy.
     */
    private array $mailboxInclusionRules = [];

    /**
     * The protection units (mailboxes) that are  protected under the Exchange protection policy.
     */
    private array $mailboxProtectionUnits = [];

    /**
     * @var string[]
     */
    private array $mailboxProtectionUnitsBulkAdditionJobs = [];


    public function getMailboxInclusionRules(): array
    {
        return $this->mailboxInclusionRules;
    }

    public function setMailboxInclusionRules(array $mailboxInclusionRules): self
    {
        $this->mailboxInclusionRules = $mailboxInclusionRules;
        return $this;
    }

    public function getMailboxProtectionUnits(): array
    {
        return $this->mailboxProtectionUnits;
    }

    public function setMailboxProtectionUnits(array $mailboxProtectionUnits): self
    {
        $this->mailboxProtectionUnits = $mailboxProtectionUnits;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMailboxProtectionUnitsBulkAdditionJobs(): array
    {
        return $this->mailboxProtectionUnitsBulkAdditionJobs;
    }

    /**
     * @param string[] $mailboxProtectionUnitsBulkAdditionJobs
     */
    public function setMailboxProtectionUnitsBulkAdditionJobs(array $mailboxProtectionUnitsBulkAdditionJobs): self
    {
        $this->mailboxProtectionUnitsBulkAdditionJobs = $mailboxProtectionUnitsBulkAdditionJobs;
        return $this;
    }

}
