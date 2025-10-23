<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookFilter
 */
class WorkbookFilter
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The currently applied filter on the given column. Read-only.
     * @var WorkbookFilterCriteria|\stdClass|null
     */
    public mixed $criteria = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['criteria'])) {
            $this->criteria = is_array($data['criteria']) ? new WorkbookFilterCriteria($data['criteria']) : $data['criteria'];
        }
    }
}
