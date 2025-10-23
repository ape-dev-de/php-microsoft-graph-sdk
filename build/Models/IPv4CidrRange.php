<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IPv4CidrRange
 */
class IPv4CidrRange
{
    /** IPv4 address in CIDR notation. Not nullable. */
    public ?string $cidrAddress = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['cidrAddress'])) {
            $this->cidrAddress = $data['cidrAddress'];
        }
    }
}
