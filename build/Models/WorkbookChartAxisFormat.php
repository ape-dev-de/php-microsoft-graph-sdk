<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAxisFormat
 */
class WorkbookChartAxisFormat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the font attributes (font name, font size, color, etc.) for a chart axis element. Read-only.
     * @var WorkbookChartFont|\stdClass|null
     */
    public mixed $font = null;

    /** 
     * Represents chart line formatting. Read-only.
     * @var WorkbookChartLineFormat|\stdClass|null
     */
    public mixed $line = null;


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
            $this->font = $data['font'];
        }
        if (isset($data['line'])) {
            $this->line = $data['line'];
        }
    }
}
