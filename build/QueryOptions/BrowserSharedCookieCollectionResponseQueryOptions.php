<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSharedCookieCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BrowserSharedCookieCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BrowserSharedCookieCollectionResponse properties
     * 
     * @param array<string> $select Use BrowserSharedCookieCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
