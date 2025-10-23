<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationConditionApplication
 */
class AuthenticationConditionApplication
{
    /** The identifier for an application corresponding to a condition which will trigger an authenticationEventListener. */
    public ?string $appId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
    }
}
