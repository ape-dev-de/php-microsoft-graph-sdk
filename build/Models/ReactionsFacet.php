<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReactionsFacet
 */
class ReactionsFacet
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Count of comments. */
    public ?float $commentCount = null;

    /** Count of likes. */
    public ?float $likeCount = null;

    /** Count of shares. */
    public ?float $shareCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['commentCount'])) {
            $this->commentCount = is_numeric($data['commentCount']) ? (float)$data['commentCount'] : $data['commentCount'];
        }
        if (isset($data['likeCount'])) {
            $this->likeCount = is_numeric($data['likeCount']) ? (float)$data['likeCount'] : $data['likeCount'];
        }
        if (isset($data['shareCount'])) {
            $this->shareCount = is_numeric($data['shareCount']) ? (float)$data['shareCount'] : $data['shareCount'];
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
