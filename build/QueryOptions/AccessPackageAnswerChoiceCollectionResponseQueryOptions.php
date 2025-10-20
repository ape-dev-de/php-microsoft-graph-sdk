<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAnswerChoiceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageAnswerChoiceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageAnswerChoiceCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageAnswerChoiceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
