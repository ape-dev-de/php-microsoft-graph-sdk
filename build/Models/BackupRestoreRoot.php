<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BackupRestoreRoot
 */
class BackupRestoreRoot
{
    /**
     * Represents the tenant-level status of the Backup Storage service.
     */
    private ?string $serviceStatus;

    /**
     * The list of drive inclusion rules applied to the tenant.
     */
    private array $driveInclusionRules = [];

    /**
     * The list of drive protection units in the tenant.
     */
    private array $driveProtectionUnits = [];

    /**
     */
    private array $driveProtectionUnitsBulkAdditionJobs = [];

    /**
     * The list of Exchange protection policies in the tenant.
     */
    private array $exchangeProtectionPolicies = [];

    /**
     * The list of Exchange restore sessions available in the tenant.
     */
    private array $exchangeRestoreSessions = [];

    /**
     * The list of mailbox inclusion rules applied to the tenant.
     */
    private array $mailboxInclusionRules = [];

    /**
     * The list of mailbox protection units in the tenant.
     */
    private array $mailboxProtectionUnits = [];

    /**
     */
    private array $mailboxProtectionUnitsBulkAdditionJobs = [];

    /**
     * The list of OneDrive for Business protection policies in the tenant.
     */
    private array $oneDriveForBusinessProtectionPolicies = [];

    /**
     * The list of OneDrive for Business restore sessions available in the tenant.
     */
    private array $oneDriveForBusinessRestoreSessions = [];

    /**
     * List of protection policies in the tenant.
     */
    private array $protectionPolicies = [];

    /**
     * List of protection units in the tenant.
     */
    private array $protectionUnits = [];

    /**
     * List of restore points in the tenant.
     */
    private array $restorePoints = [];

    /**
     * List of restore sessions in the tenant.
     */
    private array $restoreSessions = [];

    /**
     * List of Backup Storage apps in the tenant.
     */
    private array $serviceApps = [];

    /**
     * The list of SharePoint protection policies in the tenant.
     */
    private array $sharePointProtectionPolicies = [];

    /**
     * The list of SharePoint restore sessions available in the tenant.
     */
    private array $sharePointRestoreSessions = [];

    /**
     * The list of site inclusion rules applied to the tenant.
     */
    private array $siteInclusionRules = [];

    /**
     * The list of site protection units in the tenant.
     */
    private array $siteProtectionUnits = [];

    /**
     * @var string[]
     */
    private array $siteProtectionUnitsBulkAdditionJobs = [];


    public function getServiceStatus(): ?string
    {
        return $this->serviceStatus;
    }

    public function setServiceStatus(?string $serviceStatus): self
    {
        $this->serviceStatus = $serviceStatus;
        return $this;
    }

    public function getDriveInclusionRules(): array
    {
        return $this->driveInclusionRules;
    }

    public function setDriveInclusionRules(array $driveInclusionRules): self
    {
        $this->driveInclusionRules = $driveInclusionRules;
        return $this;
    }

    public function getDriveProtectionUnits(): array
    {
        return $this->driveProtectionUnits;
    }

    public function setDriveProtectionUnits(array $driveProtectionUnits): self
    {
        $this->driveProtectionUnits = $driveProtectionUnits;
        return $this;
    }

    public function getDriveProtectionUnitsBulkAdditionJobs(): array
    {
        return $this->driveProtectionUnitsBulkAdditionJobs;
    }

    public function setDriveProtectionUnitsBulkAdditionJobs(array $driveProtectionUnitsBulkAdditionJobs): self
    {
        $this->driveProtectionUnitsBulkAdditionJobs = $driveProtectionUnitsBulkAdditionJobs;
        return $this;
    }

    public function getExchangeProtectionPolicies(): array
    {
        return $this->exchangeProtectionPolicies;
    }

    public function setExchangeProtectionPolicies(array $exchangeProtectionPolicies): self
    {
        $this->exchangeProtectionPolicies = $exchangeProtectionPolicies;
        return $this;
    }

    public function getExchangeRestoreSessions(): array
    {
        return $this->exchangeRestoreSessions;
    }

    public function setExchangeRestoreSessions(array $exchangeRestoreSessions): self
    {
        $this->exchangeRestoreSessions = $exchangeRestoreSessions;
        return $this;
    }

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

    public function getMailboxProtectionUnitsBulkAdditionJobs(): array
    {
        return $this->mailboxProtectionUnitsBulkAdditionJobs;
    }

    public function setMailboxProtectionUnitsBulkAdditionJobs(array $mailboxProtectionUnitsBulkAdditionJobs): self
    {
        $this->mailboxProtectionUnitsBulkAdditionJobs = $mailboxProtectionUnitsBulkAdditionJobs;
        return $this;
    }

    public function getOneDriveForBusinessProtectionPolicies(): array
    {
        return $this->oneDriveForBusinessProtectionPolicies;
    }

    public function setOneDriveForBusinessProtectionPolicies(array $oneDriveForBusinessProtectionPolicies): self
    {
        $this->oneDriveForBusinessProtectionPolicies = $oneDriveForBusinessProtectionPolicies;
        return $this;
    }

    public function getOneDriveForBusinessRestoreSessions(): array
    {
        return $this->oneDriveForBusinessRestoreSessions;
    }

    public function setOneDriveForBusinessRestoreSessions(array $oneDriveForBusinessRestoreSessions): self
    {
        $this->oneDriveForBusinessRestoreSessions = $oneDriveForBusinessRestoreSessions;
        return $this;
    }

    public function getProtectionPolicies(): array
    {
        return $this->protectionPolicies;
    }

    public function setProtectionPolicies(array $protectionPolicies): self
    {
        $this->protectionPolicies = $protectionPolicies;
        return $this;
    }

    public function getProtectionUnits(): array
    {
        return $this->protectionUnits;
    }

    public function setProtectionUnits(array $protectionUnits): self
    {
        $this->protectionUnits = $protectionUnits;
        return $this;
    }

    public function getRestorePoints(): array
    {
        return $this->restorePoints;
    }

    public function setRestorePoints(array $restorePoints): self
    {
        $this->restorePoints = $restorePoints;
        return $this;
    }

    public function getRestoreSessions(): array
    {
        return $this->restoreSessions;
    }

    public function setRestoreSessions(array $restoreSessions): self
    {
        $this->restoreSessions = $restoreSessions;
        return $this;
    }

    public function getServiceApps(): array
    {
        return $this->serviceApps;
    }

    public function setServiceApps(array $serviceApps): self
    {
        $this->serviceApps = $serviceApps;
        return $this;
    }

    public function getSharePointProtectionPolicies(): array
    {
        return $this->sharePointProtectionPolicies;
    }

    public function setSharePointProtectionPolicies(array $sharePointProtectionPolicies): self
    {
        $this->sharePointProtectionPolicies = $sharePointProtectionPolicies;
        return $this;
    }

    public function getSharePointRestoreSessions(): array
    {
        return $this->sharePointRestoreSessions;
    }

    public function setSharePointRestoreSessions(array $sharePointRestoreSessions): self
    {
        $this->sharePointRestoreSessions = $sharePointRestoreSessions;
        return $this;
    }

    public function getSiteInclusionRules(): array
    {
        return $this->siteInclusionRules;
    }

    public function setSiteInclusionRules(array $siteInclusionRules): self
    {
        $this->siteInclusionRules = $siteInclusionRules;
        return $this;
    }

    public function getSiteProtectionUnits(): array
    {
        return $this->siteProtectionUnits;
    }

    public function setSiteProtectionUnits(array $siteProtectionUnits): self
    {
        $this->siteProtectionUnits = $siteProtectionUnits;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSiteProtectionUnitsBulkAdditionJobs(): array
    {
        return $this->siteProtectionUnitsBulkAdditionJobs;
    }

    /**
     * @param string[] $siteProtectionUnitsBulkAdditionJobs
     */
    public function setSiteProtectionUnitsBulkAdditionJobs(array $siteProtectionUnitsBulkAdditionJobs): self
    {
        $this->siteProtectionUnitsBulkAdditionJobs = $siteProtectionUnitsBulkAdditionJobs;
        return $this;
    }

}
