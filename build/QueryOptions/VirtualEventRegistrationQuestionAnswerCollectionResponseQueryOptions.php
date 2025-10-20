<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventRegistrationQuestionAnswerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VirtualEventRegistrationQuestionAnswerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VirtualEventRegistrationQuestionAnswerCollectionResponse properties
     * 
     * @param array<string> $select Use VirtualEventRegistrationQuestionAnswerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
