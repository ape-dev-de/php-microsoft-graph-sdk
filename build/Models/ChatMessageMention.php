<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChatMessageMention
 */
class ChatMessageMention
{
    /**
     * Index of an entity being mentioned in the specified chatMessage. Matches the {index} value in the corresponding <at id=''{index}''> tag in the message body.
     */
    private ?float $id;

    /**
     * The entity (user, application, team, channel, or chat) that was @mentioned.
     */
    private ?string $mentioned;

    /**
     * String used to represent the mention. For example, a user''s display name, a team name.
     */
    private ?string $mentionText;

    public function getId(): ?float
    {
        return $this->id;
    }

    public function setId(?float $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getMentioned(): ?string
    {
        return $this->mentioned;
    }

    public function setMentioned(?string $mentioned): self
    {
        $this->mentioned = $mentioned;
        return $this;
    }

    public function getMentionText(): ?string
    {
        return $this->mentionText;
    }

    public function setMentionText(?string $mentionText): self
    {
        $this->mentionText = $mentionText;
        return $this;
    }

}
