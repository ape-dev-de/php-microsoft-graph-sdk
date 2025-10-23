<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingUnitedStates
 */
class MediaContentRatingUnitedStates
{
    /**  */
    public ?RatingUnitedStatesMoviesType $movieRating = null;

    /**  */
    public ?RatingUnitedStatesTelevisionType $tvRating = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['movieRating'])) {
            $this->movieRating = is_array($data['movieRating']) ? new RatingUnitedStatesMoviesType($data['movieRating']) : $data['movieRating'];
        }
        if (isset($data['tvRating'])) {
            $this->tvRating = is_array($data['tvRating']) ? new RatingUnitedStatesTelevisionType($data['tvRating']) : $data['tvRating'];
        }
    }
}
