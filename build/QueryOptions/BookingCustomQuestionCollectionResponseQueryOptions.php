<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingCustomQuestionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BookingCustomQuestionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BookingCustomQuestionCollectionResponse properties
     * 
     * @param array<string> $select Use BookingCustomQuestionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
