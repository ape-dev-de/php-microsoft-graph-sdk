<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DataSubject
 */
class DataSubject
{
    /**
     * Email of the data subject.
     */
    private ?string $email;

    /**
     * First name of the data subject.
     */
    private ?string $firstName;

    /**
     * Last Name of the data subject.
     */
    private ?string $lastName;

    /**
     * The country/region of residency. The residency information is uesed only for internal reporting but not for the content search.
     */
    private ?string $residency;


    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getResidency(): ?string
    {
        return $this->residency;
    }

    public function setResidency(?string $residency): self
    {
        $this->residency = $residency;
        return $this;
    }

}
