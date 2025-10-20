<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationError
 */
class SynchronizationError
{
    /**
     * The error code. For example, AzureDirectoryB2BManagementPolicyCheckFailure.
     */
    private ?string $code;

    /**
     * The error message. For example, Policy permitting auto-redemption of invitations not configured.
     */
    private ?string $message;

    /**
     * The action to take to resolve the error. For example, false.
     */
    private ?string $tenantActionable;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getTenantActionable(): ?string
    {
        return $this->tenantActionable;
    }

    public function setTenantActionable(?string $tenantActionable): self
    {
        $this->tenantActionable = $tenantActionable;
        return $this;
    }

}
