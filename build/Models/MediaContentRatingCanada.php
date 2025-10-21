<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingCanada
 */
class MediaContentRatingCanada
{
    public function __construct(
        /**  */
        public ?RatingCanadaMoviesType $movieRating = null,
        /**  */
        public ?RatingCanadaTelevisionType $tvRating = null
    ) {}
}
