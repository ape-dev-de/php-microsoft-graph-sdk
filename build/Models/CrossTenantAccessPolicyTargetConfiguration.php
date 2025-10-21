<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyTargetConfiguration
 */
class CrossTenantAccessPolicyTargetConfiguration
{
    /**
     * Defines whether access is allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue.
     */
    private ?string $accessType;

    /**
     * Specifies whether to target users, groups, or applications with this rule.
     * @var string[]
     */
    private array $targets = [];


    public function getAccessType(): ?string
    {
        return $this->accessType;
    }

    public function setAccessType(?string $accessType): self
    {
        $this->accessType = $accessType;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTargets(): array
    {
        return $this->targets;
    }

    /**
     * @param string[] $targets
     */
    public function setTargets(array $targets): self
    {
        $this->targets = $targets;
        return $this;
    }

}
