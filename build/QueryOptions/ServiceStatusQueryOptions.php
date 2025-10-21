<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceStatus resources
 *
 * Available select fields:
 * - backupServiceConsumer
 * - disableReason
 * - gracePeriodDateTime
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - restoreAllowedTillDateTime
 * - status
 */
class ServiceStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServiceStatus
     */
    public const FIELD_BACKUP_SERVICE_CONSUMER = 'backupServiceConsumer';
    public const FIELD_DISABLE_REASON = 'disableReason';
    public const FIELD_GRACE_PERIOD_DATE_TIME = 'gracePeriodDateTime';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_RESTORE_ALLOWED_TILL_DATE_TIME = 'restoreAllowedTillDateTime';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific ServiceStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
