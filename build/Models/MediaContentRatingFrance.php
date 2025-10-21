<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingFrance
 */
class MediaContentRatingFrance
{
    public function __construct(
        /**  */
        public ?RatingFranceMoviesType $movieRating = null,
        /**  */
        public ?RatingFranceTelevisionType $tvRating = null
    ) {}
}
