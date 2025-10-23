<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatRenamedEventMessageDetail
 */
class ChatRenamedEventMessageDetail
{
    /** The updated name of the chat. */
    public ?string $chatDisplayName = null;

    /** Unique identifier of the chat. */
    public ?string $chatId = null;

    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['chatDisplayName'])) {
            $this->chatDisplayName = $data['chatDisplayName'];
        }
        if (isset($data['chatId'])) {
            $this->chatId = $data['chatId'];
        }
        if (isset($data['initiator'])) {
            $this->initiator = $data['initiator'];
        }
    }
}
