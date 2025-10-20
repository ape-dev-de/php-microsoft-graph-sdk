<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ShiftActivity resources
 *
 * Available select fields:
 * - code
 * - displayName
 * - endDateTime
 * - isPaid
 * - startDateTime
 * - theme
 */
class ShiftActivityQueryOptions extends QueryOptions
{
    public const FIELD_CODE = 'code';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_IS_PAID = 'isPaid';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_THEME = 'theme';

    /**
     * Select specific ShiftActivity properties
     * 
     * @param array<string> $select Use ShiftActivityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
