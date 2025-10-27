<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensorSettings
 */
class SecuritySensorSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Description of the sensor. */
    public ?string $description = null;

    /** 
     * DNS names for the domain controller
     * @var string[]
     */
    public array $domainControllerDnsNames = [];

    /** Indicates whether to delay updates for the sensor. */
    public ?bool $isDelayedDeploymentEnabled = null;

    /** 
     * 
     * @var SecurityNetworkAdapter[]
     */
    public array $networkAdapters = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['domainControllerDnsNames'])) {
            $this->domainControllerDnsNames = $data['domainControllerDnsNames'];
        }
        if (isset($data['isDelayedDeploymentEnabled'])) {
            $this->isDelayedDeploymentEnabled = is_bool($data['isDelayedDeploymentEnabled']) ? $data['isDelayedDeploymentEnabled'] : (bool)$data['isDelayedDeploymentEnabled'];
        }
        if (isset($data['networkAdapters'])) {
            $this->networkAdapters = $data['networkAdapters'];
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
