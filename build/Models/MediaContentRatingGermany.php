<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingGermany
 */
class MediaContentRatingGermany
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['movieRating'])) {
            $this->movieRating = is_string($data['movieRating']) ? RatingGermanyMoviesType::tryFrom($data['movieRating']) : $data['movieRating'];
        }
        if (isset($data['tvRating'])) {
            $this->tvRating = is_string($data['tvRating']) ? RatingGermanyTelevisionType::tryFrom($data['tvRating']) : $data['tvRating'];
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
