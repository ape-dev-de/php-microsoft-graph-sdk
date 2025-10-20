<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityArticleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityArticleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityArticleCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityArticleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
