<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReactionsFacet
 */
class ReactionsFacet
{
    public function __construct(
        /** Count of comments. */
        public ?float $commentCount = null,
        /** Count of likes. */
        public ?float $likeCount = null,
        /** Count of shares. */
        public ?string $shareCount = null
    ) {}
}
