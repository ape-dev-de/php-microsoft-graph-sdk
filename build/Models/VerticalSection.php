<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VerticalSection
 */
class VerticalSection
{
    /**
     * Enumeration value that indicates the emphasis of the section background. The possible values are: none, netural, soft, strong, unknownFutureValue.
     */
    private ?string $emphasis;

    /**
     * The set of web parts in this section.
     * @var string[]
     */
    private array $webparts = [];


    public function getEmphasis(): ?string
    {
        return $this->emphasis;
    }

    public function setEmphasis(?string $emphasis): self
    {
        $this->emphasis = $emphasis;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getWebparts(): array
    {
        return $this->webparts;
    }

    /**
     * @param string[] $webparts
     */
    public function setWebparts(array $webparts): self
    {
        $this->webparts = $webparts;
        return $this;
    }

}
