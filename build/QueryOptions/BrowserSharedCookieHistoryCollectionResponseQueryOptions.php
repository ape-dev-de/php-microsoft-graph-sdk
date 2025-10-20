<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSharedCookieHistoryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BrowserSharedCookieHistoryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BrowserSharedCookieHistoryCollectionResponse properties
     * 
     * @param array<string> $select Use BrowserSharedCookieHistoryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
