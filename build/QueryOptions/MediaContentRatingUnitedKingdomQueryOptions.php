<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaContentRatingUnitedKingdom resources
 *
 * Available select fields:
 * - movieRating
 * - tvRating
 */
class MediaContentRatingUnitedKingdomQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaContentRatingUnitedKingdom
     */
    public const FIELD_MOVIE_RATING = 'movieRating';
    public const FIELD_TV_RATING = 'tvRating';

    /**
     * Select specific MediaContentRatingUnitedKingdom properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
