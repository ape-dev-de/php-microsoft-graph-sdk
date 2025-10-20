<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SearchAnswerKeyword resources
 *
 * Available select fields:
 * - keywords
 * - matchSimilarKeywords
 * - reservedKeywords
 */
class SearchAnswerKeywordQueryOptions extends QueryOptions
{
    public const FIELD_KEYWORDS = 'keywords';
    public const FIELD_MATCH_SIMILAR_KEYWORDS = 'matchSimilarKeywords';
    public const FIELD_RESERVED_KEYWORDS = 'reservedKeywords';

    /**
     * Select specific SearchAnswerKeyword properties
     * 
     * @param array<string> $select Use SearchAnswerKeywordQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
