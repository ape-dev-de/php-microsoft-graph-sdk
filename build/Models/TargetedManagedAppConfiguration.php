<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppConfiguration
 */
class TargetedManagedAppConfiguration
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time the policy was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The policy's description. */
    public ?string $description = null;

    /** Policy display name. */
    public ?string $displayName = null;

    /** Last time the policy was modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Version of the entity. */
    public ?string $version = null;

    /** 
     * A set of string key and string value pairs to be sent to apps for users to whom the configuration is scoped, unalterned by this service
     * @var KeyValuePair[]
     */
    public array $customSettings = [];

    /** Count of apps to which the current policy is deployed. */
    public ?float $deployedAppCount = null;

    /** Indicates if the policy is deployed to any inclusion groups or not. */
    public ?bool $isAssigned = null;

    /** 
     * List of apps to which the policy is deployed.
     * @var ManagedMobileApp[]
     */
    public array $apps = [];

    /** 
     * Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @var TargetedManagedAppPolicyAssignment[]
     */
    public array $assignments = [];

    /** 
     * Navigation property to deployment summary of the configuration.
     * @var ManagedAppPolicyDeploymentSummary|\stdClass|null
     */
    public ManagedAppPolicyDeploymentSummary|\stdClass|null $deploymentSummary = null;


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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['customSettings'])) {
            $this->customSettings = $data['customSettings'];
        }
        if (isset($data['deployedAppCount'])) {
            $this->deployedAppCount = is_numeric($data['deployedAppCount']) ? (float)$data['deployedAppCount'] : $data['deployedAppCount'];
        }
        if (isset($data['isAssigned'])) {
            $this->isAssigned = is_bool($data['isAssigned']) ? $data['isAssigned'] : (bool)$data['isAssigned'];
        }
        if (isset($data['apps'])) {
            $this->apps = $data['apps'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['deploymentSummary'])) {
            $this->deploymentSummary = is_array($data['deploymentSummary']) ? new ManagedAppPolicyDeploymentSummary($data['deploymentSummary']) : $data['deploymentSummary'];
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
