<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartSeries
 */
class WorkbookChartSeries
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The name of a series in a chart. */
    public ?string $name = null;

    /** 
     * The formatting of a chart series, which includes fill and line formatting. Read-only.
     * @var WorkbookChartSeriesFormat|\stdClass|null
     */
    public WorkbookChartSeriesFormat|\stdClass|null $format = null;

    /** 
     * A collection of all points in the series. Read-only.
     * @var WorkbookChartPoint[]
     */
    public array $points = [];


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
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['format'])) {
            $this->format = is_array($data['format']) ? new WorkbookChartSeriesFormat($data['format']) : $data['format'];
        }
        if (isset($data['points'])) {
            $this->points = $data['points'];
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
