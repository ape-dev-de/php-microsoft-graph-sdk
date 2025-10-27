<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartTitle
 */
class WorkbookChartTitle
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether the chart title will overlay the chart or not. */
    public ?bool $overlay = null;

    /** The title text of the chart. */
    public ?string $text = null;

    /** Indicates whether the chart title is visible. */
    public ?bool $visible = null;

    /** 
     * The formatting of a chart title, which includes fill and font formatting. Read-only.
     * @var WorkbookChartTitleFormat|\stdClass|null
     */
    public WorkbookChartTitleFormat|\stdClass|null $format = null;


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
        if (isset($data['overlay'])) {
            $this->overlay = is_bool($data['overlay']) ? $data['overlay'] : (bool)$data['overlay'];
        }
        if (isset($data['text'])) {
            $this->text = $data['text'];
        }
        if (isset($data['visible'])) {
            $this->visible = is_bool($data['visible']) ? $data['visible'] : (bool)$data['visible'];
        }
        if (isset($data['format'])) {
            $this->format = is_array($data['format']) ? new WorkbookChartTitleFormat($data['format']) : $data['format'];
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
