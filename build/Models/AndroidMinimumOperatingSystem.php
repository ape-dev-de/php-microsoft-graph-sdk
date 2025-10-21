<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidMinimumOperatingSystem
 */
class AndroidMinimumOperatingSystem
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
     * When TRUE, only Version 4.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v4_0;

    /**
     * When TRUE, only Version 4.0.3 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v4_0_3;

    /**
     * When TRUE, only Version 4.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v4_1;

    /**
     * When TRUE, only Version 4.2 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v4_2;

    /**
     * When TRUE, only Version 4.3 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v4_3;

    /**
     * When TRUE, only Version 4.4 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v4_4;

    /**
     * When TRUE, only Version 5.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v5_0;

    /**
     * When TRUE, only Version 5.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v5_1;

    /**
     * When TRUE, only Version 6.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v6_0;

    /**
     * When TRUE, only Version 7.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v7_0;

    /**
     * When TRUE, only Version 7.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v7_1;

    /**
     * When TRUE, only Version 8.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v8_0;

    /**
     * When TRUE, only Version 8.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE.
     */
    private ?bool $v8_1;

    /**
     * Contains properties for the minimum operating system required for an Android mobile app.
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

    public function getV4_0(): ?bool
    {
        return $this->v4_0;
    }

    public function setV4_0(?bool $v4_0): self
    {
        $this->v4_0 = $v4_0;
        return $this;
    }

    public function getV4_0_3(): ?bool
    {
        return $this->v4_0_3;
    }

    public function setV4_0_3(?bool $v4_0_3): self
    {
        $this->v4_0_3 = $v4_0_3;
        return $this;
    }

    public function getV4_1(): ?bool
    {
        return $this->v4_1;
    }

    public function setV4_1(?bool $v4_1): self
    {
        $this->v4_1 = $v4_1;
        return $this;
    }

    public function getV4_2(): ?bool
    {
        return $this->v4_2;
    }

    public function setV4_2(?bool $v4_2): self
    {
        $this->v4_2 = $v4_2;
        return $this;
    }

    public function getV4_3(): ?bool
    {
        return $this->v4_3;
    }

    public function setV4_3(?bool $v4_3): self
    {
        $this->v4_3 = $v4_3;
        return $this;
    }

    public function getV4_4(): ?bool
    {
        return $this->v4_4;
    }

    public function setV4_4(?bool $v4_4): self
    {
        $this->v4_4 = $v4_4;
        return $this;
    }

    public function getV5_0(): ?bool
    {
        return $this->v5_0;
    }

    public function setV5_0(?bool $v5_0): self
    {
        $this->v5_0 = $v5_0;
        return $this;
    }

    public function getV5_1(): ?bool
    {
        return $this->v5_1;
    }

    public function setV5_1(?bool $v5_1): self
    {
        $this->v5_1 = $v5_1;
        return $this;
    }

    public function getV6_0(): ?bool
    {
        return $this->v6_0;
    }

    public function setV6_0(?bool $v6_0): self
    {
        $this->v6_0 = $v6_0;
        return $this;
    }

    public function getV7_0(): ?bool
    {
        return $this->v7_0;
    }

    public function setV7_0(?bool $v7_0): self
    {
        $this->v7_0 = $v7_0;
        return $this;
    }

    public function getV7_1(): ?bool
    {
        return $this->v7_1;
    }

    public function setV7_1(?bool $v7_1): self
    {
        $this->v7_1 = $v7_1;
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

    public function getV8_1(): ?bool
    {
        return $this->v8_1;
    }

    public function setV8_1(?bool $v8_1): self
    {
        $this->v8_1 = $v8_1;
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
