<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartDataLabelFormat
 */
class WorkbookChartDataLabelFormat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the fill format of the current chart data label. Read-only.
     * @var WorkbookChartFill|\stdClass|null
     */
    public mixed $fill = null;

    /** 
     * Represents the font attributes (font name, font size, color, etc.) for a chart data label. Read-only.
     * @var WorkbookChartFont|\stdClass|null
     */
    public mixed $font = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['fill'])) {
            $this->fill = is_array($data['fill']) ? new WorkbookChartFill($data['fill']) : $data['fill'];
        }
        if (isset($data['font'])) {
            $this->font = is_array($data['font']) ? new WorkbookChartFont($data['font']) : $data['font'];
        }
    }
}
