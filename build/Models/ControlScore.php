<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ControlScore
 */
class ControlScore
{
    /**
     * Control action category (Identity, Data, Device, Apps, Infrastructure).
     */
    private ?string $controlCategory;

    /**
     * Control unique name.
     */
    private ?string $controlName;

    /**
     * Description of the control.
     */
    private ?string $description;

    /**
     * Tenant achieved score for the control (it varies day by day depending on tenant operations on the control).
     */
    private ?string $score;


    public function getControlCategory(): ?string
    {
        return $this->controlCategory;
    }

    public function setControlCategory(?string $controlCategory): self
    {
        $this->controlCategory = $controlCategory;
        return $this;
    }

    public function getControlName(): ?string
    {
        return $this->controlName;
    }

    public function setControlName(?string $controlName): self
    {
        $this->controlName = $controlName;
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

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(?string $score): self
    {
        $this->score = $score;
        return $this;
    }

}
