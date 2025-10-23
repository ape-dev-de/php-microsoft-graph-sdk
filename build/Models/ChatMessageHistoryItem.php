<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageHistoryItem
 */
class ChatMessageHistoryItem
{
    /**  */
    public ?ChatMessageActions $actions = null;

    /** The date and time when the message was modified. */
    public ?\DateTimeInterface $modifiedDateTime = null;

    /** 
     * The reaction in the modified message.
     * @var ChatMessageReaction|\stdClass|null
     */
    public mixed $reaction = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['actions'])) {
            $this->actions = $data['actions'];
        }
        if (isset($data['modifiedDateTime'])) {
            $this->modifiedDateTime = is_string($data['modifiedDateTime']) ? new \DateTimeImmutable($data['modifiedDateTime']) : $data['modifiedDateTime'];
        }
        if (isset($data['reaction'])) {
            $this->reaction = $data['reaction'];
        }
    }
}
