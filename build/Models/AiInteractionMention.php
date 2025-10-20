<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionMention
 */
class AiInteractionMention
{
    /**
     */
    private ?string $mentioned;

    /**
     */
    private ?float $mentionId;

    /**
     */
    private ?string $mentionText;

    public function getMentioned(): ?string
    {
        return $this->mentioned;
    }

    public function setMentioned(?string $mentioned): self
    {
        $this->mentioned = $mentioned;
        return $this;
    }

    public function getMentionId(): ?float
    {
        return $this->mentionId;
    }

    public function setMentionId(?float $mentionId): self
    {
        $this->mentionId = $mentionId;
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
