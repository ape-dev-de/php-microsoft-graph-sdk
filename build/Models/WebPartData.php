<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WebPartData
 */
class WebPartData
{
    /**
     * Data version of the web part. The value is defined by the web part developer. Different dataVersions usually refers to a different property structure.
     */
    private ?string $dataVersion;

    /**
     * Properties bag of the web part.
     */
    private ?string $description;


    public function getDataVersion(): ?string
    {
        return $this->dataVersion;
    }

    public function setDataVersion(?string $dataVersion): self
    {
        $this->dataVersion = $dataVersion;
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

}
