<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChartDataLabels resources
 *
 * Available select fields:
 * - position
 * - separator
 * - showBubbleSize
 * - showCategoryName
 * - showLegendKey
 * - showPercentage
 * - showSeriesName
 * - showValue
 * - format
 */
class WorkbookChartDataLabelsQueryOptions extends QueryOptions
{
    public const FIELD_POSITION = 'position';
    public const FIELD_SEPARATOR = 'separator';
    public const FIELD_SHOW_BUBBLE_SIZE = 'showBubbleSize';
    public const FIELD_SHOW_CATEGORY_NAME = 'showCategoryName';
    public const FIELD_SHOW_LEGEND_KEY = 'showLegendKey';
    public const FIELD_SHOW_PERCENTAGE = 'showPercentage';
    public const FIELD_SHOW_SERIES_NAME = 'showSeriesName';
    public const FIELD_SHOW_VALUE = 'showValue';
    public const FIELD_FORMAT = 'format';

    /**
     * Select specific WorkbookChartDataLabels properties
     * 
     * @param array<string> $select Use WorkbookChartDataLabelsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
