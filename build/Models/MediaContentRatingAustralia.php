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
        public ?string $movieRating = null,
        /**  */
        public ?string $tvRating = null
    ) {}
}
