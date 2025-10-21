<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingIreland
 */
class MediaContentRatingIreland
{
    public function __construct(
        /**  */
        public ?RatingIrelandMoviesType $movieRating = null,
        /**  */
        public ?RatingIrelandTelevisionType $tvRating = null
    ) {}
}
