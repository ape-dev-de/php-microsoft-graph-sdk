<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityGitHubUserEvidence
 */
class SecurityGitHubUserEvidence
{
    /**
     */
    private ?string $email;

    /**
     */
    private ?string $login;

    /**
     */
    private ?string $name;

    /**
     */
    private ?string $userId;

    /**
     */
    private ?string $webUrl;


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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
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
