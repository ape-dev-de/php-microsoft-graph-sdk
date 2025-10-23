<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BasicAuthentication
 */
class BasicAuthentication
{
    /** The password. It isn't returned in the responses. */
    public ?string $password = null;

    /** The username. */
    public ?string $username = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['password'])) {
            $this->password = $data['password'];
        }
        if (isset($data['username'])) {
            $this->username = $data['username'];
        }
    }
}
