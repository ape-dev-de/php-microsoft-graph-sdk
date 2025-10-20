<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InformationProtection resources
 *
 * Available select fields:
 * - bitlocker
 * - threatAssessmentRequests
 */
class InformationProtectionQueryOptions extends QueryOptions
{
    public const FIELD_BITLOCKER = 'bitlocker';
    public const FIELD_THREAT_ASSESSMENT_REQUESTS = 'threatAssessmentRequests';

    /**
     * Select specific InformationProtection properties
     * 
     * @param array<string> $select Use InformationProtectionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
