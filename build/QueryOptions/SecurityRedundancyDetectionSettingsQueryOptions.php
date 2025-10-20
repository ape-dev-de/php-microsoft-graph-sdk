<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityRedundancyDetectionSettings resources
 *
 * Available select fields:
 * - isEnabled
 * - maxWords
 * - minWords
 * - similarityThreshold
 */
class SecurityRedundancyDetectionSettingsQueryOptions extends QueryOptions
{
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_MAX_WORDS = 'maxWords';
    public const FIELD_MIN_WORDS = 'minWords';
    public const FIELD_SIMILARITY_THRESHOLD = 'similarityThreshold';

    /**
     * Select specific SecurityRedundancyDetectionSettings properties
     * 
     * @param array<string> $select Use SecurityRedundancyDetectionSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
