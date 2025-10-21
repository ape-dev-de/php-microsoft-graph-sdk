<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceWorkflowVersion
 */
class IdentityGovernanceWorkflowVersion
{
    /**
     * The version of the workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     */
    private ?string $versionNumber;


    public function getVersionNumber(): ?string
    {
        return $this->versionNumber;
    }

    public function setVersionNumber(?string $versionNumber): self
    {
        $this->versionNumber = $versionNumber;
        return $this;
    }

}
