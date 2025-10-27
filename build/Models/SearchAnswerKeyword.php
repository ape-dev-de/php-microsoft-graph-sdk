<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAnswerKeyword
 */
class SearchAnswerKeyword
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * A collection of keywords used to trigger the search answer.
     * @var string[]
     */
    public array $keywords = [];

    /** If true, indicates that the search term contains similar words to the keywords that should trigger the search answer. */
    public ?bool $matchSimilarKeywords = null;

    /** 
     * Unique keywords that guarantee the search answer is triggered.
     * @var string[]
     */
    public array $reservedKeywords = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['keywords'])) {
            $this->keywords = $data['keywords'];
        }
        if (isset($data['matchSimilarKeywords'])) {
            $this->matchSimilarKeywords = $data['matchSimilarKeywords'];
        }
        if (isset($data['reservedKeywords'])) {
            $this->reservedKeywords = $data['reservedKeywords'];
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
