<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SubjectRightsRequestStageDetail resources
 *
 * Available select fields:
 * - error
 * - stage
 * - status
 */
class SubjectRightsRequestStageDetailQueryOptions extends QueryOptions
{
    public const FIELD_ERROR = 'error';
    public const FIELD_STAGE = 'stage';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific SubjectRightsRequestStageDetail properties
     * 
     * @param array<string> $select Use SubjectRightsRequestStageDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
