<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchAnswerVariantCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SearchAnswerVariantCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SearchAnswerVariantCollectionResponse properties
     * 
     * @param array<string> $select Use SearchAnswerVariantCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
