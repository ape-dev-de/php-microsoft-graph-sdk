<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessPlatforms
 */
class ConditionalAccessPlatforms
{
    /**
     * Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     */
    private array $excludePlatforms = [];

    /**
     * Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     */
    private ?string $includePlatforms;

    public function getExcludePlatforms(): array
    {
        return $this->excludePlatforms;
    }

    public function setExcludePlatforms(array $excludePlatforms): self
    {
        $this->excludePlatforms = $excludePlatforms;
        return $this;
    }

    public function getIncludePlatforms(): ?string
    {
        return $this->includePlatforms;
    }

    public function setIncludePlatforms(?string $includePlatforms): self
    {
        $this->includePlatforms = $includePlatforms;
        return $this;
    }

}
