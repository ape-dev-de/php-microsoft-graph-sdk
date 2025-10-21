<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ContentTypeInfo
 */
class ContentTypeInfo
{
    /**
     * The ID of the content type.
     */
    private ?string $id;

    /**
     * The name of the content type.
     */
    private ?string $name;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
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

}
