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
    /**
     * Available select fields for MobileAppCategory
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific MobileAppCategory properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
