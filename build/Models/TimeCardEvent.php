<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TimeCardEvent
 */
class TimeCardEvent
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The time the entry is recorded. */
    public ?\DateTimeInterface $dateTime = null;

    /** Indicates whether this action happens at an approved location. */
    public ?bool $isAtApprovedLocation = null;

    /** 
     * Notes about the timeCardEvent.
     * @var ItemBody|\stdClass|null
     */
    public mixed $notes = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['dateTime'])) {
            $this->dateTime = is_string($data['dateTime']) ? new \DateTimeImmutable($data['dateTime']) : $data['dateTime'];
        }
        if (isset($data['isAtApprovedLocation'])) {
            $this->isAtApprovedLocation = $data['isAtApprovedLocation'];
        }
        if (isset($data['notes'])) {
            $this->notes = is_array($data['notes']) ? new ItemBody($data['notes']) : $data['notes'];
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
