<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingGermany
 */
class MediaContentRatingGermany
{
    public function __construct(
        /**  */
        public ?RatingGermanyMoviesType $movieRating = null,
        /**  */
        public ?RatingGermanyTelevisionType $tvRating = null
    ) {}
}
