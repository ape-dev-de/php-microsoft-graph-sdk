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
    /**
     * Available select fields for MediaContentRatingCanada
     */
    public const FIELD_MOVIE_RATING = 'movieRating';
    public const FIELD_TV_RATING = 'tvRating';

    /**
     * Select specific MediaContentRatingCanada properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
