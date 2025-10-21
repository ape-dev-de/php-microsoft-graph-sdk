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
     * @var string[]
     */
    private array $subjects = [];


    public function getRuleId(): ?string
    {
        return $this->ruleId;
    }

    public function setRuleId(?string $ruleId): self
    {
        $this->ruleId = $ruleId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }

    /**
     * @param string[] $subjects
     */
    public function setSubjects(array $subjects): self
    {
        $this->subjects = $subjects;
        return $this;
    }

}
