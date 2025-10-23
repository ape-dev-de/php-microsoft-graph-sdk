<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SoftwareOathAuthenticationMethod
 */
class SoftwareOathAuthenticationMethod
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The secret key of the method. Always returns null. */
    public ?string $secretKey = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['secretKey'])) {
            $this->secretKey = $data['secretKey'];
        }
    }
}
