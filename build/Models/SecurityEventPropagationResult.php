<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEventPropagationResult
 */
class SecurityEventPropagationResult
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The name of the specific location in the workload associated with the event. */
    public ?string $location = null;

    /** The name of the workload associated with the event. */
    public ?string $serviceName = null;

    /** 
     * Indicates the status of the event creation request. The possible values are: none, inProcessing, failed, success, unknownFutureValue.
     * @var SecurityEventPropagationStatus|\stdClass|null
     */
    public SecurityEventPropagationStatus|\stdClass|null $status = null;

    /** Additional information about the status of the event creation request. */
    public ?string $statusInformation = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['location'])) {
            $this->location = $data['location'];
        }
        if (isset($data['serviceName'])) {
            $this->serviceName = $data['serviceName'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new SecurityEventPropagationStatus($data['status']) : $data['status'];
        }
        if (isset($data['statusInformation'])) {
            $this->statusInformation = $data['statusInformation'];
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
