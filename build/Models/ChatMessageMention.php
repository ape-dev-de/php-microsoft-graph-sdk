<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageMention
 */
class ChatMessageMention
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Index of an entity being mentioned in the specified chatMessage. Matches the {index} value in the corresponding <at id='{index}'> tag in the message body. */
    public ?float $id = null;

    /** 
     * The entity (user, application, team, channel, or chat) that was @mentioned.
     * @var ChatMessageMentionedIdentitySet|\stdClass|null
     */
    public ChatMessageMentionedIdentitySet|\stdClass|null $mentioned = null;

    /** String used to represent the mention. For example, a user's display name, a team name. */
    public ?string $mentionText = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['mentioned'])) {
            $this->mentioned = is_array($data['mentioned']) ? new ChatMessageMentionedIdentitySet($data['mentioned']) : $data['mentioned'];
        }
        if (isset($data['mentionText'])) {
            $this->mentionText = $data['mentionText'];
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
