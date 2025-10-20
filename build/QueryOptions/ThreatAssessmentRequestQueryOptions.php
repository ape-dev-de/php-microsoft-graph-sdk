<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatAssessmentRequest resources
 *
 * Available select fields:
 * - category
 * - contentType
 * - createdBy
 * - createdDateTime
 * - expectedAssessment
 * - requestSource
 * - status
 * - results
 */
class ThreatAssessmentRequestQueryOptions extends QueryOptions
{
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CONTENT_TYPE = 'contentType';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_EXPECTED_ASSESSMENT = 'expectedAssessment';
    public const FIELD_REQUEST_SOURCE = 'requestSource';
    public const FIELD_STATUS = 'status';
    public const FIELD_RESULTS = 'results';

    /**
     * Select specific ThreatAssessmentRequest properties
     * 
     * @param array<string> $select Use ThreatAssessmentRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
