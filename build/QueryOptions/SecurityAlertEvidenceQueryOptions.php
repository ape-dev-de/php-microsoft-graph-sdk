<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAlertEvidence resources
 *
 * Available select fields:
 * - createdDateTime
 * - detailedRoles
 * - remediationStatus
 * - remediationStatusDetails
 * - roles
 * - tags
 * - verdict
 */
class SecurityAlertEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DETAILED_ROLES = 'detailedRoles';
    public const FIELD_REMEDIATION_STATUS = 'remediationStatus';
    public const FIELD_REMEDIATION_STATUS_DETAILS = 'remediationStatusDetails';
    public const FIELD_ROLES = 'roles';
    public const FIELD_TAGS = 'tags';
    public const FIELD_VERDICT = 'verdict';

    /**
     * Select specific SecurityAlertEvidence properties
     * 
     * @param array<string> $select Use SecurityAlertEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
