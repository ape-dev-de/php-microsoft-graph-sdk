<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CollapseProperty
 */
class CollapseProperty
{
    /**
     * Defines the collapse group to trim results. The properties in this collection must be sortable/refinable properties. Required.
     * @var string[]
     */
    private array $fields = [];

    /**
     * Defines a maximum limit count for this field. This numeric value must be a positive integer. Required.
     */
    private ?string $limit;


    /**
     * @return string[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * @param string[] $fields
     */
    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function getLimit(): ?string
    {
        return $this->limit;
    }

    public function setLimit(?string $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

}
