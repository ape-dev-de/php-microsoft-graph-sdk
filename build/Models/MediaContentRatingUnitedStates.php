<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingUnitedStates
 */
class MediaContentRatingUnitedStates
{
    public function __construct(
        /**  */
        public ?RatingUnitedStatesMoviesType $movieRating = null,
        /**  */
        public ?RatingUnitedStatesTelevisionType $tvRating = null
    ) {}
}
