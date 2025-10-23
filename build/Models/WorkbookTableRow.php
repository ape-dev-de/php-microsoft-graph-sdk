<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTableRow
 */
class WorkbookTableRow
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The index of the row within the rows collection of the table. Zero-based. Read-only. */
    public ?float $index = null;

    /** The raw values of the specified range. The data returned could be of type string, number, or a Boolean. Any cell that contain an error will return the error string. */
    public ?string $values = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['index'])) {
            $this->index = $data['index'];
        }
        if (isset($data['values'])) {
            $this->values = $data['values'];
        }
    }
}
