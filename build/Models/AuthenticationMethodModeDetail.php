<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodModeDetail
 */
class AuthenticationMethodModeDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?BaseAuthenticationMethod $authenticationMethod = null;

    /** The display name of this mode */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['authenticationMethod'])) {
            $this->authenticationMethod = is_string($data['authenticationMethod']) ? BaseAuthenticationMethod::tryFrom($data['authenticationMethod']) : $data['authenticationMethod'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
