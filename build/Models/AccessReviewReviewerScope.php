<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewReviewerScope
 */
class AccessReviewReviewerScope
{
    /** The query specifying who will be the reviewer. */
    public ?string $query = null;

    /** In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query, for example, ./manager, is specified. Possible value: decisions. */
    public ?string $queryRoot = null;

    /** The type of query. Examples include MicrosoftGraph and ARM. */
    public ?string $queryType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['query'])) {
            $this->query = $data['query'];
        }
        if (isset($data['queryRoot'])) {
            $this->queryRoot = $data['queryRoot'];
        }
        if (isset($data['queryType'])) {
            $this->queryType = $data['queryType'];
        }
    }
}
