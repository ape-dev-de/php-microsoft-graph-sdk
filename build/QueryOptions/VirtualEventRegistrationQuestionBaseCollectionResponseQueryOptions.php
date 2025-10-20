<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationQuestionBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VirtualEventRegistrationQuestionBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VirtualEventRegistrationQuestionBaseCollectionResponse properties
     * 
     * @param array<string> $select Use VirtualEventRegistrationQuestionBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
