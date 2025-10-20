<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJobApplicationParameters
 */
class SynchronizationJobApplicationParameters
{
    /**
     * The identifier of the synchronizationRule to be applied. This rule ID is defined in the schema for a given synchronization job or template.
     */
    private ?string $ruleId;

    /**
     * The identifiers of one or more objects to which a synchronizationJob is to be applied.
     */
    private ?string $subjects;

    public function getRuleId(): ?string
    {
        return $this->ruleId;
    }

    public function setRuleId(?string $ruleId): self
    {
        $this->ruleId = $ruleId;
        return $this;
    }

    public function getSubjects(): ?string
    {
        return $this->subjects;
    }

    public function setSubjects(?string $subjects): self
    {
        $this->subjects = $subjects;
        return $this;
    }

}
