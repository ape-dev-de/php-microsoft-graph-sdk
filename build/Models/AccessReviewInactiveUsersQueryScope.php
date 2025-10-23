<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInactiveUsersQueryScope
 */
class AccessReviewInactiveUsersQueryScope
{
    /** The query representing what will be reviewed in an access review. */
    public ?string $query = null;

    /** In the scenario where reviewers need to be specified dynamically, this property is used to indicate the relative source of the query. This property is only required if a relative query is specified. For example, ./manager. */
    public ?string $queryRoot = null;

    /** Indicates the type of query. Types include MicrosoftGraph and ARM. */
    public ?string $queryType = null;

    /** Defines the duration of inactivity. Inactivity is based on the last sign in date of the user compared to the access review instance's start date. If this property is not specified, it's assigned the default value PT0S. */
    public ?string $inactiveDuration = null;


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
        if (isset($data['inactiveDuration'])) {
            $this->inactiveDuration = $data['inactiveDuration'];
        }
    }
}
