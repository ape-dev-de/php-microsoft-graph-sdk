<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageHistoryItem
 */
class ChatMessageHistoryItem
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?ChatMessageActions $actions = null;

    /** The date and time when the message was modified. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** 
     * The reaction in the modified message.
     * @var ChatMessageReaction|\stdClass|null
     */
    public ChatMessageReaction|\stdClass|null $reaction = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['actions'])) {
            $this->actions = is_array($data['actions']) ? new ChatMessageActions($data['actions']) : $data['actions'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['reaction'])) {
            $this->reaction = is_array($data['reaction']) ? new ChatMessageReaction($data['reaction']) : $data['reaction'];
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
