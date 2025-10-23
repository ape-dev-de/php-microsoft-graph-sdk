<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartLegend
 */
class WorkbookChartLegend
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether the chart legend should overlap with the main body of the chart. */
    public ?bool $overlay = null;

    /** Represents the position of the legend on the chart. The possible values are: Top, Bottom, Left, Right, Corner, Custom. */
    public ?string $position = null;

    /** Indicates whether the chart legend is visible. */
    public ?bool $visible = null;

    /** 
     * Represents the formatting of a chart legend, which includes fill and font formatting. Read-only.
     * @var WorkbookChartLegendFormat|\stdClass|null
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
        if (isset($data['overlay'])) {
            $this->overlay = $data['overlay'];
        }
        if (isset($data['position'])) {
            $this->position = $data['position'];
        }
        if (isset($data['visible'])) {
            $this->visible = $data['visible'];
        }
        if (isset($data['format'])) {
            $this->format = is_array($data['format']) ? new WorkbookChartLegendFormat($data['format']) : $data['format'];
        }
    }
}
