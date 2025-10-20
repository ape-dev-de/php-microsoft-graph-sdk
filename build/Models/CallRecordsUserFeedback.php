<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsUserFeedback
 */
class CallRecordsUserFeedback
{
    /**
     */
    private ?string $rating;

    /**
     * The feedback text provided by the user of this endpoint for the session.
     */
    private ?string $text;

    /**
     * The set of feedback tokens provided by the user of this endpoint for the session. This is a set of Boolean properties. The property names should not be relied upon since they may change depending on what tokens are offered to the user.
     */
    private ?string $tokens;

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(?string $rating): self
    {
        $this->rating = $rating;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function getTokens(): ?string
    {
        return $this->tokens;
    }

    public function setTokens(?string $tokens): self
    {
        $this->tokens = $tokens;
        return $this;
    }

}
