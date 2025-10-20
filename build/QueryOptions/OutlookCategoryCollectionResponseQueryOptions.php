<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutlookCategoryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OutlookCategoryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OutlookCategoryCollectionResponse properties
     * 
     * @param array<string> $select Use OutlookCategoryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
