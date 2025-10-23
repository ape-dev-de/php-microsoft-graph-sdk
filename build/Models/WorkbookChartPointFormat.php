<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartPointFormat
 */
class WorkbookChartPointFormat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the fill format of a chart, which includes background formatting information. Read-only.
     * @var WorkbookChartFill|\stdClass|null
     */
    public mixed $fill = null;


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
    }
}
