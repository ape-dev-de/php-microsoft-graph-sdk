<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaContentRatingFrance resources
 *
 * Available select fields:
 * - movieRating
 * - tvRating
 */
class MediaContentRatingFranceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaContentRatingFrance
     */
    public const FIELD_MOVIE_RATING = 'movieRating';
    public const FIELD_TV_RATING = 'tvRating';

    /**
     * Select specific MediaContentRatingFrance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
