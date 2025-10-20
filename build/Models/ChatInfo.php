<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatInfo
 */
class ChatInfo
{
    /**
     * The unique identifier of a message in a Microsoft Teams channel.
     */
    private ?string $messageId;

    /**
     * The ID of the reply message.
     */
    private ?string $replyChainMessageId;

    /**
     * The unique identifier for a thread in Microsoft Teams.
     */
    private ?string $threadId;

    public function getMessageId(): ?string
    {
        return $this->messageId;
    }

    public function setMessageId(?string $messageId): self
    {
        $this->messageId = $messageId;
        return $this;
    }

    public function getReplyChainMessageId(): ?string
    {
        return $this->replyChainMessageId;
    }

    public function setReplyChainMessageId(?string $replyChainMessageId): self
    {
        $this->replyChainMessageId = $replyChainMessageId;
        return $this;
    }

    public function getThreadId(): ?string
    {
        return $this->threadId;
    }

    public function setThreadId(?string $threadId): self
    {
        $this->threadId = $threadId;
        return $this;
    }

}
