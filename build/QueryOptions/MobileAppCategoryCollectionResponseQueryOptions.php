<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppCategoryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MobileAppCategoryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MobileAppCategoryCollectionResponse properties
     * 
     * @param array<string> $select Use MobileAppCategoryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
