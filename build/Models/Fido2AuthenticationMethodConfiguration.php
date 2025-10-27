<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Fido2AuthenticationMethodConfiguration
 */
class Fido2AuthenticationMethodConfiguration
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

    /** Determines whether attestation must be enforced for FIDO2 security key registration. */
    public ?bool $isAttestationEnforced = null;

    /** Determines if users can register new FIDO2 security keys. */
    public ?bool $isSelfServiceRegistrationAllowed = null;

    /** 
     * Controls whether key restrictions are enforced on FIDO2 security keys, either allowing or disallowing certain key types as defined by Authenticator Attestation GUID (AAGUID), an identifier that indicates the type (for example, make and model) of the authenticator.
     * @var Fido2KeyRestrictions|\stdClass|null
     */
    public Fido2KeyRestrictions|\stdClass|null $keyRestrictions = null;

    /** 
     * A collection of groups that are enabled to use the authentication method.
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
        if (isset($data['isAttestationEnforced'])) {
            $this->isAttestationEnforced = is_bool($data['isAttestationEnforced']) ? $data['isAttestationEnforced'] : (bool)$data['isAttestationEnforced'];
        }
        if (isset($data['isSelfServiceRegistrationAllowed'])) {
            $this->isSelfServiceRegistrationAllowed = is_bool($data['isSelfServiceRegistrationAllowed']) ? $data['isSelfServiceRegistrationAllowed'] : (bool)$data['isSelfServiceRegistrationAllowed'];
        }
        if (isset($data['keyRestrictions'])) {
            $this->keyRestrictions = is_array($data['keyRestrictions']) ? new Fido2KeyRestrictions($data['keyRestrictions']) : $data['keyRestrictions'];
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
