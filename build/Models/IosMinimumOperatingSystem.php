<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosMinimumOperatingSystem
 */
class IosMinimumOperatingSystem
{
    /**
     * When TRUE, only Version 10.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v10_0;

    /**
     * When TRUE, only Version 11.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v11_0;

    /**
     * When TRUE, only Version 12.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v12_0;

    /**
     * When TRUE, only Version 13.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v13_0;

    /**
     * When TRUE, only Version 14.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v14_0;

    /**
     * When TRUE, only Version 15.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v15_0;

    /**
     * When TRUE, only Version 8.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v8_0;

    /**
     * Contains properties of the minimum operating system required for an iOS mobile app.
     */
    private ?string $v9_0;


    public function getV10_0(): ?bool
    {
        return $this->v10_0;
    }

    public function setV10_0(?bool $v10_0): self
    {
        $this->v10_0 = $v10_0;
        return $this;
    }

    public function getV11_0(): ?bool
    {
        return $this->v11_0;
    }

    public function setV11_0(?bool $v11_0): self
    {
        $this->v11_0 = $v11_0;
        return $this;
    }

    public function getV12_0(): ?bool
    {
        return $this->v12_0;
    }

    public function setV12_0(?bool $v12_0): self
    {
        $this->v12_0 = $v12_0;
        return $this;
    }

    public function getV13_0(): ?bool
    {
        return $this->v13_0;
    }

    public function setV13_0(?bool $v13_0): self
    {
        $this->v13_0 = $v13_0;
        return $this;
    }

    public function getV14_0(): ?bool
    {
        return $this->v14_0;
    }

    public function setV14_0(?bool $v14_0): self
    {
        $this->v14_0 = $v14_0;
        return $this;
    }

    public function getV15_0(): ?bool
    {
        return $this->v15_0;
    }

    public function setV15_0(?bool $v15_0): self
    {
        $this->v15_0 = $v15_0;
        return $this;
    }

    public function getV8_0(): ?bool
    {
        return $this->v8_0;
    }

    public function setV8_0(?bool $v8_0): self
    {
        $this->v8_0 = $v8_0;
        return $this;
    }

    public function getV9_0(): ?string
    {
        return $this->v9_0;
    }

    public function setV9_0(?string $v9_0): self
    {
        $this->v9_0 = $v9_0;
        return $this;
    }

}
