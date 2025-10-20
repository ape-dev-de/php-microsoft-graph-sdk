<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutlookCategory resources
 *
 * Available select fields:
 * - color
 * - displayName
 */
class OutlookCategoryQueryOptions extends QueryOptions
{
    public const FIELD_COLOR = 'color';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific OutlookCategory properties
     * 
     * @param array<string> $select Use OutlookCategoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
