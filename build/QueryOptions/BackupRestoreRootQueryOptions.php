<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BackupRestoreRoot resources
 *
 * Available select fields:
 * - serviceStatus
 * - driveInclusionRules
 * - driveProtectionUnits
 * - driveProtectionUnitsBulkAdditionJobs
 * - exchangeProtectionPolicies
 * - exchangeRestoreSessions
 * - mailboxInclusionRules
 * - mailboxProtectionUnits
 * - mailboxProtectionUnitsBulkAdditionJobs
 * - oneDriveForBusinessProtectionPolicies
 * - oneDriveForBusinessRestoreSessions
 * - protectionPolicies
 * - protectionUnits
 * - restorePoints
 * - restoreSessions
 * - serviceApps
 * - sharePointProtectionPolicies
 * - sharePointRestoreSessions
 * - siteInclusionRules
 * - siteProtectionUnits
 * - siteProtectionUnitsBulkAdditionJobs
 */
class BackupRestoreRootQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BackupRestoreRoot
     */
    public const FIELD_SERVICE_STATUS = 'serviceStatus';
    public const FIELD_DRIVE_INCLUSION_RULES = 'driveInclusionRules';
    public const FIELD_DRIVE_PROTECTION_UNITS = 'driveProtectionUnits';
    public const FIELD_DRIVE_PROTECTION_UNITS_BULK_ADDITION_JOBS = 'driveProtectionUnitsBulkAdditionJobs';
    public const FIELD_EXCHANGE_PROTECTION_POLICIES = 'exchangeProtectionPolicies';
    public const FIELD_EXCHANGE_RESTORE_SESSIONS = 'exchangeRestoreSessions';
    public const FIELD_MAILBOX_INCLUSION_RULES = 'mailboxInclusionRules';
    public const FIELD_MAILBOX_PROTECTION_UNITS = 'mailboxProtectionUnits';
    public const FIELD_MAILBOX_PROTECTION_UNITS_BULK_ADDITION_JOBS = 'mailboxProtectionUnitsBulkAdditionJobs';
    public const FIELD_ONE_DRIVE_FOR_BUSINESS_PROTECTION_POLICIES = 'oneDriveForBusinessProtectionPolicies';
    public const FIELD_ONE_DRIVE_FOR_BUSINESS_RESTORE_SESSIONS = 'oneDriveForBusinessRestoreSessions';
    public const FIELD_PROTECTION_POLICIES = 'protectionPolicies';
    public const FIELD_PROTECTION_UNITS = 'protectionUnits';
    public const FIELD_RESTORE_POINTS = 'restorePoints';
    public const FIELD_RESTORE_SESSIONS = 'restoreSessions';
    public const FIELD_SERVICE_APPS = 'serviceApps';
    public const FIELD_SHARE_POINT_PROTECTION_POLICIES = 'sharePointProtectionPolicies';
    public const FIELD_SHARE_POINT_RESTORE_SESSIONS = 'sharePointRestoreSessions';
    public const FIELD_SITE_INCLUSION_RULES = 'siteInclusionRules';
    public const FIELD_SITE_PROTECTION_UNITS = 'siteProtectionUnits';
    public const FIELD_SITE_PROTECTION_UNITS_BULK_ADDITION_JOBS = 'siteProtectionUnitsBulkAdditionJobs';

    /**
     * Select specific BackupRestoreRoot properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
