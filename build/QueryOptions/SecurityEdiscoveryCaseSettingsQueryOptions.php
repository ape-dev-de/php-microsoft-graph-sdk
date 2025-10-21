<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryCaseSettings resources
 *
 * Available select fields:
 * - caseType
 * - ocr
 * - redundancyDetection
 * - reviewSetSettings
 * - topicModeling
 */
class SecurityEdiscoveryCaseSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryCaseSettings
     */
    public const FIELD_CASE_TYPE = 'caseType';
    public const FIELD_OCR = 'ocr';
    public const FIELD_REDUNDANCY_DETECTION = 'redundancyDetection';
    public const FIELD_REVIEW_SET_SETTINGS = 'reviewSetSettings';
    public const FIELD_TOPIC_MODELING = 'topicModeling';

    /**
     * Select specific SecurityEdiscoveryCaseSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
