<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BackupRestoreRoot
 */
class BackupRestoreRoot
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents the tenant-level status of the Backup Storage service. */
        public ?string $serviceStatus = null,
        /** The list of drive inclusion rules applied to the tenant. */
        public array $driveInclusionRules = [],
        /** The list of drive protection units in the tenant. */
        public array $driveProtectionUnits = [],
        /**  */
        public array $driveProtectionUnitsBulkAdditionJobs = [],
        /** The list of Exchange protection policies in the tenant. */
        public array $exchangeProtectionPolicies = [],
        /** The list of Exchange restore sessions available in the tenant. */
        public array $exchangeRestoreSessions = [],
        /** The list of mailbox inclusion rules applied to the tenant. */
        public array $mailboxInclusionRules = [],
        /** The list of mailbox protection units in the tenant. */
        public array $mailboxProtectionUnits = [],
        /**  */
        public array $mailboxProtectionUnitsBulkAdditionJobs = [],
        /** The list of OneDrive for Business protection policies in the tenant. */
        public array $oneDriveForBusinessProtectionPolicies = [],
        /** The list of OneDrive for Business restore sessions available in the tenant. */
        public array $oneDriveForBusinessRestoreSessions = [],
        /** List of protection policies in the tenant. */
        public array $protectionPolicies = [],
        /** List of protection units in the tenant. */
        public array $protectionUnits = [],
        /** List of restore points in the tenant. */
        public array $restorePoints = [],
        /** List of restore sessions in the tenant. */
        public array $restoreSessions = [],
        /** List of Backup Storage apps in the tenant. */
        public array $serviceApps = [],
        /** The list of SharePoint protection policies in the tenant. */
        public array $sharePointProtectionPolicies = [],
        /** The list of SharePoint restore sessions available in the tenant. */
        public array $sharePointRestoreSessions = [],
        /** The list of site inclusion rules applied to the tenant. */
        public array $siteInclusionRules = [],
        /** The list of site protection units in the tenant. */
        public array $siteProtectionUnits = [],
        /**  */
        public array $siteProtectionUnitsBulkAdditionJobs = []
    ) {}
}
