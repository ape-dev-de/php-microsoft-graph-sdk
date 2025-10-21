<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsSegment resources
 *
 * Available select fields:
 * - callee
 * - caller
 * - endDateTime
 * - failureInfo
 * - media
 * - startDateTime
 */
class CallRecordsSegmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsSegment
     */
    public const FIELD_CALLEE = 'callee';
    public const FIELD_CALLER = 'caller';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_FAILURE_INFO = 'failureInfo';
    public const FIELD_MEDIA = 'media';
    public const FIELD_START_DATE_TIME = 'startDateTime';

    /**
     * Select specific CallRecordsSegment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
