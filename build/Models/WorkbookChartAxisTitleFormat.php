<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxisTitleFormat
 */
class WorkbookChartAxisTitleFormat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the font attributes, such as font name, font size, color, etc. of chart axis title object. Read-only.
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
        if (isset($data['font'])) {
            $this->font = is_array($data['font']) ? new WorkbookChartFont($data['font']) : $data['font'];
        }
    }
}
