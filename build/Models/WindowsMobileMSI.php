<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsMobileMSI
 */
class WindowsMobileMSI
{
    /**
     * The command line.
     */
    private ?string $commandLine;

    /**
     * A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for Windows Mobile MSI Line of Business (LoB) apps that use a self update feature.
     */
    private ?bool $ignoreVersionDetection;

    /**
     * The product code.
     */
    private ?string $productCode;

    /**
     * Contains properties and inherited properties for Windows Mobile MSI Line Of Business apps.
     */
    private ?string $productVersion;


    public function getCommandLine(): ?string
    {
        return $this->commandLine;
    }

    public function setCommandLine(?string $commandLine): self
    {
        $this->commandLine = $commandLine;
        return $this;
    }

    public function getIgnoreVersionDetection(): ?bool
    {
        return $this->ignoreVersionDetection;
    }

    public function setIgnoreVersionDetection(?bool $ignoreVersionDetection): self
    {
        $this->ignoreVersionDetection = $ignoreVersionDetection;
        return $this;
    }

    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function getProductVersion(): ?string
    {
        return $this->productVersion;
    }

    public function setProductVersion(?string $productVersion): self
    {
        $this->productVersion = $productVersion;
        return $this;
    }

}
