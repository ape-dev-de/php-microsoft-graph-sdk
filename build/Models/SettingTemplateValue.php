<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingTemplateValue
 */
class SettingTemplateValue
{
    /**
     * Default value for the setting.
     */
    private ?string $defaultValue;

    /**
     * Description of the setting.
     */
    private ?string $description;

    /**
     * Name of the setting.
     */
    private ?string $name;

    /**
     * Type of the setting.
     */
    private ?string $type;


    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }

    public function setDefaultValue(?string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
