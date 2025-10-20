<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDispositionReviewStage resources
 *
 * Available select fields:
 * - name
 * - reviewersEmailAddresses
 * - stageNumber
 */
class SecurityDispositionReviewStageQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_REVIEWERS_EMAIL_ADDRESSES = 'reviewersEmailAddresses';
    public const FIELD_STAGE_NUMBER = 'stageNumber';

    /**
     * Select specific SecurityDispositionReviewStage properties
     * 
     * @param array<string> $select Use SecurityDispositionReviewStageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
