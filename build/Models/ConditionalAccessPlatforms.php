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
     * @var string[]
     */
    private array $includePlatforms = [];


    public function getExcludePlatforms(): array
    {
        return $this->excludePlatforms;
    }

    public function setExcludePlatforms(array $excludePlatforms): self
    {
        $this->excludePlatforms = $excludePlatforms;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getIncludePlatforms(): array
    {
        return $this->includePlatforms;
    }

    /**
     * @param string[] $includePlatforms
     */
    public function setIncludePlatforms(array $includePlatforms): self
    {
        $this->includePlatforms = $includePlatforms;
        return $this;
    }

}
