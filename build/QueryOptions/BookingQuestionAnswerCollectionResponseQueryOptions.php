<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingQuestionAnswerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingQuestionAnswerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingQuestionAnswerCollectionResponse properties
     * 
     * @param array<string> $select Use BookingQuestionAnswerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
