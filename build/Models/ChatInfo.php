<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatInfo
 */
class ChatInfo
{
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
}
