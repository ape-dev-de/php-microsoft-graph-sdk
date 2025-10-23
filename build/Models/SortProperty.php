<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SortProperty
 */
class SortProperty
{
    /** True if the sort order is descending. Default is false, with the sort order as ascending. Optional. */
    public ?bool $isDescending = null;

    /** The name of the property to sort on. Required. */
    public ?string $name = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isDescending'])) {
            $this->isDescending = $data['isDescending'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
    }
}
