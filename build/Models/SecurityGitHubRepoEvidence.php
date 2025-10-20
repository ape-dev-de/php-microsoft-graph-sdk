<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGitHubRepoEvidence
 */
class SecurityGitHubRepoEvidence
{
    /**
     */
    private ?string $baseUrl;

    /**
     */
    private ?string $login;

    /**
     */
    private ?string $owner;

    /**
     */
    private ?string $ownerType;

    /**
     */
    private ?string $repoId;

    public function getBaseUrl(): ?string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(?string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;
        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(?string $owner): self
    {
        $this->owner = $owner;
        return $this;
    }

    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }

    public function setOwnerType(?string $ownerType): self
    {
        $this->ownerType = $ownerType;
        return $this;
    }

    public function getRepoId(): ?string
    {
        return $this->repoId;
    }

    public function setRepoId(?string $repoId): self
    {
        $this->repoId = $repoId;
        return $this;
    }

}
