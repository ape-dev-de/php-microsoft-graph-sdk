<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationStrengthRoot
 */
class AuthenticationStrengthRoot
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var AuthenticationMethodModes[]
     */
    public array $combinations = [];

    /** 
     * Names and descriptions of all valid authentication method modes in the system.
     * @var AuthenticationMethodModeDetail[]
     */
    public array $authenticationMethodModes = [];

    /** 
     * A collection of authentication strength policies that exist for this tenant, including both built-in and custom policies.
     * @var AuthenticationStrengthPolicy[]
     */
    public array $policies = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['combinations'])) {
            $this->combinations = $data['combinations'];
        }
        if (isset($data['authenticationMethodModes'])) {
            $this->authenticationMethodModes = $data['authenticationMethodModes'];
        }
        if (isset($data['policies'])) {
            $this->policies = $data['policies'];
        }
    }
}
