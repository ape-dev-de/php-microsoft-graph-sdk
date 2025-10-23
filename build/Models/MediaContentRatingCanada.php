<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingCanada
 */
class MediaContentRatingCanada
{
    /**  */
    public ?RatingCanadaMoviesType $movieRating = null;

    /**  */
    public ?RatingCanadaTelevisionType $tvRating = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['movieRating'])) {
            $this->movieRating = is_array($data['movieRating']) ? new RatingCanadaMoviesType($data['movieRating']) : $data['movieRating'];
        }
        if (isset($data['tvRating'])) {
            $this->tvRating = is_array($data['tvRating']) ? new RatingCanadaTelevisionType($data['tvRating']) : $data['tvRating'];
        }
    }
}
