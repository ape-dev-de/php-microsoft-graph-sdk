<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppPolicyDeploymentSummary
 */
class ManagedAppPolicyDeploymentSummary
{
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
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['configurationDeployedUserCount'])) {
            $this->configurationDeployedUserCount = $data['configurationDeployedUserCount'];
        }
        if (isset($data['configurationDeploymentSummaryPerApp'])) {
            $this->configurationDeploymentSummaryPerApp = $data['configurationDeploymentSummaryPerApp'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastRefreshTime'])) {
            $this->lastRefreshTime = $data['lastRefreshTime'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }
}
