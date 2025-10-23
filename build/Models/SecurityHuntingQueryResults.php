<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHuntingQueryResults
 */
class SecurityHuntingQueryResults
{
    /** 
     * The results of the hunting query.
     * @var SecurityHuntingRowResult[]
     */
    public array $results = [];

    /** 
     * The schema for the response.
     * @var SecuritySinglePropertySchema[]
     */
    public array $schema = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['results'])) {
            $this->results = $data['results'];
        }
        if (isset($data['schema'])) {
            $this->schema = $data['schema'];
        }
    }
}
