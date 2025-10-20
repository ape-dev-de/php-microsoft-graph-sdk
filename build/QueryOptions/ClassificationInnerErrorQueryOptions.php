<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ClassificationInnerError resources
 *
 * Available select fields:
 * - activityId
 * - clientRequestId
 * - code
 * - errorDateTime
 */
class ClassificationInnerErrorQueryOptions extends QueryOptions
{
    public const FIELD_ACTIVITY_ID = 'activityId';
    public const FIELD_CLIENT_REQUEST_ID = 'clientRequestId';
    public const FIELD_CODE = 'code';
    public const FIELD_ERROR_DATE_TIME = 'errorDateTime';

    /**
     * Select specific ClassificationInnerError properties
     * 
     * @param array<string> $select Use ClassificationInnerErrorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
