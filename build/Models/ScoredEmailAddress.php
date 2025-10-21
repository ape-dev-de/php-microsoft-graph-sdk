<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScoredEmailAddress
 */
class ScoredEmailAddress
{
    public function __construct(
        /** The email address. */
        public ?string $address = null,
        /**  */
        public ?string $itemId = null,
        /** The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships. */
        public ?string $relevanceScore = null,
        /**  */
        public ?string $selectionLikelihood = null
    ) {}
}
