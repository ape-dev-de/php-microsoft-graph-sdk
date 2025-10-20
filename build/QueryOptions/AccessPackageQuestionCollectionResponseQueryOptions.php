<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageQuestionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageQuestionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageQuestionCollectionResponse properties
     * 
     * @param array<string> $select Use AccessPackageQuestionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
