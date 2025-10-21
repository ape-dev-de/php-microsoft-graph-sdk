<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Security
 */
class Security
{
    public function __construct(
        /**  */
        public array $alerts = [],
        /** A collection of alerts in Microsoft 365 Defender. */
        public array $alerts_v2 = [],
        /**  */
        public ?string $attackSimulation = null,
        /**  */
        public ?string $cases = null,
        /**  */
        public ?string $dataSecurityAndGovernance = null,
        /** A container for security identities APIs. */
        public ?string $identities = null,
        /** A collection of incidents in Microsoft 365 Defender, each of which is a set of correlated alerts and associated metadata that reflects the story of an attack. */
        public array $incidents = [],
        /**  */
        public ?string $labels = null,
        /**  */
        public array $secureScoreControlProfiles = [],
        /**  */
        public array $secureScores = [],
        /**  */
        public array $subjectRightsRequests = [],
        /**  */
        public ?string $threatIntelligence = null,
        /**  */
        public ?string $triggers = null,
        /**  */
        public ?string $triggerTypes = null
    ) {}
}
