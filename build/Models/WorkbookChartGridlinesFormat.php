<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookChartGridlinesFormat
 */
class WorkbookChartGridlinesFormat
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

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
        if (isset($data['line'])) {
            $this->line = $data['line'];
        }
    }
}
