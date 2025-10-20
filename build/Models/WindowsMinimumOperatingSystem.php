<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsMinimumOperatingSystem
 */
class WindowsMinimumOperatingSystem
{
    /**
     * Windows version 10.0 or later.
     */
    private ?bool $v10_0;

    /**
     * Windows version 8.0 or later.
     */
    private ?bool $v8_0;

    /**
     * The minimum operating system required for a Windows mobile app.
     */
    private ?string $v8_1;

    public function getV10_0(): ?bool
    {
        return $this->v10_0;
    }

    public function setV10_0(?bool $v10_0): self
    {
        $this->v10_0 = $v10_0;
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

    public function getV8_1(): ?string
    {
        return $this->v8_1;
    }

    public function setV8_1(?string $v8_1): self
    {
        $this->v8_1 = $v8_1;
        return $this;
    }

}
