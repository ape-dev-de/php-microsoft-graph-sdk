<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewQueryScope
 */
class AccessReviewQueryScope
{
    public function __construct(
        /** The query representing what will be reviewed in an access review. */
        public ?string $query = null,
        /** In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query is specified. For example, ./manager. */
        public ?string $queryRoot = null,
        /** Indicates the type of query. Types include MicrosoftGraph and ARM. */
        public ?string $queryType = null
    ) {}
}
