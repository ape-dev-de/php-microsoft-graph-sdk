<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReactionsFacet
 */
class ReactionsFacet
{
    /**
     * Count of comments.
     */
    private ?float $commentCount;

    /**
     * Count of likes.
     */
    private ?float $likeCount;

    /**
     * Count of shares.
     */
    private ?string $shareCount;


    public function getCommentCount(): ?float
    {
        return $this->commentCount;
    }

    public function setCommentCount(?float $commentCount): self
    {
        $this->commentCount = $commentCount;
        return $this;
    }

    public function getLikeCount(): ?float
    {
        return $this->likeCount;
    }

    public function setLikeCount(?float $likeCount): self
    {
        $this->likeCount = $likeCount;
        return $this;
    }

    public function getShareCount(): ?string
    {
        return $this->shareCount;
    }

    public function setShareCount(?string $shareCount): self
    {
        $this->shareCount = $shareCount;
        return $this;
    }

}
