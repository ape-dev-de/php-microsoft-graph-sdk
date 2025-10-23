<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingIreland
 */
class MediaContentRatingIreland
{
    /**  */
    public ?RatingIrelandMoviesType $movieRating = null;

    /**  */
    public ?RatingIrelandTelevisionType $tvRating = null;


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
