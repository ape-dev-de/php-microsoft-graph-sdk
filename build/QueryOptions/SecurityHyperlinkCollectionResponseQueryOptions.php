<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHyperlinkCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHyperlinkCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHyperlinkCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHyperlinkCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
