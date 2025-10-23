<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartDataLabels
 */
class WorkbookChartDataLabels
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** DataLabelPosition value that represents the position of the data label. The possible values are: None, Center, InsideEnd, InsideBase, OutsideEnd, Left, Right, Top, Bottom, BestFit, Callout. */
    public ?string $position = null;

    /** String that represents the separator used for the data labels on a chart. */
    public ?string $separator = null;

    /** Boolean value that represents whether the data label bubble size is visible. */
    public ?bool $showBubbleSize = null;

    /** Boolean value that represents whether the data label category name is visible. */
    public ?bool $showCategoryName = null;

    /** Boolean value that represents whether the data label legend key is visible. */
    public ?bool $showLegendKey = null;

    /** Boolean value that represents whether the data label percentage is visible. */
    public ?bool $showPercentage = null;

    /** Boolean value that represents whether the data label series name is visible. */
    public ?bool $showSeriesName = null;

    /** Boolean value that represents whether the data label value is visible. */
    public ?bool $showValue = null;

    /** 
     * Represents the format of chart data labels, which includes fill and font formatting. Read-only.
     * @var WorkbookChartDataLabelFormat|\stdClass|null
     */
    public mixed $format = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['position'])) {
            $this->position = $data['position'];
        }
        if (isset($data['separator'])) {
            $this->separator = $data['separator'];
        }
        if (isset($data['showBubbleSize'])) {
            $this->showBubbleSize = $data['showBubbleSize'];
        }
        if (isset($data['showCategoryName'])) {
            $this->showCategoryName = $data['showCategoryName'];
        }
        if (isset($data['showLegendKey'])) {
            $this->showLegendKey = $data['showLegendKey'];
        }
        if (isset($data['showPercentage'])) {
            $this->showPercentage = $data['showPercentage'];
        }
        if (isset($data['showSeriesName'])) {
            $this->showSeriesName = $data['showSeriesName'];
        }
        if (isset($data['showValue'])) {
            $this->showValue = $data['showValue'];
        }
        if (isset($data['format'])) {
            $this->format = is_array($data['format']) ? new WorkbookChartDataLabelFormat($data['format']) : $data['format'];
        }
    }
}
