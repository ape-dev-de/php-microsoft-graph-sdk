<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationAttributeCollectionInputConfiguration
 */
class AuthenticationAttributeCollectionInputConfiguration
{
    /**
     * The built-in or custom attribute for which a value is being collected.
     */
    private ?string $attribute;

    /**
     * The default value of the attribute displayed to the end user. The capability to set the default value isn't available through the Microsoft Entra admin center.
     */
    private ?string $defaultValue;

    /**
     * Defines whether the attribute is editable by the end user.
     */
    private ?bool $editable;

    /**
     * Defines whether the attribute is displayed to the end user. The capability to hide isn't available through the Microsoft Entra admin center.
     */
    private ?bool $hidden;

    /**
     */
    private ?string $inputType;

    /**
     * The label of the attribute field that''s displayed to end user, unless overridden.
     */
    private ?string $label;

    /**
     * The option values for certain multiple-option input types.
     */
    private array $options = [];

    /**
     * Defines whether the field is required.
     */
    private ?bool $required;

    /**
     * The regex for the value of the field. For more information about the supported regexes, see validationRegEx values for inputType objects. To understand how to specify regexes, see the Regular expressions cheat sheet.
     */
    private ?string $validationRegEx;

    /**
     * Defines whether Microsoft Entra ID stores the value that it collects.
     */
    private ?string $writeToDirectory;


    public function getAttribute(): ?string
    {
        return $this->attribute;
    }

    public function setAttribute(?string $attribute): self
    {
        $this->attribute = $attribute;
        return $this;
    }

    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }

    public function setDefaultValue(?string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    public function getEditable(): ?bool
    {
        return $this->editable;
    }

    public function setEditable(?bool $editable): self
    {
        $this->editable = $editable;
        return $this;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(?bool $hidden): self
    {
        $this->hidden = $hidden;
        return $this;
    }

    public function getInputType(): ?string
    {
        return $this->inputType;
    }

    public function setInputType(?string $inputType): self
    {
        $this->inputType = $inputType;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function setOptions(array $options): self
    {
        $this->options = $options;
        return $this;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(?bool $required): self
    {
        $this->required = $required;
        return $this;
    }

    public function getValidationRegEx(): ?string
    {
        return $this->validationRegEx;
    }

    public function setValidationRegEx(?string $validationRegEx): self
    {
        $this->validationRegEx = $validationRegEx;
        return $this;
    }

    public function getWriteToDirectory(): ?string
    {
        return $this->writeToDirectory;
    }

    public function setWriteToDirectory(?string $writeToDirectory): self
    {
        $this->writeToDirectory = $writeToDirectory;
        return $this;
    }

}
