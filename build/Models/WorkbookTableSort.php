<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTableSort
 */
class WorkbookTableSort
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The list of the current conditions last used to sort the table. Read-only.
     * @var WorkbookSortField[]
     */
    public array $fields = [];

    /** Indicates whether the casing impacted the last sort of the table. Read-only. */
    public ?bool $matchCase = null;

    /** The Chinese character ordering method last used to sort the table. The possible values are: PinYin, StrokeCount. Read-only. */
    public ?string $method = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['fields'])) {
            $this->fields = $data['fields'];
        }
        if (isset($data['matchCase'])) {
            $this->matchCase = $data['matchCase'];
        }
        if (isset($data['method'])) {
            $this->method = $data['method'];
        }
    }
}
