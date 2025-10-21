<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHyperlink
 */
class SecurityHyperlink
{
    /**
     * The name for this hyperlink.
     */
    private ?string $name;

    /**
     * The URL for this hyperlink.
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
