<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListItemVersion
 */
class ListItemVersion
{
    /**
     * A collection of the fields and values for this version of the list item.
     */
    private ?string $fields;

    public function getFields(): ?string
    {
        return $this->fields;
    }

    public function setFields(?string $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

}
