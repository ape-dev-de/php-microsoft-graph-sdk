<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamFunSettings
 */
class TeamFunSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If set to true, enables users to include custom memes. */
    public ?bool $allowCustomMemes = null;

    /** If set to true, enables Giphy use. */
    public ?bool $allowGiphy = null;

    /** If set to true, enables users to include stickers and memes. */
    public ?bool $allowStickersAndMemes = null;

    /** 
     * Giphy content rating. Possible values are: moderate, strict.
     * @var GiphyRatingType|\stdClass|null
     */
    public GiphyRatingType|\stdClass|null $giphyContentRating = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowCustomMemes'])) {
            $this->allowCustomMemes = is_bool($data['allowCustomMemes']) ? $data['allowCustomMemes'] : (bool)$data['allowCustomMemes'];
        }
        if (isset($data['allowGiphy'])) {
            $this->allowGiphy = is_bool($data['allowGiphy']) ? $data['allowGiphy'] : (bool)$data['allowGiphy'];
        }
        if (isset($data['allowStickersAndMemes'])) {
            $this->allowStickersAndMemes = is_bool($data['allowStickersAndMemes']) ? $data['allowStickersAndMemes'] : (bool)$data['allowStickersAndMemes'];
        }
        if (isset($data['giphyContentRating'])) {
            $this->giphyContentRating = is_string($data['giphyContentRating']) ? GiphyRatingType::tryFrom($data['giphyContentRating']) : $data['giphyContentRating'];
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
