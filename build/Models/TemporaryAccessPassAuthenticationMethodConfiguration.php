<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TemporaryAccessPassAuthenticationMethodConfiguration
 */
class TemporaryAccessPassAuthenticationMethodConfiguration
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

    /** Default length in characters of a Temporary Access Pass object. Must be between 8 and 48 characters. */
    public ?float $defaultLength = null;

    /** Default lifetime in minutes for a Temporary Access Pass. Value can be any integer between the minimumLifetimeInMinutes and maximumLifetimeInMinutes. */
    public ?float $defaultLifetimeInMinutes = null;

    /** If true, all the passes in the tenant will be restricted to one-time use. If false, passes in the tenant can be created to be either one-time use or reusable. */
    public ?bool $isUsableOnce = null;

    /** Maximum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days). */
    public ?float $maximumLifetimeInMinutes = null;

    /** Minimum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days). */
    public ?float $minimumLifetimeInMinutes = null;

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
        if (isset($data['defaultLength'])) {
            $this->defaultLength = is_numeric($data['defaultLength']) ? (float)$data['defaultLength'] : $data['defaultLength'];
        }
        if (isset($data['defaultLifetimeInMinutes'])) {
            $this->defaultLifetimeInMinutes = is_numeric($data['defaultLifetimeInMinutes']) ? (float)$data['defaultLifetimeInMinutes'] : $data['defaultLifetimeInMinutes'];
        }
        if (isset($data['isUsableOnce'])) {
            $this->isUsableOnce = is_bool($data['isUsableOnce']) ? $data['isUsableOnce'] : (bool)$data['isUsableOnce'];
        }
        if (isset($data['maximumLifetimeInMinutes'])) {
            $this->maximumLifetimeInMinutes = is_numeric($data['maximumLifetimeInMinutes']) ? (float)$data['maximumLifetimeInMinutes'] : $data['maximumLifetimeInMinutes'];
        }
        if (isset($data['minimumLifetimeInMinutes'])) {
            $this->minimumLifetimeInMinutes = is_numeric($data['minimumLifetimeInMinutes']) ? (float)$data['minimumLifetimeInMinutes'] : $data['minimumLifetimeInMinutes'];
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
