<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IntegratedApplicationMetadata
 */
class IntegratedApplicationMetadata
{
    /**
     * The name of the integrated application.
     */
    private ?string $name;

    /**
     * The version number of the integrated application.
     */
    private ?string $version;


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

}
