<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingValue
 */
class SettingValue
{
    /**
     * Name of the setting (as defined by the groupSettingTemplate).
     */
    private ?string $name;

    /**
     * Value of the setting.
     */
    private ?string $value;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
