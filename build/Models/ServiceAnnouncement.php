<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceAnnouncement
 */
class ServiceAnnouncement
{
    /**
     * A collection of service health information for tenant. This property is a contained navigation property, it is nullable and readonly.
     */
    private array $healthOverviews = [];

    /**
     * A collection of service issues for tenant. This property is a contained navigation property, it is nullable and readonly.
     */
    private array $issues = [];

    /**
     * A collection of service messages for tenant. This property is a contained navigation property, it is nullable and readonly.
     * @var string[]
     */
    private array $messages = [];


    public function getHealthOverviews(): array
    {
        return $this->healthOverviews;
    }

    public function setHealthOverviews(array $healthOverviews): self
    {
        $this->healthOverviews = $healthOverviews;
        return $this;
    }

    public function getIssues(): array
    {
        return $this->issues;
    }

    public function setIssues(array $issues): self
    {
        $this->issues = $issues;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @param string[] $messages
     */
    public function setMessages(array $messages): self
    {
        $this->messages = $messages;
        return $this;
    }

}
