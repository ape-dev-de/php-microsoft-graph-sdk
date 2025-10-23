<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartLegendFormat
 */
class WorkbookChartLegendFormat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the fill format of an object, which includes background formating information. Read-only.
     * @var WorkbookChartFill|\stdClass|null
     */
    public mixed $fill = null;

    /** 
     * Represents the font attributes such as font name, font size, color, etc. of a chart legend. Read-only.
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
            $this->fill = $data['fill'];
        }
        if (isset($data['font'])) {
            $this->font = $data['font'];
        }
    }
}
