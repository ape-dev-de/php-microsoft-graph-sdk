<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationFlowsPolicy
 */
class AuthenticationFlowsPolicy
{
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
    public mixed $selfServiceSignUp = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
            $this->selfServiceSignUp = $data['selfServiceSignUp'];
        }
    }
}
