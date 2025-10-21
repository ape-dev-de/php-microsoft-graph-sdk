<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAnswerKeyword
 */
class SearchAnswerKeyword
{
    public function __construct(
        /** @var string[] A collection of keywords used to trigger the search answer. */
        public array $keywords = [],
        /** If true, indicates that the search term contains similar words to the keywords that should trigger the search answer. */
        public ?bool $matchSimilarKeywords = null,
        /** @var string[] Unique keywords that guarantee the search answer is triggered. */
        public array $reservedKeywords = []
    ) {}
}
