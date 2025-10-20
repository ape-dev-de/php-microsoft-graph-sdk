<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Synchronization
 */
class Synchronization
{
    /**
     * Represents a collection of credentials to access provisioned cloud applications.
     */
    private array $secrets = [];

    /**
     * Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory.
     */
    private array $jobs = [];

    /**
     * Preconfigured synchronization settings for a particular application.
     */
    private ?string $templates;

    public function getSecrets(): array
    {
        return $this->secrets;
    }

    public function setSecrets(array $secrets): self
    {
        $this->secrets = $secrets;
        return $this;
    }

    public function getJobs(): array
    {
        return $this->jobs;
    }

    public function setJobs(array $jobs): self
    {
        $this->jobs = $jobs;
        return $this;
    }

    public function getTemplates(): ?string
    {
        return $this->templates;
    }

    public function setTemplates(?string $templates): self
    {
        $this->templates = $templates;
        return $this;
    }

}
