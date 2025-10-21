<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTarget
 */
class CrossTenantAccessPolicyTarget
{
    /**
     * Defines the target for cross-tenant access policy settings and can have one of the following values:  The unique identifier of the user, group, or application  AllUsers  AllApplications - Refers to any Microsoft cloud application.  Office365 - Includes the applications mentioned as part of the Office 365 suite.
     */
    private ?string $target;

    /**
     * The type of resource that you want to target. The possible values are: user, group, application, unknownFutureValue.
     */
    private ?string $targetType;


    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;
        return $this;
    }

    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    public function setTargetType(?string $targetType): self
    {
        $this->targetType = $targetType;
        return $this;
    }

}
