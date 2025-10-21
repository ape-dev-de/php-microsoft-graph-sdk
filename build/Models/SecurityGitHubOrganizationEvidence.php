<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGitHubOrganizationEvidence
 */
class SecurityGitHubOrganizationEvidence
{
    /**
     */
    private ?string $company;

    /**
     */
    private ?string $displayName;

    /**
     */
    private ?string $email;

    /**
     */
    private ?string $login;

    /**
     */
    private ?string $orgId;

    /**
     */
    private ?string $webUrl;


    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
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

    public function getOrgId(): ?string
    {
        return $this->orgId;
    }

    public function setOrgId(?string $orgId): self
    {
        $this->orgId = $orgId;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

}
