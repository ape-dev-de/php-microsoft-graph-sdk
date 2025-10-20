<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchRequest
 */
class SearchRequest
{
    /**
     * Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format ''{field}:/''{aggregationFilterToken}/''''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format ''{field}:or(/''{aggregationFilterToken1}/'',/''{aggregationFilterToken2}/'')''. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses.
     */
    private ?string $aggregationFilters;

    /**
     * Specifies aggregations (also known as refiners) to be returned alongside search results. Optional.
     */
    private array $aggregations = [];

    /**
     * Contains the ordered collection of fields and limit to collapse results. Optional.
     */
    private array $collapseProperties = [];

    /**
     * Contains the connection to be targeted.
     */
    private ?string $contentSources;

    /**
     * This triggers hybrid sort for messages : the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional.
     */
    private ?bool $enableTopResults;

    /**
     * One or more types of resources expected in the response. Possible values are: event, message, driveItem, externalItem, site, list, listItem, drive, chatMessage, person, acronym, bookmark.  Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: chatMessage, person, acronym, bookmark. See known limitations for those combinations of two or more entity types that are supported in the same search request. Required.
     */
    private array $entityTypes = [];

    /**
     * Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default; otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from the content that Microsoft 365 Copilot connectors bring in. The fields property can use the semantic labels applied to properties. For example, if a property is labeled as title, you can retrieve it using the following syntax: label_title. Optional.
     */
    private ?string $fields;

    /**
     * Specifies the offset for the search results. Offset 0 returns the very first result. Optional.
     */
    private ?float $from;

    /**
     */
    private ?string $query;

    /**
     * Query alteration options formatted in a JSON blob that contains two optional flags related to spelling correction. Optional.
     */
    private ?string $queryAlterationOptions;

    /**
     * The geographic location for the search. Required for searches that use application permissions. For details, see Get the region value.
     */
    private ?string $region;

    /**
     * Provides the search result template options to render search results from connectors.
     */
    private ?string $resultTemplateOptions;

    /**
     * Indicates the kind of contents to be searched when a search is performed using application permissions. Optional.
     */
    private ?string $sharePointOneDriveOptions;

    /**
     * The size of the page to be retrieved. The maximum value is 500. Optional.
     */
    private ?float $size;

    /**
     * Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional.
     */
    private ?string $sortProperties;

    public function getAggregationFilters(): ?string
    {
        return $this->aggregationFilters;
    }

    public function setAggregationFilters(?string $aggregationFilters): self
    {
        $this->aggregationFilters = $aggregationFilters;
        return $this;
    }

    public function getAggregations(): array
    {
        return $this->aggregations;
    }

    public function setAggregations(array $aggregations): self
    {
        $this->aggregations = $aggregations;
        return $this;
    }

    public function getCollapseProperties(): array
    {
        return $this->collapseProperties;
    }

    public function setCollapseProperties(array $collapseProperties): self
    {
        $this->collapseProperties = $collapseProperties;
        return $this;
    }

    public function getContentSources(): ?string
    {
        return $this->contentSources;
    }

    public function setContentSources(?string $contentSources): self
    {
        $this->contentSources = $contentSources;
        return $this;
    }

    public function getEnableTopResults(): ?bool
    {
        return $this->enableTopResults;
    }

    public function setEnableTopResults(?bool $enableTopResults): self
    {
        $this->enableTopResults = $enableTopResults;
        return $this;
    }

    public function getEntityTypes(): array
    {
        return $this->entityTypes;
    }

    public function setEntityTypes(array $entityTypes): self
    {
        $this->entityTypes = $entityTypes;
        return $this;
    }

    public function getFields(): ?string
    {
        return $this->fields;
    }

    public function setFields(?string $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function getFrom(): ?float
    {
        return $this->from;
    }

    public function setFrom(?float $from): self
    {
        $this->from = $from;
        return $this;
    }

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(?string $query): self
    {
        $this->query = $query;
        return $this;
    }

    public function getQueryAlterationOptions(): ?string
    {
        return $this->queryAlterationOptions;
    }

    public function setQueryAlterationOptions(?string $queryAlterationOptions): self
    {
        $this->queryAlterationOptions = $queryAlterationOptions;
        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }

    public function getResultTemplateOptions(): ?string
    {
        return $this->resultTemplateOptions;
    }

    public function setResultTemplateOptions(?string $resultTemplateOptions): self
    {
        $this->resultTemplateOptions = $resultTemplateOptions;
        return $this;
    }

    public function getSharePointOneDriveOptions(): ?string
    {
        return $this->sharePointOneDriveOptions;
    }

    public function setSharePointOneDriveOptions(?string $sharePointOneDriveOptions): self
    {
        $this->sharePointOneDriveOptions = $sharePointOneDriveOptions;
        return $this;
    }

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(?float $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function getSortProperties(): ?string
    {
        return $this->sortProperties;
    }

    public function setSortProperties(?string $sortProperties): self
    {
        $this->sortProperties = $sortProperties;
        return $this;
    }

}
