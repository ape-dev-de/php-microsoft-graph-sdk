<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedDeviceMobileAppConfigurationUserSummary resources
 *
 * Available select fields:
 * - configurationVersion
 * - errorCount
 * - failedCount
 * - lastUpdateDateTime
 * - notApplicableCount
 * - pendingCount
 * - successCount
 */
class ManagedDeviceMobileAppConfigurationUserSummaryQueryOptions extends QueryOptions
{
    public const FIELD_CONFIGURATION_VERSION = 'configurationVersion';
    public const FIELD_ERROR_COUNT = 'errorCount';
    public const FIELD_FAILED_COUNT = 'failedCount';
    public const FIELD_LAST_UPDATE_DATE_TIME = 'lastUpdateDateTime';
    public const FIELD_NOT_APPLICABLE_COUNT = 'notApplicableCount';
    public const FIELD_PENDING_COUNT = 'pendingCount';
    public const FIELD_SUCCESS_COUNT = 'successCount';

    /**
     * Select specific ManagedDeviceMobileAppConfigurationUserSummary properties
     * 
     * @param array<string> $select Use ManagedDeviceMobileAppConfigurationUserSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
