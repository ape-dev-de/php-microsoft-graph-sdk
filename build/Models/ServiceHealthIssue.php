<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealthIssue
 */
class ServiceHealthIssue
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * More details about service event. This property doesn't support filters.
     * @var KeyValuePair[]
     */
    public array $details = [];

    /** The end time of the service event. */
    public ?\DateTimeInterface $endDateTime = null;

    /** The last modified time of the service event. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** The start time of the service event. */
    public ?\DateTimeInterface $startDateTime = null;

    /** The title of the service event. */
    public ?string $title = null;

    /**  */
    public ?ServiceHealthClassificationType $classification = null;

    /** The feature name of the service issue. */
    public ?string $feature = null;

    /** The feature group name of the service issue. */
    public ?string $featureGroup = null;

    /** The description of the service issue impact. */
    public ?string $impactDescription = null;

    /** Indicates whether the issue is resolved. */
    public ?bool $isResolved = null;

    /**  */
    public ?ServiceHealthOrigin $origin = null;

    /** 
     * Collection of historical posts for the service issue.
     * @var ServiceHealthIssuePost[]
     */
    public array $posts = [];

    /** Indicates the service affected by the issue. */
    public ?string $service = null;

    /**  */
    public ?ServiceHealthStatus $status = null;


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
        if (isset($data['details'])) {
            $this->details = $data['details'];
        }
        if (isset($data['endDateTime'])) {
            $this->endDateTime = is_string($data['endDateTime']) ? new \DateTimeImmutable($data['endDateTime']) : $data['endDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['startDateTime'])) {
            $this->startDateTime = is_string($data['startDateTime']) ? new \DateTimeImmutable($data['startDateTime']) : $data['startDateTime'];
        }
        if (isset($data['title'])) {
            $this->title = $data['title'];
        }
        if (isset($data['classification'])) {
            $this->classification = is_array($data['classification']) ? new ServiceHealthClassificationType($data['classification']) : $data['classification'];
        }
        if (isset($data['feature'])) {
            $this->feature = $data['feature'];
        }
        if (isset($data['featureGroup'])) {
            $this->featureGroup = $data['featureGroup'];
        }
        if (isset($data['impactDescription'])) {
            $this->impactDescription = $data['impactDescription'];
        }
        if (isset($data['isResolved'])) {
            $this->isResolved = $data['isResolved'];
        }
        if (isset($data['origin'])) {
            $this->origin = is_array($data['origin']) ? new ServiceHealthOrigin($data['origin']) : $data['origin'];
        }
        if (isset($data['posts'])) {
            $this->posts = $data['posts'];
        }
        if (isset($data['service'])) {
            $this->service = $data['service'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ServiceHealthStatus($data['status']) : $data['status'];
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
