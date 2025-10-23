<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchHit
 */
class SearchHit
{
    /** The name of the content source that the externalItem is part of. */
    public ?string $contentSource = null;

    /** The internal identifier for the item. The format of the identifier varies based on the entity type. For details, see hitId format. */
    public ?string $hitId = null;

    /** Indicates whether the current result is collapsed when the collapseProperties property in the searchRequest is used. */
    public ?bool $isCollapsed = null;

    /** The rank or the order of the result. */
    public ?float $rank = null;

    /** ID of the result template used to render the search result. This ID must map to a display layout in the resultTemplates dictionary that is also included in the searchResponse. */
    public ?string $resultTemplateId = null;

    /** A summary of the result, if a summary is available. */
    public ?string $summary = null;

    /** 
     * 
     * @var Entity|\stdClass|null
     */
    public mixed $resource = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['contentSource'])) {
            $this->contentSource = $data['contentSource'];
        }
        if (isset($data['hitId'])) {
            $this->hitId = $data['hitId'];
        }
        if (isset($data['isCollapsed'])) {
            $this->isCollapsed = $data['isCollapsed'];
        }
        if (isset($data['rank'])) {
            $this->rank = $data['rank'];
        }
        if (isset($data['resultTemplateId'])) {
            $this->resultTemplateId = $data['resultTemplateId'];
        }
        if (isset($data['summary'])) {
            $this->summary = $data['summary'];
        }
        if (isset($data['resource'])) {
            $this->resource = is_array($data['resource']) ? new Entity($data['resource']) : $data['resource'];
        }
    }
}
