<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutlookUser resources
 *
 * Available select fields:
 * - masterCategories
 */
class OutlookUserQueryOptions extends QueryOptions
{
    public const FIELD_MASTER_CATEGORIES = 'masterCategories';

    /**
     * Select specific OutlookUser properties
     * 
     * @param array<string> $select Use OutlookUserQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
