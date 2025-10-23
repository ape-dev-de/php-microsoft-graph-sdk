<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsRoot
 */
class AuthenticationMethodsRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents the state of a user's authentication methods, including which methods are registered and which features the user is registered and capable of (such as multifactor authentication, self-service password reset, and passwordless authentication).
     * @var UserRegistrationDetails[]
     */
    public array $userRegistrationDetails = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['userRegistrationDetails'])) {
            $this->userRegistrationDetails = $data['userRegistrationDetails'];
        }
    }
}
