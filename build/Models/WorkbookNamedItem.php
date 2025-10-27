<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookNamedItem
 */
class WorkbookNamedItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The comment associated with this name. */
    public ?string $comment = null;

    /** The name of the object. Read-only. */
    public ?string $name = null;

    /** Indicates whether the name is scoped to the workbook or to a specific worksheet. Read-only. */
    public ?string $scope = null;

    /** The type of reference is associated with the name. Possible values are: String, Integer, Double, Boolean, Range. Read-only. */
    public ?string $type = null;

    /** The formula that the name is defined to refer to. For example, =Sheet14!$B$2:$H$12 and =4.75. Read-only. */
    public ?string $value = null;

    /** Indicates whether the object is visible. */
    public ?bool $visible = null;

    /** 
     * Returns the worksheet to which the named item is scoped. Available only if the item is scoped to the worksheet. Read-only.
     * @var WorkbookWorksheet|\stdClass|null
     */
    public mixed $worksheet = null;


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
        if (isset($data['comment'])) {
            $this->comment = $data['comment'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['scope'])) {
            $this->scope = $data['scope'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
        if (isset($data['visible'])) {
            $this->visible = $data['visible'];
        }
        if (isset($data['worksheet'])) {
            $this->worksheet = is_array($data['worksheet']) ? new WorkbookWorksheet($data['worksheet']) : $data['worksheet'];
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
