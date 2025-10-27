<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlertHistoryState
 */
class AlertHistoryState
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?string $appId = null;

    /**  */
    public ?string $assignedTo = null;

    /** 
     * 
     * @var string[]
     */
    public array $comments = [];

    /** 
     * 
     * @var AlertFeedback|\stdClass|null
     */
    public AlertFeedback|\stdClass|null $feedback = null;

    /** 
     * 
     * @var AlertStatus|\stdClass|null
     */
    public AlertStatus|\stdClass|null $status = null;

    /**  */
    public ?\DateTimeInterface $updatedDateTime = null;

    /**  */
    public ?string $user = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['appId'])) {
            $this->appId = $data['appId'];
        }
        if (isset($data['assignedTo'])) {
            $this->assignedTo = $data['assignedTo'];
        }
        if (isset($data['comments'])) {
            $this->comments = $data['comments'];
        }
        if (isset($data['feedback'])) {
            $this->feedback = is_string($data['feedback']) ? AlertFeedback::tryFrom($data['feedback']) : $data['feedback'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? AlertStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['updatedDateTime'])) {
            $this->updatedDateTime = is_string($data['updatedDateTime']) ? new \DateTimeImmutable($data['updatedDateTime']) : $data['updatedDateTime'];
        }
        if (isset($data['user'])) {
            $this->user = $data['user'];
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
