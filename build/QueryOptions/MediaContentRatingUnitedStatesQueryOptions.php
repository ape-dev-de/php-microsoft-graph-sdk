<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaContentRatingUnitedStates resources
 *
 * Available select fields:
 * - movieRating
 * - tvRating
 */
class MediaContentRatingUnitedStatesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaContentRatingUnitedStates
     */
    public const FIELD_MOVIE_RATING = 'movieRating';
    public const FIELD_TV_RATING = 'tvRating';

    /**
     * Select specific MediaContentRatingUnitedStates properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
