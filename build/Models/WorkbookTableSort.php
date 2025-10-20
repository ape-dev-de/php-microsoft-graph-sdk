<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkbookTableSort
 */
class WorkbookTableSort
{
    /**
     * The list of the current conditions last used to sort the table. Read-only.
     */
    private array $fields = [];

    /**
     * Indicates whether the casing impacted the last sort of the table. Read-only.
     */
    private ?bool $matchCase;

    /**
     * The Chinese character ordering method last used to sort the table. The possible values are: PinYin, StrokeCount. Read-only.
     */
    private ?string $method;

    public function getFields(): array
    {
        return $this->fields;
    }

    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function getMatchCase(): ?bool
    {
        return $this->matchCase;
    }

    public function setMatchCase(?bool $matchCase): self
    {
        $this->matchCase = $matchCase;
        return $this;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(?string $method): self
    {
        $this->method = $method;
        return $this;
    }

}
