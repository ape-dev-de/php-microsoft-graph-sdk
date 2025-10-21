<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRecordsSession resources
 *
 * Available select fields:
 * - callee
 * - caller
 * - endDateTime
 * - failureInfo
 * - isTest
 * - modalities
 * - startDateTime
 * - segments
 */
class CallRecordsSessionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRecordsSession
     */
    public const FIELD_CALLEE = 'callee';
    public const FIELD_CALLER = 'caller';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_FAILURE_INFO = 'failureInfo';
    public const FIELD_IS_TEST = 'isTest';
    public const FIELD_MODALITIES = 'modalities';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_SEGMENTS = 'segments';

    /**
     * Select specific CallRecordsSession properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
