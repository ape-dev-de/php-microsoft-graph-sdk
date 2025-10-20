<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MobileAppCategory resources
 *
 * Available select fields:
 * - displayName
 * - lastModifiedDateTime
 */
class MobileAppCategoryQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific MobileAppCategory properties
     * 
     * @param array<string> $select Use MobileAppCategoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
