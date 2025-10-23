<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InsightValueInt
 */
class InsightValueInt
{
    /** The int value of the user experience analytics insight. */
    public ?float $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
