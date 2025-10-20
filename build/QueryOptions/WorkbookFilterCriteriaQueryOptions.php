<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookFilterCriteria resources
 *
 * Available select fields:
 * - color
 * - criterion1
 * - criterion2
 * - dynamicCriteria
 * - filterOn
 * - icon
 * - operator
 * - values
 */
class WorkbookFilterCriteriaQueryOptions extends QueryOptions
{
    public const FIELD_COLOR = 'color';
    public const FIELD_CRITERION1 = 'criterion1';
    public const FIELD_CRITERION2 = 'criterion2';
    public const FIELD_DYNAMIC_CRITERIA = 'dynamicCriteria';
    public const FIELD_FILTER_ON = 'filterOn';
    public const FIELD_ICON = 'icon';
    public const FIELD_OPERATOR = 'operator';
    public const FIELD_VALUES = 'values';

    /**
     * Select specific WorkbookFilterCriteria properties
     * 
     * @param array<string> $select Use WorkbookFilterCriteriaQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
