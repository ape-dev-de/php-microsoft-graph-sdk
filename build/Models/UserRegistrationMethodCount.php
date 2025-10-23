<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationMethodCount
 */
class UserRegistrationMethodCount
{
    /** Name of the authentication method. */
    public ?string $authenticationMethod = null;

    /** Number of users registered. */
    public ?float $userCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['authenticationMethod'])) {
            $this->authenticationMethod = $data['authenticationMethod'];
        }
        if (isset($data['userCount'])) {
            $this->userCount = $data['userCount'];
        }
    }
}
