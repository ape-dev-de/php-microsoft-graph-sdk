<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LookupColumn
 */
class LookupColumn
{
    /** Indicates whether multiple values can be selected from the source. */
    public ?bool $allowMultipleValues = null;

    /** Indicates whether values in the column should be able to exceed the standard limit of 255 characters. */
    public ?bool $allowUnlimitedLength = null;

    /** The name of the lookup source column. */
    public ?string $columnName = null;

    /** The unique identifier of the lookup source list. */
    public ?string $listId = null;

    /** If specified, this column is a secondary lookup, pulling an additional field from the list item looked up by the primary lookup. Use the list item looked up by the primary as the source for the column named here. */
    public ?string $primaryLookupColumnId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowMultipleValues'])) {
            $this->allowMultipleValues = $data['allowMultipleValues'];
        }
        if (isset($data['allowUnlimitedLength'])) {
            $this->allowUnlimitedLength = $data['allowUnlimitedLength'];
        }
        if (isset($data['columnName'])) {
            $this->columnName = $data['columnName'];
        }
        if (isset($data['listId'])) {
            $this->listId = $data['listId'];
        }
        if (isset($data['primaryLookupColumnId'])) {
            $this->primaryLookupColumnId = $data['primaryLookupColumnId'];
        }
    }
}
