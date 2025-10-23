<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Security
 */
class Security
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * 
     * @var Alert[]
     */
    public array $alerts = [];

    /** 
     * A collection of alerts in Microsoft 365 Defender.
     * @var SecurityAlert[]
     */
    public array $alerts_v2 = [];

    /** 
     * 
     * @var AttackSimulationRoot|\stdClass|null
     */
    public mixed $attackSimulation = null;

    /** 
     * 
     * @var SecurityCasesRoot|\stdClass|null
     */
    public mixed $cases = null;

    /** 
     * 
     * @var TenantDataSecurityAndGovernance|\stdClass|null
     */
    public mixed $dataSecurityAndGovernance = null;

    /** 
     * A container for security identities APIs.
     * @var SecurityIdentityContainer|\stdClass|null
     */
    public mixed $identities = null;

    /** 
     * A collection of incidents in Microsoft 365 Defender, each of which is a set of correlated alerts and associated metadata that reflects the story of an attack.
     * @var SecurityIncident[]
     */
    public array $incidents = [];

    /** 
     * 
     * @var SecurityLabelsRoot|\stdClass|null
     */
    public mixed $labels = null;

    /** 
     * 
     * @var SecureScoreControlProfile[]
     */
    public array $secureScoreControlProfiles = [];

    /** 
     * 
     * @var SecureScore[]
     */
    public array $secureScores = [];

    /** 
     * 
     * @var SubjectRightsRequest[]
     */
    public array $subjectRightsRequests = [];

    /** 
     * 
     * @var SecurityThreatIntelligence|\stdClass|null
     */
    public mixed $threatIntelligence = null;

    /** 
     * 
     * @var SecurityTriggersRoot|\stdClass|null
     */
    public mixed $triggers = null;

    /** 
     * 
     * @var SecurityTriggerTypesRoot|\stdClass|null
     */
    public mixed $triggerTypes = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['alerts'])) {
            $this->alerts = $data['alerts'];
        }
        if (isset($data['alerts_v2'])) {
            $this->alerts_v2 = $data['alerts_v2'];
        }
        if (isset($data['attackSimulation'])) {
            $this->attackSimulation = $data['attackSimulation'];
        }
        if (isset($data['cases'])) {
            $this->cases = $data['cases'];
        }
        if (isset($data['dataSecurityAndGovernance'])) {
            $this->dataSecurityAndGovernance = $data['dataSecurityAndGovernance'];
        }
        if (isset($data['identities'])) {
            $this->identities = $data['identities'];
        }
        if (isset($data['incidents'])) {
            $this->incidents = $data['incidents'];
        }
        if (isset($data['labels'])) {
            $this->labels = $data['labels'];
        }
        if (isset($data['secureScoreControlProfiles'])) {
            $this->secureScoreControlProfiles = $data['secureScoreControlProfiles'];
        }
        if (isset($data['secureScores'])) {
            $this->secureScores = $data['secureScores'];
        }
        if (isset($data['subjectRightsRequests'])) {
            $this->subjectRightsRequests = $data['subjectRightsRequests'];
        }
        if (isset($data['threatIntelligence'])) {
            $this->threatIntelligence = $data['threatIntelligence'];
        }
        if (isset($data['triggers'])) {
            $this->triggers = $data['triggers'];
        }
        if (isset($data['triggerTypes'])) {
            $this->triggerTypes = $data['triggerTypes'];
        }
    }
}
