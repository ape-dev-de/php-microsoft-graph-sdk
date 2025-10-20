<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaContentRatingCanada resources
 *
 * Available select fields:
 * - movieRating
 * - tvRating
 */
class MediaContentRatingCanadaQueryOptions extends QueryOptions
{
    public const FIELD_MOVIE_RATING = 'movieRating';
    public const FIELD_TV_RATING = 'tvRating';

    /**
     * Select specific MediaContentRatingCanada properties
     * 
     * @param array<string> $select Use MediaContentRatingCanadaQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
