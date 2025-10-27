<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatInfo
 */
class ChatInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier of a message in a Microsoft Teams channel. */
    public ?string $messageId = null;

    /** The ID of the reply message. */
    public ?string $replyChainMessageId = null;

    /** The unique identifier for a thread in Microsoft Teams. */
    public ?string $threadId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['messageId'])) {
            $this->messageId = $data['messageId'];
        }
        if (isset($data['replyChainMessageId'])) {
            $this->replyChainMessageId = $data['replyChainMessageId'];
        }
        if (isset($data['threadId'])) {
            $this->threadId = $data['threadId'];
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
