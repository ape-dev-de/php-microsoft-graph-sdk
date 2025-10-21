<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingNewZealand
 */
class MediaContentRatingNewZealand
{
    public function __construct(
        /**  */
        public ?RatingNewZealandMoviesType $movieRating = null,
        /**  */
        public ?RatingNewZealandTelevisionType $tvRating = null
    ) {}
}
