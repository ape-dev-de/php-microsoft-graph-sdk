<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationCustomQuestionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VirtualEventRegistrationCustomQuestionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VirtualEventRegistrationCustomQuestionCollectionResponse properties
     * 
     * @param array<string> $select Use VirtualEventRegistrationCustomQuestionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
