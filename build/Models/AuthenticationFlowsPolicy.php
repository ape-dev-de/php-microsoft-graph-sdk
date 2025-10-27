<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationFlowsPolicy
 */
class AuthenticationFlowsPolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Inherited property. A description of the policy. Optional. Read-only. */
    public ?string $description = null;

    /** Inherited property. The human-readable name of the policy. Optional. Read-only. */
    public ?string $displayName = null;

    /** 
     * Contains selfServiceSignUpAuthenticationFlowConfiguration settings that convey whether self-service sign-up is enabled or disabled. Optional. Read-only.
     * @var SelfServiceSignUpAuthenticationFlowConfiguration|\stdClass|null
     */
    public SelfServiceSignUpAuthenticationFlowConfiguration|\stdClass|null $selfServiceSignUp = null;


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
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['selfServiceSignUp'])) {
            $this->selfServiceSignUp = is_array($data['selfServiceSignUp']) ? new SelfServiceSignUpAuthenticationFlowConfiguration($data['selfServiceSignUp']) : $data['selfServiceSignUp'];
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
