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
    /**
     * Available select fields for RubricQualityFeedbackModel
     */
    public const FIELD_FEEDBACK = 'feedback';
    public const FIELD_QUALITY_ID = 'qualityId';

    /**
     * Select specific RubricQualityFeedbackModel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
