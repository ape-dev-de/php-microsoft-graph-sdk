<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSiteListCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BrowserSiteListCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BrowserSiteListCollectionResponse properties
     * 
     * @param array<string> $select Use BrowserSiteListCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
