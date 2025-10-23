<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookPivotTable
 */
class WorkbookPivotTable
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The name of the pivot table. */
    public ?string $name = null;

    /** 
     * The worksheet that contains the current pivot table. Read-only.
     * @var WorkbookWorksheet|\stdClass|null
     */
    public mixed $worksheet = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['worksheet'])) {
            $this->worksheet = is_array($data['worksheet']) ? new WorkbookWorksheet($data['worksheet']) : $data['worksheet'];
        }
    }
}
