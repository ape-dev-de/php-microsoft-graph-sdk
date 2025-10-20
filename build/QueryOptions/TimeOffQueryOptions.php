<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TimeOff resources
 *
 * Available select fields:
 * - draftTimeOff
 * - isStagedForDeletion
 * - sharedTimeOff
 * - userId
 */
class TimeOffQueryOptions extends QueryOptions
{
    public const FIELD_DRAFT_TIME_OFF = 'draftTimeOff';
    public const FIELD_IS_STAGED_FOR_DELETION = 'isStagedForDeletion';
    public const FIELD_SHARED_TIME_OFF = 'sharedTimeOff';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific TimeOff properties
     * 
     * @param array<string> $select Use TimeOffQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
