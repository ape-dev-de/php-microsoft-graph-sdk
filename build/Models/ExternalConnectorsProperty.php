<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsProperty
 */
class ExternalConnectorsProperty
{
    /**
     * A set of aliases or a friendly name for the property. Maximum 32 characters. Only alphanumeric characters allowed. For example, each string may not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &, ?, @, #, /, ~, '', '', <, >, `, ^. Optional.
     * @var string[]
     */
    private array $aliases = [];

    /**
     * Specifies if the property is queryable. Queryable properties can be used in Keyword Query Language (KQL) queries. Optional.
     */
    private ?bool $isQueryable;

    /**
     * Specifies if the property is refinable.  Refinable properties can be used to filter search results in the Search API and add a refiner control in the Microsoft Search user experience. Optional.
     */
    private ?bool $isRefinable;

    /**
     * Specifies if the property is retrievable. Retrievable properties are returned in the result set when items are returned by the search API. Retrievable properties are also available to add to the display template used to render search results. Optional.
     */
    private ?bool $isRetrievable;

    /**
     * Specifies if the property is searchable. Only properties of type String or StringCollection can be searchable. Nonsearchable properties aren't added to the search index. Optional.
     */
    private ?bool $isSearchable;

    /**
     * Specifies one or more well-known tags added against a property. Labels help Microsoft Search understand the semantics of the data in the connection. Adding appropriate labels would result in an enhanced search experience (for example, better relevance). Optional.The possible values are: title, url, createdBy, lastModifiedBy, authors, createdDateTime, lastModifiedDateTime, fileName, fileExtension, unknownFutureValue, iconUrl. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: iconUrl.
     */
    private array $labels = [];

    /**
     * The name of the property. Maximum 32 characters. Only alphanumeric characters allowed. For example, each string may not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &, ?, @, #, /, ~, '', '', <, >, `, ^.  Required.
     */
    private ?string $name;

    /**
     */
    private ?string $type;


    /**
     * @return string[]
     */
    public function getAliases(): array
    {
        return $this->aliases;
    }

    /**
     * @param string[] $aliases
     */
    public function setAliases(array $aliases): self
    {
        $this->aliases = $aliases;
        return $this;
    }

    public function getIsQueryable(): ?bool
    {
        return $this->isQueryable;
    }

    public function setIsQueryable(?bool $isQueryable): self
    {
        $this->isQueryable = $isQueryable;
        return $this;
    }

    public function getIsRefinable(): ?bool
    {
        return $this->isRefinable;
    }

    public function setIsRefinable(?bool $isRefinable): self
    {
        $this->isRefinable = $isRefinable;
        return $this;
    }

    public function getIsRetrievable(): ?bool
    {
        return $this->isRetrievable;
    }

    public function setIsRetrievable(?bool $isRetrievable): self
    {
        $this->isRetrievable = $isRetrievable;
        return $this;
    }

    public function getIsSearchable(): ?bool
    {
        return $this->isSearchable;
    }

    public function setIsSearchable(?bool $isSearchable): self
    {
        $this->isSearchable = $isSearchable;
        return $this;
    }

    public function getLabels(): array
    {
        return $this->labels;
    }

    public function setLabels(array $labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
