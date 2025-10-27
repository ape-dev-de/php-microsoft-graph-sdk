<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BackupRestoreRoot
 */
class BackupRestoreRoot
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the tenant-level status of the Backup Storage service.
     * @var ServiceStatus|\stdClass|null
     */
    public mixed $serviceStatus = null;

    /** 
     * The list of drive inclusion rules applied to the tenant.
     * @var DriveProtectionRule[]
     */
    public array $driveInclusionRules = [];

    /** 
     * The list of drive protection units in the tenant.
     * @var DriveProtectionUnit[]
     */
    public array $driveProtectionUnits = [];

    /** 
     * 
     * @var DriveProtectionUnitsBulkAdditionJob[]
     */
    public array $driveProtectionUnitsBulkAdditionJobs = [];

    /** 
     * The list of Exchange protection policies in the tenant.
     * @var ExchangeProtectionPolicy[]
     */
    public array $exchangeProtectionPolicies = [];

    /** 
     * The list of Exchange restore sessions available in the tenant.
     * @var ExchangeRestoreSession[]
     */
    public array $exchangeRestoreSessions = [];

    /** 
     * The list of mailbox inclusion rules applied to the tenant.
     * @var MailboxProtectionRule[]
     */
    public array $mailboxInclusionRules = [];

    /** 
     * The list of mailbox protection units in the tenant.
     * @var MailboxProtectionUnit[]
     */
    public array $mailboxProtectionUnits = [];

    /** 
     * 
     * @var MailboxProtectionUnitsBulkAdditionJob[]
     */
    public array $mailboxProtectionUnitsBulkAdditionJobs = [];

    /** 
     * The list of OneDrive for Business protection policies in the tenant.
     * @var OneDriveForBusinessProtectionPolicy[]
     */
    public array $oneDriveForBusinessProtectionPolicies = [];

    /** 
     * The list of OneDrive for Business restore sessions available in the tenant.
     * @var OneDriveForBusinessRestoreSession[]
     */
    public array $oneDriveForBusinessRestoreSessions = [];

    /** 
     * List of protection policies in the tenant.
     * @var ProtectionPolicyBase[]
     */
    public array $protectionPolicies = [];

    /** 
     * List of protection units in the tenant.
     * @var ProtectionUnitBase[]
     */
    public array $protectionUnits = [];

    /** 
     * List of restore points in the tenant.
     * @var RestorePoint[]
     */
    public array $restorePoints = [];

    /** 
     * List of restore sessions in the tenant.
     * @var RestoreSessionBase[]
     */
    public array $restoreSessions = [];

    /** 
     * List of Backup Storage apps in the tenant.
     * @var ServiceApp[]
     */
    public array $serviceApps = [];

    /** 
     * The list of SharePoint protection policies in the tenant.
     * @var SharePointProtectionPolicy[]
     */
    public array $sharePointProtectionPolicies = [];

    /** 
     * The list of SharePoint restore sessions available in the tenant.
     * @var SharePointRestoreSession[]
     */
    public array $sharePointRestoreSessions = [];

    /** 
     * The list of site inclusion rules applied to the tenant.
     * @var SiteProtectionRule[]
     */
    public array $siteInclusionRules = [];

    /** 
     * The list of site protection units in the tenant.
     * @var SiteProtectionUnit[]
     */
    public array $siteProtectionUnits = [];

    /** 
     * 
     * @var SiteProtectionUnitsBulkAdditionJob[]
     */
    public array $siteProtectionUnitsBulkAdditionJobs = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['serviceStatus'])) {
            $this->serviceStatus = is_array($data['serviceStatus']) ? new ServiceStatus($data['serviceStatus']) : $data['serviceStatus'];
        }
        if (isset($data['driveInclusionRules'])) {
            $this->driveInclusionRules = $data['driveInclusionRules'];
        }
        if (isset($data['driveProtectionUnits'])) {
            $this->driveProtectionUnits = $data['driveProtectionUnits'];
        }
        if (isset($data['driveProtectionUnitsBulkAdditionJobs'])) {
            $this->driveProtectionUnitsBulkAdditionJobs = $data['driveProtectionUnitsBulkAdditionJobs'];
        }
        if (isset($data['exchangeProtectionPolicies'])) {
            $this->exchangeProtectionPolicies = $data['exchangeProtectionPolicies'];
        }
        if (isset($data['exchangeRestoreSessions'])) {
            $this->exchangeRestoreSessions = $data['exchangeRestoreSessions'];
        }
        if (isset($data['mailboxInclusionRules'])) {
            $this->mailboxInclusionRules = $data['mailboxInclusionRules'];
        }
        if (isset($data['mailboxProtectionUnits'])) {
            $this->mailboxProtectionUnits = $data['mailboxProtectionUnits'];
        }
        if (isset($data['mailboxProtectionUnitsBulkAdditionJobs'])) {
            $this->mailboxProtectionUnitsBulkAdditionJobs = $data['mailboxProtectionUnitsBulkAdditionJobs'];
        }
        if (isset($data['oneDriveForBusinessProtectionPolicies'])) {
            $this->oneDriveForBusinessProtectionPolicies = $data['oneDriveForBusinessProtectionPolicies'];
        }
        if (isset($data['oneDriveForBusinessRestoreSessions'])) {
            $this->oneDriveForBusinessRestoreSessions = $data['oneDriveForBusinessRestoreSessions'];
        }
        if (isset($data['protectionPolicies'])) {
            $this->protectionPolicies = $data['protectionPolicies'];
        }
        if (isset($data['protectionUnits'])) {
            $this->protectionUnits = $data['protectionUnits'];
        }
        if (isset($data['restorePoints'])) {
            $this->restorePoints = $data['restorePoints'];
        }
        if (isset($data['restoreSessions'])) {
            $this->restoreSessions = $data['restoreSessions'];
        }
        if (isset($data['serviceApps'])) {
            $this->serviceApps = $data['serviceApps'];
        }
        if (isset($data['sharePointProtectionPolicies'])) {
            $this->sharePointProtectionPolicies = $data['sharePointProtectionPolicies'];
        }
        if (isset($data['sharePointRestoreSessions'])) {
            $this->sharePointRestoreSessions = $data['sharePointRestoreSessions'];
        }
        if (isset($data['siteInclusionRules'])) {
            $this->siteInclusionRules = $data['siteInclusionRules'];
        }
        if (isset($data['siteProtectionUnits'])) {
            $this->siteProtectionUnits = $data['siteProtectionUnits'];
        }
        if (isset($data['siteProtectionUnitsBulkAdditionJobs'])) {
            $this->siteProtectionUnitsBulkAdditionJobs = $data['siteProtectionUnitsBulkAdditionJobs'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
