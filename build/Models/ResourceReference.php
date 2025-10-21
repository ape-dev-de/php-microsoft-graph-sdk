<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceReference
 */
class ResourceReference
{
    /**
     * The item's unique identifier.
     */
    private ?string $id;

    /**
     * A string value that can be used to classify the item, such as ''microsoft.graph.driveItem
     */
    private ?string $type;

    /**
     * A URL leading to the referenced item.
     */
    private ?string $webUrl;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
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
