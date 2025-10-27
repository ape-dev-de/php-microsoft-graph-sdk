<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceAnnouncement
 */
class ServiceAnnouncement
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly.
     * @var ServiceHealth[]
     */
    public array $healthOverviews = [];

    /** 
     * A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly.
     * @var ServiceHealthIssue[]
     */
    public array $issues = [];

    /** 
     * A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
     * @var ServiceUpdateMessage[]
     */
    public array $messages = [];


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
        if (isset($data['healthOverviews'])) {
            $this->healthOverviews = $data['healthOverviews'];
        }
        if (isset($data['issues'])) {
            $this->issues = $data['issues'];
        }
        if (isset($data['messages'])) {
            $this->messages = $data['messages'];
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
