<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartSeriesFormat
 */
class WorkbookChartSeriesFormat
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the fill format of a chart series, which includes background formatting information. Read-only.
     * @var WorkbookChartFill|\stdClass|null
     */
    public WorkbookChartFill|\stdClass|null $fill = null;

    /** 
     * Represents line formatting. Read-only.
     * @var WorkbookChartLineFormat|\stdClass|null
     */
    public WorkbookChartLineFormat|\stdClass|null $line = null;


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
        if (isset($data['fill'])) {
            $this->fill = is_array($data['fill']) ? new WorkbookChartFill($data['fill']) : $data['fill'];
        }
        if (isset($data['line'])) {
            $this->line = is_array($data['line']) ? new WorkbookChartLineFormat($data['line']) : $data['line'];
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
