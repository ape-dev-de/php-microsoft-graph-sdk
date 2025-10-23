<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisionChannelEmailResult
 */
class ProvisionChannelEmailResult
{
    /** Represents the provisioned email address. */
    public ?string $email = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['email'])) {
            $this->email = $data['email'];
        }
    }
}
