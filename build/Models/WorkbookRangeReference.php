<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookRangeReference
 */
class WorkbookRangeReference
{
    /**  */
    public ?string $address = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['address'])) {
            $this->address = $data['address'];
        }
    }
}
