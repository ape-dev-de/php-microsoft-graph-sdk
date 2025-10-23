<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReactionsFacet
 */
class ReactionsFacet
{
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
        if (isset($data['commentCount'])) {
            $this->commentCount = $data['commentCount'];
        }
        if (isset($data['likeCount'])) {
            $this->likeCount = $data['likeCount'];
        }
        if (isset($data['shareCount'])) {
            $this->shareCount = $data['shareCount'];
        }
    }
}
