<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestHistory resources
 *
 * Available select fields:
 * - changedBy
 * - eventDateTime
 * - stage
 * - stageStatus
 * - type
 */
class SubjectRightsRequestHistoryQueryOptions extends QueryOptions
{
    public const FIELD_CHANGED_BY = 'changedBy';
    public const FIELD_EVENT_DATE_TIME = 'eventDateTime';
    public const FIELD_STAGE = 'stage';
    public const FIELD_STAGE_STATUS = 'stageStatus';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific SubjectRightsRequestHistory properties
     * 
     * @param array<string> $select Use SubjectRightsRequestHistoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
