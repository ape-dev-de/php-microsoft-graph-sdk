<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSettingStringXml
 */
class OmaSettingStringXml
{
    /**
     * File name associated with the Value property (.xml).
     */
    private ?string $fileName;

    /**
     * OMA Settings StringXML definition.
     */
    private ?string $value;


    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;
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
