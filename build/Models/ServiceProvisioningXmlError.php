<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceProvisioningXmlError
 */
class ServiceProvisioningXmlError
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The date and time at which the error occurred. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Indicates whether the error has been attended to. */
    public ?bool $isResolved = null;

    /** Qualified service instance (for example, 'SharePoint/Dublin') that published the service error information. */
    public ?string $serviceInstance = null;

    /** Error Information published by the Federated Service as an xml string. */
    public ?string $errorDetail = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['isResolved'])) {
            $this->isResolved = $data['isResolved'];
        }
        if (isset($data['serviceInstance'])) {
            $this->serviceInstance = $data['serviceInstance'];
        }
        if (isset($data['errorDetail'])) {
            $this->errorDetail = $data['errorDetail'];
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
