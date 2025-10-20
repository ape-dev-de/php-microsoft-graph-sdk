<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SensitivityLabelAssignment
 */
class SensitivityLabelAssignment
{
    /**
     */
    private ?string $assignmentMethod;

    /**
     * The unique identifier for the sensitivity label assigned to the file.
     */
    private ?string $sensitivityLabelId;

    /**
     * The unique identifier for the tenant that hosts the file when this label is applied.
     */
    private ?string $tenantId;

    public function getAssignmentMethod(): ?string
    {
        return $this->assignmentMethod;
    }

    public function setAssignmentMethod(?string $assignmentMethod): self
    {
        $this->assignmentMethod = $assignmentMethod;
        return $this;
    }

    public function getSensitivityLabelId(): ?string
    {
        return $this->sensitivityLabelId;
    }

    public function setSensitivityLabelId(?string $sensitivityLabelId): self
    {
        $this->sensitivityLabelId = $sensitivityLabelId;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

}
