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
     */
    private ?string $fields;

    /**
     * Defines a maximum limit count for this field. This numeric value must be a positive integer. Required.
     */
    private ?string $limit;

    public function getFields(): ?string
    {
        return $this->fields;
    }

    public function setFields(?string $fields): self
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
