<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DevicesFilter
 */
class DevicesFilter
{
    /**
     * Determines whether devices that satisfy the rule should be allowed or blocked. The possible values are: allowed, blocked, unknownFutureValue.
     */
    private ?string $mode;

    /**
     * Defines the rule to filter the devices. For example, device.deviceAttribute2 -eq ''PrivilegedAccessWorkstation''.
     */
    private ?string $rule;

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    public function getRule(): ?string
    {
        return $this->rule;
    }

    public function setRule(?string $rule): self
    {
        $this->rule = $rule;
        return $this;
    }

}
