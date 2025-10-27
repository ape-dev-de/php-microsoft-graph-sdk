<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppPolicyDeploymentSummaryPerApp
 */
class ManagedAppPolicyDeploymentSummaryPerApp
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Number of users the policy is applied. */
    public ?float $configurationAppliedUserCount = null;

    /** 
     * Deployment of an app.
     * @var MobileAppIdentifier|\stdClass|null
     */
    public MobileAppIdentifier|\stdClass|null $mobileAppIdentifier = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['configurationAppliedUserCount'])) {
            $this->configurationAppliedUserCount = is_numeric($data['configurationAppliedUserCount']) ? (float)$data['configurationAppliedUserCount'] : $data['configurationAppliedUserCount'];
        }
        if (isset($data['mobileAppIdentifier'])) {
            $this->mobileAppIdentifier = is_array($data['mobileAppIdentifier']) ? new MobileAppIdentifier($data['mobileAppIdentifier']) : $data['mobileAppIdentifier'];
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
