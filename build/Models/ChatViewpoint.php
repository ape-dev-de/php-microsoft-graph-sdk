<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatViewpoint
 */
class ChatViewpoint
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether the chat is hidden for the current user. */
    public ?bool $isHidden = null;

    /** Represents the dateTime up until which the current user has read chatMessages in a specific chat. */
    public ?\DateTimeInterface $lastMessageReadDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isHidden'])) {
            $this->isHidden = is_bool($data['isHidden']) ? $data['isHidden'] : (bool)$data['isHidden'];
        }
        if (isset($data['lastMessageReadDateTime'])) {
            $this->lastMessageReadDateTime = is_string($data['lastMessageReadDateTime']) ? new \DateTimeImmutable($data['lastMessageReadDateTime']) : $data['lastMessageReadDateTime'];
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
