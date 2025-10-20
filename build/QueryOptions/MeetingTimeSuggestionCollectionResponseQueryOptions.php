<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingTimeSuggestionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MeetingTimeSuggestionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MeetingTimeSuggestionCollectionResponse properties
     * 
     * @param array<string> $select Use MeetingTimeSuggestionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
