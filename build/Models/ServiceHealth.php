<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceHealth
 */
class ServiceHealth
{
    /**
     * The service name. Use the list healthOverviews operation to get exact string names for services subscribed by the tenant.
     */
    private ?string $service;

    /**
     */
    private ?string $status;

    /**
     * A collection of issues that happened on the service, with detailed information for each issue.
     */
    private ?string $issues;

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getIssues(): ?string
    {
        return $this->issues;
    }

    public function setIssues(?string $issues): self
    {
        $this->issues = $issues;
        return $this;
    }

}
