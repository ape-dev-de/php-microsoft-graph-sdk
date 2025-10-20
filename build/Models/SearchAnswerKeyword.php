<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAnswerKeyword
 */
class SearchAnswerKeyword
{
    /**
     * A collection of keywords used to trigger the search answer.
     */
    private ?string $keywords;

    /**
     * If true, indicates that the search term contains similar words to the keywords that should trigger the search answer.
     */
    private ?bool $matchSimilarKeywords;

    /**
     * Unique keywords that guarantee the search answer is triggered.
     */
    private ?string $reservedKeywords;

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function getMatchSimilarKeywords(): ?bool
    {
        return $this->matchSimilarKeywords;
    }

    public function setMatchSimilarKeywords(?bool $matchSimilarKeywords): self
    {
        $this->matchSimilarKeywords = $matchSimilarKeywords;
        return $this;
    }

    public function getReservedKeywords(): ?string
    {
        return $this->reservedKeywords;
    }

    public function setReservedKeywords(?string $reservedKeywords): self
    {
        $this->reservedKeywords = $reservedKeywords;
        return $this;
    }

}
