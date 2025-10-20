<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostCookieCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityHostCookieCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityHostCookieCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityHostCookieCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
