<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PersonOrGroupColumn
 */
class PersonOrGroupColumn
{
    /**
     * Indicates whether multiple values can be selected from the source.
     */
    private ?bool $allowMultipleSelection;

    /**
     * Whether to allow selection of people only, or people and groups. Must be one of peopleAndGroups or peopleOnly.
     */
    private ?string $chooseFromType;

    /**
     * How to display the information about the person or group chosen. See below.
     */
    private ?string $displayAs;


    public function getAllowMultipleSelection(): ?bool
    {
        return $this->allowMultipleSelection;
    }

    public function setAllowMultipleSelection(?bool $allowMultipleSelection): self
    {
        $this->allowMultipleSelection = $allowMultipleSelection;
        return $this;
    }

    public function getChooseFromType(): ?string
    {
        return $this->chooseFromType;
    }

    public function setChooseFromType(?string $chooseFromType): self
    {
        $this->chooseFromType = $chooseFromType;
        return $this;
    }

    public function getDisplayAs(): ?string
    {
        return $this->displayAs;
    }

    public function setDisplayAs(?string $displayAs): self
    {
        $this->displayAs = $displayAs;
        return $this;
    }

}
