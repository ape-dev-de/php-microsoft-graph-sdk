<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingAustralia
 */
class MediaContentRatingAustralia
{
    public function __construct(
        /**  */
        public ?RatingAustraliaMoviesType $movieRating = null,
        /**  */
        public ?RatingAustraliaTelevisionType $tvRating = null
    ) {}
}
