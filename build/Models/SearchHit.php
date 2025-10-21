<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchHit
 */
class SearchHit
{
    public function __construct(
        /** The name of the content source that the externalItem is part of. */
        public ?string $contentSource = null,
        /** The internal identifier for the item. The format of the identifier varies based on the entity type. For details, see hitId format. */
        public ?string $hitId = null,
        /** Indicates whether the current result is collapsed when the collapseProperties property in the searchRequest is used. */
        public ?bool $isCollapsed = null,
        /** The rank or the order of the result. */
        public ?float $rank = null,
        /** ID of the result template used to render the search result. This ID must map to a display layout in the resultTemplates dictionary that is also included in the searchResponse. */
        public ?string $resultTemplateId = null,
        /** A summary of the result, if a summary is available. */
        public ?string $summary = null,
        /**  */
        public ?string $resource = null
    ) {}
}
