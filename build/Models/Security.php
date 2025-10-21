<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Security
 */
class Security
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public array $alerts = [],
        /** A collection of alerts in Microsoft 365 Defender. */
        public array $alerts_v2 = [],
        /**  */
        public ?AttackSimulationRoot $attackSimulation = null,
        /**  */
        public ?SecurityCasesRoot $cases = null,
        /**  */
        public ?TenantDataSecurityAndGovernance $dataSecurityAndGovernance = null,
        /** A container for security identities APIs. */
        public ?SecurityIdentityContainer $identities = null,
        /** A collection of incidents in Microsoft 365 Defender, each of which is a set of correlated alerts and associated metadata that reflects the story of an attack. */
        public array $incidents = [],
        /**  */
        public ?SecurityLabelsRoot $labels = null,
        /**  */
        public array $secureScoreControlProfiles = [],
        /**  */
        public array $secureScores = [],
        /**  */
        public array $subjectRightsRequests = [],
        /**  */
        public ?SecurityThreatIntelligence $threatIntelligence = null,
        /**  */
        public ?SecurityTriggersRoot $triggers = null,
        /**  */
        public ?SecurityTriggerTypesRoot $triggerTypes = null
    ) {}
}
