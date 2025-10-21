<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRedundancyDetectionSettings
 */
class SecurityRedundancyDetectionSettings
{
    public function __construct(
        /** Indicates whether email threading and near duplicate detection are enabled. */
        public ?bool $isEnabled = null,
        /** Specifies the maximum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words. */
        public ?float $maxWords = null,
        /** Specifies the minimum number of words used for email threading and near duplicate detection. To learn more, see Minimum/maximum number of words. */
        public ?float $minWords = null,
        /** Specifies the similarity level for documents to be put in the same near duplicate set. To learn more, see Document and email similarity threshold. */
        public ?string $similarityThreshold = null
    ) {}
}
