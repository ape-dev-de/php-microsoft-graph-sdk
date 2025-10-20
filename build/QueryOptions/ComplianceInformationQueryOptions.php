<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComplianceInformation resources
 *
 * Available select fields:
 * - certificationControls
 * - certificationName
 */
class ComplianceInformationQueryOptions extends QueryOptions
{
    public const FIELD_CERTIFICATION_CONTROLS = 'certificationControls';
    public const FIELD_CERTIFICATION_NAME = 'certificationName';

    /**
     * Select specific ComplianceInformation properties
     * 
     * @param array<string> $select Use ComplianceInformationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
