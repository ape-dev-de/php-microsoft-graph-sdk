<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CertificationControl
 */
class CertificationControl
{
    /**
     * Certification control name
     */
    private ?string $name;

    /**
     * URL for the Microsoft Service Trust Portal
     */
    private ?string $url;


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
