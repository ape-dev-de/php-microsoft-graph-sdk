<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookChart resources
 *
 * Available select fields:
 * - height
 * - left
 * - name
 * - top
 * - width
 * - axes
 * - dataLabels
 * - format
 * - legend
 * - series
 * - title
 * - worksheet
 */
class WorkbookChartQueryOptions extends QueryOptions
{
    public const FIELD_HEIGHT = 'height';
    public const FIELD_LEFT = 'left';
    public const FIELD_NAME = 'name';
    public const FIELD_TOP = 'top';
    public const FIELD_WIDTH = 'width';
    public const FIELD_AXES = 'axes';
    public const FIELD_DATA_LABELS = 'dataLabels';
    public const FIELD_FORMAT = 'format';
    public const FIELD_LEGEND = 'legend';
    public const FIELD_SERIES = 'series';
    public const FIELD_TITLE = 'title';
    public const FIELD_WORKSHEET = 'worksheet';

    /**
     * Select specific WorkbookChart properties
     * 
     * @param array<string> $select Use WorkbookChartQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
