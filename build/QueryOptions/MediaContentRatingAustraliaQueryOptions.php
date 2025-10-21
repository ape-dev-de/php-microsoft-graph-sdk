<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaContentRatingAustralia resources
 *
 * Available select fields:
 * - movieRating
 * - tvRating
 */
class MediaContentRatingAustraliaQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaContentRatingAustralia
     */
    public const FIELD_MOVIE_RATING = 'movieRating';
    public const FIELD_TV_RATING = 'tvRating';

    /**
     * Select specific MediaContentRatingAustralia properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
