<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Security
 */
class Security
{
    /**
     */
    private array $alerts = [];

    /**
     * A collection of alerts in Microsoft 365 Defender.
     */
    private array $alerts_v2 = [];

    /**
     */
    private ?string $attackSimulation;

    /**
     */
    private ?string $cases;

    /**
     */
    private ?string $dataSecurityAndGovernance;

    /**
     * A container for security identities APIs.
     */
    private ?string $identities;

    /**
     * A collection of incidents in Microsoft 365 Defender, each of which is a set of correlated alerts and associated metadata that reflects the story of an attack.
     */
    private array $incidents = [];

    /**
     */
    private ?string $labels;

    /**
     */
    private array $secureScoreControlProfiles = [];

    /**
     */
    private array $secureScores = [];

    /**
     */
    private array $subjectRightsRequests = [];

    /**
     */
    private ?string $threatIntelligence;

    /**
     */
    private ?string $triggers;

    /**
     */
    private ?string $triggerTypes;

    public function getAlerts(): array
    {
        return $this->alerts;
    }

    public function setAlerts(array $alerts): self
    {
        $this->alerts = $alerts;
        return $this;
    }

    public function getAlerts_v2(): array
    {
        return $this->alerts_v2;
    }

    public function setAlerts_v2(array $alerts_v2): self
    {
        $this->alerts_v2 = $alerts_v2;
        return $this;
    }

    public function getAttackSimulation(): ?string
    {
        return $this->attackSimulation;
    }

    public function setAttackSimulation(?string $attackSimulation): self
    {
        $this->attackSimulation = $attackSimulation;
        return $this;
    }

    public function getCases(): ?string
    {
        return $this->cases;
    }

    public function setCases(?string $cases): self
    {
        $this->cases = $cases;
        return $this;
    }

    public function getDataSecurityAndGovernance(): ?string
    {
        return $this->dataSecurityAndGovernance;
    }

    public function setDataSecurityAndGovernance(?string $dataSecurityAndGovernance): self
    {
        $this->dataSecurityAndGovernance = $dataSecurityAndGovernance;
        return $this;
    }

    public function getIdentities(): ?string
    {
        return $this->identities;
    }

    public function setIdentities(?string $identities): self
    {
        $this->identities = $identities;
        return $this;
    }

    public function getIncidents(): array
    {
        return $this->incidents;
    }

    public function setIncidents(array $incidents): self
    {
        $this->incidents = $incidents;
        return $this;
    }

    public function getLabels(): ?string
    {
        return $this->labels;
    }

    public function setLabels(?string $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    public function getSecureScoreControlProfiles(): array
    {
        return $this->secureScoreControlProfiles;
    }

    public function setSecureScoreControlProfiles(array $secureScoreControlProfiles): self
    {
        $this->secureScoreControlProfiles = $secureScoreControlProfiles;
        return $this;
    }

    public function getSecureScores(): array
    {
        return $this->secureScores;
    }

    public function setSecureScores(array $secureScores): self
    {
        $this->secureScores = $secureScores;
        return $this;
    }

    public function getSubjectRightsRequests(): array
    {
        return $this->subjectRightsRequests;
    }

    public function setSubjectRightsRequests(array $subjectRightsRequests): self
    {
        $this->subjectRightsRequests = $subjectRightsRequests;
        return $this;
    }

    public function getThreatIntelligence(): ?string
    {
        return $this->threatIntelligence;
    }

    public function setThreatIntelligence(?string $threatIntelligence): self
    {
        $this->threatIntelligence = $threatIntelligence;
        return $this;
    }

    public function getTriggers(): ?string
    {
        return $this->triggers;
    }

    public function setTriggers(?string $triggers): self
    {
        $this->triggers = $triggers;
        return $this;
    }

    public function getTriggerTypes(): ?string
    {
        return $this->triggerTypes;
    }

    public function setTriggerTypes(?string $triggerTypes): self
    {
        $this->triggerTypes = $triggerTypes;
        return $this;
    }

}
