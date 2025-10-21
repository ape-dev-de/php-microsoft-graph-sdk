<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCalloutData
 */
class IdentityGovernanceCustomTaskExtensionCalloutData
{
    /**
     */
    private ?string $subject;

    /**
     */
    private ?string $task;

    /**
     */
    private ?string $taskProcessingresult;

    /**
     */
    private ?string $workflow;


    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;
        return $this;
    }

    public function getTask(): ?string
    {
        return $this->task;
    }

    public function setTask(?string $task): self
    {
        $this->task = $task;
        return $this;
    }

    public function getTaskProcessingresult(): ?string
    {
        return $this->taskProcessingresult;
    }

    public function setTaskProcessingresult(?string $taskProcessingresult): self
    {
        $this->taskProcessingresult = $taskProcessingresult;
        return $this;
    }

    public function getWorkflow(): ?string
    {
        return $this->workflow;
    }

    public function setWorkflow(?string $workflow): self
    {
        $this->workflow = $workflow;
        return $this;
    }

}
