<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatAssessmentResult resources
 *
 * Available select fields:
 * - createdDateTime
 * - message
 * - resultType
 */
class ThreatAssessmentResultQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_RESULT_TYPE = 'resultType';

    /**
     * Select specific ThreatAssessmentResult properties
     * 
     * @param array<string> $select Use ThreatAssessmentResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
