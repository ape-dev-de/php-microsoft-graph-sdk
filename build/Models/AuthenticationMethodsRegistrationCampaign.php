<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsRegistrationCampaign
 */
class AuthenticationMethodsRegistrationCampaign
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Users and groups of users that are excluded from being prompted to set up the authentication method.
     * @var ExcludeTarget[]
     */
    public array $excludeTargets = [];

    /** 
     * Users and groups of users that are prompted to set up the authentication method.
     * @var AuthenticationMethodsRegistrationCampaignIncludeTarget[]
     */
    public array $includeTargets = [];

    /** Specifies the number of days that the user sees a prompt again if they select 'Not now' and snoozes the prompt. Minimum: 0 days. Maximum: 14 days. If the value is '0', the user is prompted during every MFA attempt. */
    public ?float $snoozeDurationInDays = null;

    /**  */
    public ?AdvancedConfigState $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['excludeTargets'])) {
            $this->excludeTargets = $data['excludeTargets'];
        }
        if (isset($data['includeTargets'])) {
            $this->includeTargets = $data['includeTargets'];
        }
        if (isset($data['snoozeDurationInDays'])) {
            $this->snoozeDurationInDays = is_numeric($data['snoozeDurationInDays']) ? (float)$data['snoozeDurationInDays'] : $data['snoozeDurationInDays'];
        }
        if (isset($data['state'])) {
            $this->state = is_string($data['state']) ? AdvancedConfigState::tryFrom($data['state']) : $data['state'];
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
