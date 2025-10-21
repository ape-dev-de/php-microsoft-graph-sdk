<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingUnitedKingdom
 */
class MediaContentRatingUnitedKingdom
{
    public function __construct(
        /**  */
        public ?RatingUnitedKingdomMoviesType $movieRating = null,
        /**  */
        public ?RatingUnitedKingdomTelevisionType $tvRating = null
    ) {}
}
