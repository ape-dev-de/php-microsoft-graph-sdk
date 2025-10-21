<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MacOSMinimumOperatingSystem
 */
class MacOSMinimumOperatingSystem
{
    /**
     * When TRUE, indicates OS X 10.10 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v10_10;

    /**
     * When TRUE, indicates OS X 10.11 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v10_11;

    /**
     * When TRUE, indicates macOS 10.12 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v10_12;

    /**
     * When TRUE, indicates macOS 10.13 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v10_13;

    /**
     * When TRUE, indicates macOS 10.14 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v10_14;

    /**
     * When TRUE, indicates macOS 10.15 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v10_15;

    /**
     * When TRUE, indicates Mac OS X 10.7 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v10_7;

    /**
     * When TRUE, indicates OS X 10.8 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v10_8;

    /**
     * When TRUE, indicates OS X 10.9 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v10_9;

    /**
     * When TRUE, indicates macOS 11.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v11_0;

    /**
     * When TRUE, indicates macOS 12.0 or later is required to install the app. When FALSE, indicates some other OS version is the minimum OS to install the app. Default value is FALSE.
     */
    private ?bool $v12_0;

    /**
     * The minimum operating system required for a macOS app.
     */
    private ?string $v13_0;


    public function getV10_10(): ?bool
    {
        return $this->v10_10;
    }

    public function setV10_10(?bool $v10_10): self
    {
        $this->v10_10 = $v10_10;
        return $this;
    }

    public function getV10_11(): ?bool
    {
        return $this->v10_11;
    }

    public function setV10_11(?bool $v10_11): self
    {
        $this->v10_11 = $v10_11;
        return $this;
    }

    public function getV10_12(): ?bool
    {
        return $this->v10_12;
    }

    public function setV10_12(?bool $v10_12): self
    {
        $this->v10_12 = $v10_12;
        return $this;
    }

    public function getV10_13(): ?bool
    {
        return $this->v10_13;
    }

    public function setV10_13(?bool $v10_13): self
    {
        $this->v10_13 = $v10_13;
        return $this;
    }

    public function getV10_14(): ?bool
    {
        return $this->v10_14;
    }

    public function setV10_14(?bool $v10_14): self
    {
        $this->v10_14 = $v10_14;
        return $this;
    }

    public function getV10_15(): ?bool
    {
        return $this->v10_15;
    }

    public function setV10_15(?bool $v10_15): self
    {
        $this->v10_15 = $v10_15;
        return $this;
    }

    public function getV10_7(): ?bool
    {
        return $this->v10_7;
    }

    public function setV10_7(?bool $v10_7): self
    {
        $this->v10_7 = $v10_7;
        return $this;
    }

    public function getV10_8(): ?bool
    {
        return $this->v10_8;
    }

    public function setV10_8(?bool $v10_8): self
    {
        $this->v10_8 = $v10_8;
        return $this;
    }

    public function getV10_9(): ?bool
    {
        return $this->v10_9;
    }

    public function setV10_9(?bool $v10_9): self
    {
        $this->v10_9 = $v10_9;
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

    public function getV13_0(): ?string
    {
        return $this->v13_0;
    }

    public function setV13_0(?string $v13_0): self
    {
        $this->v13_0 = $v13_0;
        return $this;
    }

}
