<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionPageViewConfiguration
 */
class AuthenticationAttributeCollectionPageViewConfiguration
{
    /**
     * The description of the page.
     */
    private ?string $description;

    /**
     * The display configuration of attributes being collected on the attribute collection page. You must specify all attributes that you want to retain, otherwise they''re removed from the user flow.
     */
    private array $inputs = [];

    /**
     * The title of the attribute collection page.
     */
    private ?string $title;


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getInputs(): array
    {
        return $this->inputs;
    }

    public function setInputs(array $inputs): self
    {
        $this->inputs = $inputs;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

}
