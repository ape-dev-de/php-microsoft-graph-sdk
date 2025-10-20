<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExpirationPattern resources
 *
 * Available select fields:
 * - duration
 * - endDateTime
 * - type
 */
class ExpirationPatternQueryOptions extends QueryOptions
{
    public const FIELD_DURATION = 'duration';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific ExpirationPattern properties
     * 
     * @param array<string> $select Use ExpirationPatternQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
