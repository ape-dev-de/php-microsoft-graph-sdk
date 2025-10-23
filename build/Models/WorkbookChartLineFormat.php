<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartLineFormat
 */
class WorkbookChartLineFormat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The HTML color code that represents the color of lines in the chart. */
    public ?string $color = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['color'])) {
            $this->color = $data['color'];
        }
    }
}
