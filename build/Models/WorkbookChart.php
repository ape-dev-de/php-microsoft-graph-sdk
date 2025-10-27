<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChart
 */
class WorkbookChart
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the height, in points, of the chart object.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $height = null;

    /** 
     * The distance, in points, from the left side of the chart to the worksheet origin.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $left = null;

    /** Represents the name of a chart object. */
    public ?string $name = null;

    /** 
     * Represents the distance, in points, from the top edge of the object to the top of row 1 (on a worksheet) or the top of the chart area (on a chart).
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $top = null;

    /** 
     * Represents the width, in points, of the chart object.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $width = null;

    /** 
     * Represents chart axes. Read-only.
     * @var WorkbookChartAxes|\stdClass|null
     */
    public WorkbookChartAxes|\stdClass|null $axes = null;

    /** 
     * Represents the data labels on the chart. Read-only.
     * @var WorkbookChartDataLabels|\stdClass|null
     */
    public WorkbookChartDataLabels|\stdClass|null $dataLabels = null;

    /** 
     * Encapsulates the format properties for the chart area. Read-only.
     * @var WorkbookChartAreaFormat|\stdClass|null
     */
    public WorkbookChartAreaFormat|\stdClass|null $format = null;

    /** 
     * Represents the legend for the chart. Read-only.
     * @var WorkbookChartLegend|\stdClass|null
     */
    public WorkbookChartLegend|\stdClass|null $legend = null;

    /** 
     * Represents either a single series or collection of series in the chart. Read-only.
     * @var WorkbookChartSeries[]
     */
    public array $series = [];

    /** 
     * Represents the title of the specified chart, including the text, visibility, position and formatting of the title. Read-only.
     * @var WorkbookChartTitle|\stdClass|null
     */
    public WorkbookChartTitle|\stdClass|null $title = null;

    /** 
     * The worksheet containing the current chart. Read-only.
     * @var WorkbookWorksheet|\stdClass|null
     */
    public WorkbookWorksheet|\stdClass|null $worksheet = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['height'])) {
            $this->height = $data['height'];
        }
        if (isset($data['left'])) {
            $this->left = $data['left'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['top'])) {
            $this->top = $data['top'];
        }
        if (isset($data['width'])) {
            $this->width = $data['width'];
        }
        if (isset($data['axes'])) {
            $this->axes = is_array($data['axes']) ? new WorkbookChartAxes($data['axes']) : $data['axes'];
        }
        if (isset($data['dataLabels'])) {
            $this->dataLabels = is_array($data['dataLabels']) ? new WorkbookChartDataLabels($data['dataLabels']) : $data['dataLabels'];
        }
        if (isset($data['format'])) {
            $this->format = is_array($data['format']) ? new WorkbookChartAreaFormat($data['format']) : $data['format'];
        }
        if (isset($data['legend'])) {
            $this->legend = is_array($data['legend']) ? new WorkbookChartLegend($data['legend']) : $data['legend'];
        }
        if (isset($data['series'])) {
            $this->series = $data['series'];
        }
        if (isset($data['title'])) {
            $this->title = is_array($data['title']) ? new WorkbookChartTitle($data['title']) : $data['title'];
        }
        if (isset($data['worksheet'])) {
            $this->worksheet = is_array($data['worksheet']) ? new WorkbookWorksheet($data['worksheet']) : $data['worksheet'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
