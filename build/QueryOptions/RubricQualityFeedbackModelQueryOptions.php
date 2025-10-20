<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RubricQualityFeedbackModel resources
 *
 * Available select fields:
 * - feedback
 * - qualityId
 */
class RubricQualityFeedbackModelQueryOptions extends QueryOptions
{
    public const FIELD_FEEDBACK = 'feedback';
    public const FIELD_QUALITY_ID = 'qualityId';

    /**
     * Select specific RubricQualityFeedbackModel properties
     * 
     * @param array<string> $select Use RubricQualityFeedbackModelQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
