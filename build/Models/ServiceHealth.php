<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealth
 */
class ServiceHealth
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The service name. Use the list healthOverviews operation to get exact string names for services subscribed by the tenant. */
    public ?string $service = null;

    /**  */
    public ?ServiceHealthStatus $status = null;

    /** 
     * A collection of issues that happened on the service, with detailed information for each issue.
     * @var ServiceHealthIssue[]
     */
    public array $issues = [];


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
        if (isset($data['service'])) {
            $this->service = $data['service'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ServiceHealthStatus($data['status']) : $data['status'];
        }
        if (isset($data['issues'])) {
            $this->issues = $data['issues'];
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
