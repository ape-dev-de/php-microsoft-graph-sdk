<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlannerCategoryDescriptions resources
 *
 * Available select fields:
 * - category1
 * - category10
 * - category11
 * - category12
 * - category13
 * - category14
 * - category15
 * - category16
 * - category17
 * - category18
 * - category19
 * - category2
 * - category20
 * - category21
 * - category22
 * - category23
 * - category24
 * - category25
 * - category3
 * - category4
 * - category5
 * - category6
 * - category7
 * - category8
 * - category9
 */
class PlannerCategoryDescriptionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlannerCategoryDescriptions
     */
    public const FIELD_CATEGORY1 = 'category1';
    public const FIELD_CATEGORY10 = 'category10';
    public const FIELD_CATEGORY11 = 'category11';
    public const FIELD_CATEGORY12 = 'category12';
    public const FIELD_CATEGORY13 = 'category13';
    public const FIELD_CATEGORY14 = 'category14';
    public const FIELD_CATEGORY15 = 'category15';
    public const FIELD_CATEGORY16 = 'category16';
    public const FIELD_CATEGORY17 = 'category17';
    public const FIELD_CATEGORY18 = 'category18';
    public const FIELD_CATEGORY19 = 'category19';
    public const FIELD_CATEGORY2 = 'category2';
    public const FIELD_CATEGORY20 = 'category20';
    public const FIELD_CATEGORY21 = 'category21';
    public const FIELD_CATEGORY22 = 'category22';
    public const FIELD_CATEGORY23 = 'category23';
    public const FIELD_CATEGORY24 = 'category24';
    public const FIELD_CATEGORY25 = 'category25';
    public const FIELD_CATEGORY3 = 'category3';
    public const FIELD_CATEGORY4 = 'category4';
    public const FIELD_CATEGORY5 = 'category5';
    public const FIELD_CATEGORY6 = 'category6';
    public const FIELD_CATEGORY7 = 'category7';
    public const FIELD_CATEGORY8 = 'category8';
    public const FIELD_CATEGORY9 = 'category9';

    /**
     * Select specific PlannerCategoryDescriptions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
