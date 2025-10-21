<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutlookItem resources
 *
 * Available select fields:
 * - categories
 * - changeKey
 * - createdDateTime
 * - lastModifiedDateTime
 */
class OutlookItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OutlookItem
     */
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_CHANGE_KEY = 'changeKey';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific OutlookItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
