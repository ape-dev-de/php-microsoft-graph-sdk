<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingGermany
 */
class MediaContentRatingGermany
{
    /**  */
    public ?RatingGermanyMoviesType $movieRating = null;

    /**  */
    public ?RatingGermanyTelevisionType $tvRating = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['movieRating'])) {
            $this->movieRating = $data['movieRating'];
        }
        if (isset($data['tvRating'])) {
            $this->tvRating = $data['tvRating'];
        }
    }
}
