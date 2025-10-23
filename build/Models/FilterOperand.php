<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FilterOperand
 */
class FilterOperand
{
    /** 
     * Collection of values.
     * @var string[]
     */
    public array $values = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['values'])) {
            $this->values = $data['values'];
        }
    }
}
