<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxes
 */
class WorkbookChartAxes
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the category axis in a chart. Read-only.
     * @var WorkbookChartAxis|\stdClass|null
     */
    public mixed $categoryAxis = null;

    /** 
     * Represents the series axis of a 3-dimensional chart. Read-only.
     * @var WorkbookChartAxis|\stdClass|null
     */
    public mixed $seriesAxis = null;

    /** 
     * Represents the value axis in an axis. Read-only.
     * @var WorkbookChartAxis|\stdClass|null
     */
    public mixed $valueAxis = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['categoryAxis'])) {
            $this->categoryAxis = is_array($data['categoryAxis']) ? new WorkbookChartAxis($data['categoryAxis']) : $data['categoryAxis'];
        }
        if (isset($data['seriesAxis'])) {
            $this->seriesAxis = is_array($data['seriesAxis']) ? new WorkbookChartAxis($data['seriesAxis']) : $data['seriesAxis'];
        }
        if (isset($data['valueAxis'])) {
            $this->valueAxis = is_array($data['valueAxis']) ? new WorkbookChartAxis($data['valueAxis']) : $data['valueAxis'];
        }
    }
}
