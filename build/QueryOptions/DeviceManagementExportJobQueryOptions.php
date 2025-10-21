<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementExportJob resources
 *
 * Available select fields:
 * - expirationDateTime
 * - filter
 * - format
 * - localizationType
 * - reportName
 * - requestDateTime
 * - select
 * - snapshotId
 * - status
 * - url
 */
class DeviceManagementExportJobQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementExportJob
     */
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_FILTER = 'filter';
    public const FIELD_FORMAT = 'format';
    public const FIELD_LOCALIZATION_TYPE = 'localizationType';
    public const FIELD_REPORT_NAME = 'reportName';
    public const FIELD_REQUEST_DATE_TIME = 'requestDateTime';
    public const FIELD_SELECT = 'select';
    public const FIELD_SNAPSHOT_ID = 'snapshotId';
    public const FIELD_STATUS = 'status';
    public const FIELD_URL = 'url';

    /**
     * Select specific DeviceManagementExportJob properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
