<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaContentRatingJapan resources
 *
 * Available select fields:
 * - movieRating
 * - tvRating
 */
class MediaContentRatingJapanQueryOptions extends QueryOptions
{
    public const FIELD_MOVIE_RATING = 'movieRating';
    public const FIELD_TV_RATING = 'tvRating';

    /**
     * Select specific MediaContentRatingJapan properties
     * 
     * @param array<string> $select Use MediaContentRatingJapanQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
