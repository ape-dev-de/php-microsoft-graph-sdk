<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefaultColumnValue
 */
class DefaultColumnValue
{
    /** The formula used to compute the default value for the column. */
    public ?string $formula = null;

    /** The direct value to use as the default value for the column. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['formula'])) {
            $this->formula = $data['formula'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
