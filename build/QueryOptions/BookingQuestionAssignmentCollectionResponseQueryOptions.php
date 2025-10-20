<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingQuestionAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingQuestionAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingQuestionAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use BookingQuestionAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
