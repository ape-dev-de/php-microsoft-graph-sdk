<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorAuthenticationMethodConfiguration
 */
class MicrosoftAuthenticatorAuthenticationMethodConfiguration
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

    /** 
     * A collection of Microsoft Authenticator settings such as application context and location context, and whether they are enabled for all users or specific users only.
     * @var MicrosoftAuthenticatorFeatureSettings|\stdClass|null
     */
    public MicrosoftAuthenticatorFeatureSettings|\stdClass|null $featureSettings = null;

    /**  */
    public ?bool $isSoftwareOathEnabled = null;

    /** 
     * A collection of groups that are enabled to use the authentication method. Expanded by default.
     * @var MicrosoftAuthenticatorAuthenticationMethodTarget[]
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
        if (isset($data['featureSettings'])) {
            $this->featureSettings = is_array($data['featureSettings']) ? new MicrosoftAuthenticatorFeatureSettings($data['featureSettings']) : $data['featureSettings'];
        }
        if (isset($data['isSoftwareOathEnabled'])) {
            $this->isSoftwareOathEnabled = is_bool($data['isSoftwareOathEnabled']) ? $data['isSoftwareOathEnabled'] : (bool)$data['isSoftwareOathEnabled'];
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
