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
    public const FIELD_MOVIE_RATING = 'movieRating';
    public const FIELD_TV_RATING = 'tvRating';

    /**
     * Select specific MediaContentRatingUnitedStates properties
     * 
     * @param array<string> $select Use MediaContentRatingUnitedStatesQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
