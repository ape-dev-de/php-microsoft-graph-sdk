<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreArtifactsBulkRequestBase resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - destinationType
 * - displayName
 * - error
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - protectionTimePeriod
 * - protectionUnitIds
 * - restorePointPreference
 * - status
 * - tags
 */
class RestoreArtifactsBulkRequestBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestoreArtifactsBulkRequestBase
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESTINATION_TYPE = 'destinationType';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ERROR = 'error';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_PROTECTION_TIME_PERIOD = 'protectionTimePeriod';
    public const FIELD_PROTECTION_UNIT_IDS = 'protectionUnitIds';
    public const FIELD_RESTORE_POINT_PREFERENCE = 'restorePointPreference';
    public const FIELD_STATUS = 'status';
    public const FIELD_TAGS = 'tags';

    /**
     * Select specific RestoreArtifactsBulkRequestBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
