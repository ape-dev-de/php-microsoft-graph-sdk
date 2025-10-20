<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsExternalItem
 */
class ExternalConnectorsExternalItem
{
    /**
     * An array of access control entries. Each entry specifies the access granted to a user or group. Required.
     */
    private array $acl = [];

    /**
     * A plain-text  representation of the contents of the item. The text in this property is full-text indexed. Optional.
     */
    private ?string $content;

    /**
     * A property bag with the properties of the item. The properties MUST conform to the schema defined for the externalConnection. Required.
     */
    private ?string $anyOf;

    public function getAcl(): array
    {
        return $this->acl;
    }

    public function setAcl(array $acl): self
    {
        $this->acl = $acl;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    public function getAnyOf(): ?string
    {
        return $this->anyOf;
    }

    public function setAnyOf(?string $anyOf): self
    {
        $this->anyOf = $anyOf;
        return $this;
    }

}
