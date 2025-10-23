<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorAuthenticationMethodConfiguration
 */
class MicrosoftAuthenticatorAuthenticationMethodConfiguration
{
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
    public mixed $state = null;

    /** 
     * A collection of Microsoft Authenticator settings such as application context and location context, and whether they are enabled for all users or specific users only.
     * @var MicrosoftAuthenticatorFeatureSettings|\stdClass|null
     */
    public mixed $featureSettings = null;

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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['excludeTargets'])) {
            $this->excludeTargets = $data['excludeTargets'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['featureSettings'])) {
            $this->featureSettings = $data['featureSettings'];
        }
        if (isset($data['isSoftwareOathEnabled'])) {
            $this->isSoftwareOathEnabled = $data['isSoftwareOathEnabled'];
        }
        if (isset($data['includeTargets'])) {
            $this->includeTargets = $data['includeTargets'];
        }
    }
}
