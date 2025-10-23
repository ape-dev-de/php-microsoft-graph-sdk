<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IPv6CidrRange
 */
class IPv6CidrRange
{
    /** IPv6 address in CIDR notation. Not nullable. */
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
