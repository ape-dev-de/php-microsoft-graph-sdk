<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VoiceAuthenticationMethodConfiguration
 */
class VoiceAuthenticationMethodConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Groups of users that are excluded from a policy.
     * @var ExcludeTarget[]
     */
    public array $excludeTargets = [];

    /** 
     * The state of the policy. Possible values are: enabled, disabled.
     * @var AuthenticationMethodState|\stdClass|null
     */
    public AuthenticationMethodState|\stdClass|null $state = null;

    /** true if users can register office phones, otherwise, false. */
    public ?bool $isOfficePhoneAllowed = null;

    /** 
     * A collection of groups that are enabled to use the authentication method. Expanded by default.
     * @var AuthenticationMethodTarget[]
     */
    public array $includeTargets = [];


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
        if (isset($data['excludeTargets'])) {
            $this->excludeTargets = $data['excludeTargets'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new AuthenticationMethodState($data['state']) : $data['state'];
        }
        if (isset($data['isOfficePhoneAllowed'])) {
            $this->isOfficePhoneAllowed = is_bool($data['isOfficePhoneAllowed']) ? $data['isOfficePhoneAllowed'] : (bool)$data['isOfficePhoneAllowed'];
        }
        if (isset($data['includeTargets'])) {
            $this->includeTargets = $data['includeTargets'];
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
