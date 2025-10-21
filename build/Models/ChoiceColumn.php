<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChoiceColumn
 */
class ChoiceColumn
{
    /**
     * If true, allows custom values that aren''t in the configured choices.
     */
    private ?bool $allowTextEntry;

    /**
     * The list of values available for this column.
     * @var string[]
     */
    private array $choices = [];

    /**
     * How the choices are to be presented in the UX. Must be one of checkBoxes, dropDownMenu, or radioButtons
     */
    private ?string $displayAs;


    public function getAllowTextEntry(): ?bool
    {
        return $this->allowTextEntry;
    }

    public function setAllowTextEntry(?bool $allowTextEntry): self
    {
        $this->allowTextEntry = $allowTextEntry;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getChoices(): array
    {
        return $this->choices;
    }

    /**
     * @param string[] $choices
     */
    public function setChoices(array $choices): self
    {
        $this->choices = $choices;
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
