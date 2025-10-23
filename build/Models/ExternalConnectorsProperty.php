<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsProperty
 */
class ExternalConnectorsProperty
{
    /** 
     * A set of aliases or a friendly name for the property. Maximum 32 characters. Only alphanumeric characters allowed. For example, each string may not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &, ?, @, #, /, ~, ', ', <, >, `, ^. Optional.
     * @var string[]
     */
    public array $aliases = [];

    /** Specifies if the property is queryable. Queryable properties can be used in Keyword Query Language (KQL) queries. Optional. */
    public ?bool $isQueryable = null;

    /** Specifies if the property is refinable.  Refinable properties can be used to filter search results in the Search API and add a refiner control in the Microsoft Search user experience. Optional. */
    public ?bool $isRefinable = null;

    /** Specifies if the property is retrievable. Retrievable properties are returned in the result set when items are returned by the search API. Retrievable properties are also available to add to the display template used to render search results. Optional. */
    public ?bool $isRetrievable = null;

    /** Specifies if the property is searchable. Only properties of type String or StringCollection can be searchable. Nonsearchable properties aren't added to the search index. Optional. */
    public ?bool $isSearchable = null;

    /** 
     * Specifies one or more well-known tags added against a property. Labels help Microsoft Search understand the semantics of the data in the connection. Adding appropriate labels would result in an enhanced search experience (for example, better relevance). Optional.The possible values are: title, url, createdBy, lastModifiedBy, authors, createdDateTime, lastModifiedDateTime, fileName, fileExtension, unknownFutureValue, iconUrl. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: iconUrl.
     * @var ExternalConnectorsLabel[]
     */
    public array $labels = [];

    /** The name of the property. Maximum 32 characters. Only alphanumeric characters allowed. For example, each string may not contain control characters, whitespace, or any of the following: :, ;, ,, (, ), [, ], {, }, %, $, +, !, *, =, &, ?, @, #, /, ~, ', ', <, >, `, ^.  Required. */
    public ?string $name = null;

    /**  */
    public ?ExternalConnectorsPropertyType $type = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['aliases'])) {
            $this->aliases = $data['aliases'];
        }
        if (isset($data['isQueryable'])) {
            $this->isQueryable = $data['isQueryable'];
        }
        if (isset($data['isRefinable'])) {
            $this->isRefinable = $data['isRefinable'];
        }
        if (isset($data['isRetrievable'])) {
            $this->isRetrievable = $data['isRetrievable'];
        }
        if (isset($data['isSearchable'])) {
            $this->isSearchable = $data['isSearchable'];
        }
        if (isset($data['labels'])) {
            $this->labels = $data['labels'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['type'])) {
            $this->type = is_array($data['type']) ? new ExternalConnectorsPropertyType($data['type']) : $data['type'];
        }
    }
}
