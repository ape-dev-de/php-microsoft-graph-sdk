<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PinnedChatMessageInfo
 */
class PinnedChatMessageInfo
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents details about the chat message that is pinned.
     * @var ChatMessage|\stdClass|null
     */
    public mixed $message = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
    }
}
