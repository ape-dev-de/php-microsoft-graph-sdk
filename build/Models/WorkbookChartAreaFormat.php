<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartAreaFormat
 */
class WorkbookChartAreaFormat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the fill format of an object, which includes background formatting information. Read-only.
     * @var WorkbookChartFill|\stdClass|null
     */
    public mixed $fill = null;

    /** 
     * Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only.
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
