<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppPolicyDeploymentSummary
 */
class ManagedAppPolicyDeploymentSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Not yet documented */
    public ?float $configurationDeployedUserCount = null;

    /** 
     * Not yet documented
     * @var ManagedAppPolicyDeploymentSummaryPerApp[]
     */
    public array $configurationDeploymentSummaryPerApp = [];

    /** Not yet documented */
    public ?string $displayName = null;

    /** Not yet documented */
    public ?\DateTimeInterface $lastRefreshTime = null;

    /** Version of the entity. */
    public ?string $version = null;


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
        if (isset($data['configurationDeployedUserCount'])) {
            $this->configurationDeployedUserCount = is_numeric($data['configurationDeployedUserCount']) ? (float)$data['configurationDeployedUserCount'] : $data['configurationDeployedUserCount'];
        }
        if (isset($data['configurationDeploymentSummaryPerApp'])) {
            $this->configurationDeploymentSummaryPerApp = $data['configurationDeploymentSummaryPerApp'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastRefreshTime'])) {
            $this->lastRefreshTime = is_string($data['lastRefreshTime']) ? new \DateTimeImmutable($data['lastRefreshTime']) : $data['lastRefreshTime'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
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
