<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CanvasLayout
 */
class CanvasLayout
{
    /**
     * Collection of horizontal sections on the SharePoint page.
     */
    private array $horizontalSections = [];

    /**
     * Vertical section on the SharePoint page.
     */
    private ?string $verticalSection;

    public function getHorizontalSections(): array
    {
        return $this->horizontalSections;
    }

    public function setHorizontalSections(array $horizontalSections): self
    {
        $this->horizontalSections = $horizontalSections;
        return $this;
    }

    public function getVerticalSection(): ?string
    {
        return $this->verticalSection;
    }

    public function setVerticalSection(?string $verticalSection): self
    {
        $this->verticalSection = $verticalSection;
        return $this;
    }

}
