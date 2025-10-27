<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchRequest
 */
class SearchRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Contains one or more filters to obtain search results aggregated and filtered to a specific value of a field. Optional.Build this filter based on a prior search that aggregates by the same field. From the response of the prior search, identify the searchBucket that filters results to the specific value of the field, use the string in its aggregationFilterToken property, and build an aggregation filter string in the format '{field}:/'{aggregationFilterToken}/''. If multiple values for the same field need to be provided, use the strings in its aggregationFilterToken property and build an aggregation filter string in the format '{field}:or(/'{aggregationFilterToken1}/',/'{aggregationFilterToken2}/')'. For example, searching and aggregating drive items by file type returns a searchBucket for the file type docx in the response. You can conveniently use the aggregationFilterToken returned for this searchBucket in a subsequent search query and filter matches down to drive items of the docx file type. Example 1 and example 2 show the actual requests and responses.
     * @var string[]
     */
    public array $aggregationFilters = [];

    /** 
     * Specifies aggregations (also known as refiners) to be returned alongside search results. Optional.
     * @var AggregationOption[]
     */
    public array $aggregations = [];

    /** 
     * Contains the ordered collection of fields and limit to collapse results. Optional.
     * @var CollapseProperty[]
     */
    public array $collapseProperties = [];

    /** 
     * Contains the connection to be targeted.
     * @var string[]
     */
    public array $contentSources = [];

    /** This triggers hybrid sort for messages : the first 3 messages are the most relevant. This property is only applicable to entityType=message. Optional. */
    public ?bool $enableTopResults = null;

    /** 
     * One or more types of resources expected in the response. Possible values are: event, message, driveItem, externalItem, site, list, listItem, drive, chatMessage, person, acronym, bookmark.  Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: chatMessage, person, acronym, bookmark. See known limitations for those combinations of two or more entity types that are supported in the same search request. Required.
     * @var EntityType[]
     */
    public array $entityTypes = [];

    /** 
     * Contains the fields to be returned for each resource object specified in entityTypes, allowing customization of the fields returned by default; otherwise, including additional fields such as custom managed properties from SharePoint and OneDrive, or custom fields in externalItem from the content that Microsoft 365 Copilot connectors bring in. The fields property can use the semantic labels applied to properties. For example, if a property is labeled as title, you can retrieve it using the following syntax: label_title. Optional.
     * @var string[]
     */
    public array $fields = [];

    /** Specifies the offset for the search results. Offset 0 returns the very first result. Optional. */
    public ?float $from = null;

    /**  */
    public ?SearchQuery $query = null;

    /** 
     * Query alteration options formatted in a JSON blob that contains two optional flags related to spelling correction. Optional.
     * @var SearchAlterationOptions|\stdClass|null
     */
    public SearchAlterationOptions|\stdClass|null $queryAlterationOptions = null;

    /** The geographic location for the search. Required for searches that use application permissions. For details, see Get the region value. */
    public ?string $region = null;

    /** 
     * Provides the search result template options to render search results from connectors.
     * @var ResultTemplateOption|\stdClass|null
     */
    public ResultTemplateOption|\stdClass|null $resultTemplateOptions = null;

    /** 
     * Indicates the kind of contents to be searched when a search is performed using application permissions. Optional.
     * @var SharePointOneDriveOptions|\stdClass|null
     */
    public SharePointOneDriveOptions|\stdClass|null $sharePointOneDriveOptions = null;

    /** The size of the page to be retrieved. The maximum value is 500. Optional. */
    public ?float $size = null;

    /** 
     * Contains the ordered collection of fields and direction to sort results. There can be at most 5 sort properties in the collection. Optional.
     * @var SortProperty[]
     */
    public array $sortProperties = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['aggregationFilters'])) {
            $this->aggregationFilters = $data['aggregationFilters'];
        }
        if (isset($data['aggregations'])) {
            $this->aggregations = $data['aggregations'];
        }
        if (isset($data['collapseProperties'])) {
            $this->collapseProperties = $data['collapseProperties'];
        }
        if (isset($data['contentSources'])) {
            $this->contentSources = $data['contentSources'];
        }
        if (isset($data['enableTopResults'])) {
            $this->enableTopResults = is_bool($data['enableTopResults']) ? $data['enableTopResults'] : (bool)$data['enableTopResults'];
        }
        if (isset($data['entityTypes'])) {
            $this->entityTypes = $data['entityTypes'];
        }
        if (isset($data['fields'])) {
            $this->fields = $data['fields'];
        }
        if (isset($data['from'])) {
            $this->from = is_numeric($data['from']) ? (float)$data['from'] : $data['from'];
        }
        if (isset($data['query'])) {
            $this->query = is_array($data['query']) ? new SearchQuery($data['query']) : $data['query'];
        }
        if (isset($data['queryAlterationOptions'])) {
            $this->queryAlterationOptions = is_array($data['queryAlterationOptions']) ? new SearchAlterationOptions($data['queryAlterationOptions']) : $data['queryAlterationOptions'];
        }
        if (isset($data['region'])) {
            $this->region = $data['region'];
        }
        if (isset($data['resultTemplateOptions'])) {
            $this->resultTemplateOptions = is_array($data['resultTemplateOptions']) ? new ResultTemplateOption($data['resultTemplateOptions']) : $data['resultTemplateOptions'];
        }
        if (isset($data['sharePointOneDriveOptions'])) {
            $this->sharePointOneDriveOptions = is_array($data['sharePointOneDriveOptions']) ? new SharePointOneDriveOptions($data['sharePointOneDriveOptions']) : $data['sharePointOneDriveOptions'];
        }
        if (isset($data['size'])) {
            $this->size = is_numeric($data['size']) ? (float)$data['size'] : $data['size'];
        }
        if (isset($data['sortProperties'])) {
            $this->sortProperties = $data['sortProperties'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
