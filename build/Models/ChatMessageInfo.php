<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageInfo
 */
class ChatMessageInfo
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Body of the chatMessage. This will still contain markers for @mentions and attachments even though the object doesn't return @mentions and attachments.
     * @var ItemBody|\stdClass|null
     */
    public mixed $body = null;

    /** Date time object representing the time at which message was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Read-only.  If present, represents details of an event that happened in a chat, a channel, or a team, for example, members were added, and so on. For event messages, the messageType property is set to systemEventMessage.
     * @var EventMessageDetail|\stdClass|null
     */
    public mixed $eventDetail = null;

    /** 
     * Information about the sender of the message.
     * @var ChatMessageFromIdentitySet|\stdClass|null
     */
    public mixed $from = null;

    /** If set to true, the original message has been deleted. */
    public ?bool $isDeleted = null;

    /**  */
    public ?ChatMessageType $messageType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['body'])) {
            $this->body = $data['body'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['eventDetail'])) {
            $this->eventDetail = $data['eventDetail'];
        }
        if (isset($data['from'])) {
            $this->from = $data['from'];
        }
        if (isset($data['isDeleted'])) {
            $this->isDeleted = $data['isDeleted'];
        }
        if (isset($data['messageType'])) {
            $this->messageType = $data['messageType'];
        }
    }
}
