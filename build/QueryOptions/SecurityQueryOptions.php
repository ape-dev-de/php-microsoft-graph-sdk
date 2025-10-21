<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Security resources
 *
 * Available select fields:
 * - alerts
 * - alerts_v2
 * - attackSimulation
 * - cases
 * - dataSecurityAndGovernance
 * - identities
 * - incidents
 * - labels
 * - secureScoreControlProfiles
 * - secureScores
 * - subjectRightsRequests
 * - threatIntelligence
 * - triggers
 * - triggerTypes
 */
class SecurityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Security
     */
    public const FIELD_ALERTS = 'alerts';
    public const FIELD_ALERTS_V2 = 'alerts_v2';
    public const FIELD_ATTACK_SIMULATION = 'attackSimulation';
    public const FIELD_CASES = 'cases';
    public const FIELD_DATA_SECURITY_AND_GOVERNANCE = 'dataSecurityAndGovernance';
    public const FIELD_IDENTITIES = 'identities';
    public const FIELD_INCIDENTS = 'incidents';
    public const FIELD_LABELS = 'labels';
    public const FIELD_SECURE_SCORE_CONTROL_PROFILES = 'secureScoreControlProfiles';
    public const FIELD_SECURE_SCORES = 'secureScores';
    public const FIELD_SUBJECT_RIGHTS_REQUESTS = 'subjectRightsRequests';
    public const FIELD_THREAT_INTELLIGENCE = 'threatIntelligence';
    public const FIELD_TRIGGERS = 'triggers';
    public const FIELD_TRIGGER_TYPES = 'triggerTypes';

    /**
     * Select specific Security properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
