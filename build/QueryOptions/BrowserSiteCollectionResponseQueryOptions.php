<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BrowserSiteCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class BrowserSiteCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific BrowserSiteCollectionResponse properties
     * 
     * @param array<string> $select Use BrowserSiteCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
