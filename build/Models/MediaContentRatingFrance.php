<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingFrance
 */
class MediaContentRatingFrance
{
    /**  */
    public ?RatingFranceMoviesType $movieRating = null;

    /**  */
    public ?RatingFranceTelevisionType $tvRating = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['movieRating'])) {
            $this->movieRating = is_array($data['movieRating']) ? new RatingFranceMoviesType($data['movieRating']) : $data['movieRating'];
        }
        if (isset($data['tvRating'])) {
            $this->tvRating = is_array($data['tvRating']) ? new RatingFranceTelevisionType($data['tvRating']) : $data['tvRating'];
        }
    }
}
