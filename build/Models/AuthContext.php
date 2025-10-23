<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthContext
 */
class AuthContext
{
    /** Supported values are c1 through c99. */
    public ?string $authenticationContextValue = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['authenticationContextValue'])) {
            $this->authenticationContextValue = $data['authenticationContextValue'];
        }
    }
}
