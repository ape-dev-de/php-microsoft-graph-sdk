<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IPv4Range
 */
class IPv4Range
{
    /** Lower address. */
    public ?string $lowerAddress = null;

    /** Upper address. */
    public ?string $upperAddress = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['lowerAddress'])) {
            $this->lowerAddress = $data['lowerAddress'];
        }
        if (isset($data['upperAddress'])) {
            $this->upperAddress = $data['upperAddress'];
        }
    }
}
