<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageTextInputQuestionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageTextInputQuestionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageTextInputQuestionCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageTextInputQuestionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
