<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartGridlines
 */
class WorkbookChartGridlines
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether the axis gridlines are visible. */
    public ?bool $visible = null;

    /** 
     * Represents the formatting of chart gridlines. Read-only.
     * @var WorkbookChartGridlinesFormat|\stdClass|null
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
        if (isset($data['visible'])) {
            $this->visible = $data['visible'];
        }
        if (isset($data['format'])) {
            $this->format = is_array($data['format']) ? new WorkbookChartGridlinesFormat($data['format']) : $data['format'];
        }
    }
}
