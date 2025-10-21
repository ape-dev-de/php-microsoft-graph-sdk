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
     * @var string[]
     */
    private array $keywords = [];

    /**
     * If true, indicates that the search term contains similar words to the keywords that should trigger the search answer.
     */
    private ?bool $matchSimilarKeywords;

    /**
     * Unique keywords that guarantee the search answer is triggered.
     * @var string[]
     */
    private array $reservedKeywords = [];


    /**
     * @return string[]
     */
    public function getKeywords(): array
    {
        return $this->keywords;
    }

    /**
     * @param string[] $keywords
     */
    public function setKeywords(array $keywords): self
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

    /**
     * @return string[]
     */
    public function getReservedKeywords(): array
    {
        return $this->reservedKeywords;
    }

    /**
     * @param string[] $reservedKeywords
     */
    public function setReservedKeywords(array $reservedKeywords): self
    {
        $this->reservedKeywords = $reservedKeywords;
        return $this;
    }

}
