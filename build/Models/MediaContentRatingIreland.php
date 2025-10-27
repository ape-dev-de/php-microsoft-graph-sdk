<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingIreland
 */
class MediaContentRatingIreland
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['movieRating'])) {
            $this->movieRating = is_string($data['movieRating']) ? RatingIrelandMoviesType::tryFrom($data['movieRating']) : $data['movieRating'];
        }
        if (isset($data['tvRating'])) {
            $this->tvRating = is_string($data['tvRating']) ? RatingIrelandTelevisionType::tryFrom($data['tvRating']) : $data['tvRating'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
