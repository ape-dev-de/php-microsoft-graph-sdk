<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingJapan
 */
class MediaContentRatingJapan
{
    /**  */
    public ?RatingJapanMoviesType $movieRating = null;

    /**  */
    public ?RatingJapanTelevisionType $tvRating = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['movieRating'])) {
            $this->movieRating = is_array($data['movieRating']) ? new RatingJapanMoviesType($data['movieRating']) : $data['movieRating'];
        }
        if (isset($data['tvRating'])) {
            $this->tvRating = is_array($data['tvRating']) ? new RatingJapanTelevisionType($data['tvRating']) : $data['tvRating'];
        }
    }
}
