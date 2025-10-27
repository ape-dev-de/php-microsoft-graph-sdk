<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTableColumn
 */
class WorkbookTableColumn
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The index of the column within the columns collection of the table. Zero-indexed. Read-only. */
    public ?float $index = null;

    /** The name of the table column. */
    public ?string $name = null;

    /** TRepresents the raw values of the specified range. The data returned could be of type string, number, or a Boolean. Cell that contain an error will return the error string. */
    public ?string $values = null;

    /** 
     * The filter applied to the column. Read-only.
     * @var WorkbookFilter|\stdClass|null
     */
    public mixed $filter = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['index'])) {
            $this->index = $data['index'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['values'])) {
            $this->values = $data['values'];
        }
        if (isset($data['filter'])) {
            $this->filter = is_array($data['filter']) ? new WorkbookFilter($data['filter']) : $data['filter'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
