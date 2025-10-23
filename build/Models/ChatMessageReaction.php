<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageReaction
 */
class ChatMessageReaction
{
    /** The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The name of the reaction. */
    public ?string $displayName = null;

    /** The hosted content URL for the custom reaction type. */
    public ?string $reactionContentUrl = null;

    /** The reaction type. Supported values include Unicode characters, custom, and some backward-compatible reaction types, such as like, angry, sad, laugh, heart, and surprised. */
    public ?string $reactionType = null;

    /**  */
    public ?ChatMessageReactionIdentitySet $user = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['reactionContentUrl'])) {
            $this->reactionContentUrl = $data['reactionContentUrl'];
        }
        if (isset($data['reactionType'])) {
            $this->reactionType = $data['reactionType'];
        }
        if (isset($data['user'])) {
            $this->user = $data['user'];
        }
    }
}
