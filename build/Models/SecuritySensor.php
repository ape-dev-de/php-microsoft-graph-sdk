<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySensor
 */
class SecuritySensor
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time when the sensor was generated. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?SecurityDeploymentStatus $deploymentStatus = null;

    /** The display name of the sensor. */
    public ?string $displayName = null;

    /** The fully qualified domain name of the sensor. */
    public ?string $domainName = null;

    /**  */
    public ?SecuritySensorHealthStatus $healthStatus = null;

    /** This field displays the count of health issues related to this sensor. */
    public ?float $openHealthIssuesCount = null;

    /**  */
    public ?SecuritySensorType $sensorType = null;

    /**  */
    public ?SecuritySensorSettings $settings = null;

    /** The version of the sensor. */
    public ?string $version = null;

    /** 
     * Represents potential issues within a customer's Microsoft Defender for Identity configuration that Microsoft Defender for Identity identified related to the sensor.
     * @var SecurityHealthIssue[]
     */
    public array $healthIssues = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['deploymentStatus'])) {
            $this->deploymentStatus = $data['deploymentStatus'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['domainName'])) {
            $this->domainName = $data['domainName'];
        }
        if (isset($data['healthStatus'])) {
            $this->healthStatus = $data['healthStatus'];
        }
        if (isset($data['openHealthIssuesCount'])) {
            $this->openHealthIssuesCount = $data['openHealthIssuesCount'];
        }
        if (isset($data['sensorType'])) {
            $this->sensorType = $data['sensorType'];
        }
        if (isset($data['settings'])) {
            $this->settings = $data['settings'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['healthIssues'])) {
            $this->healthIssues = $data['healthIssues'];
        }
    }
}
