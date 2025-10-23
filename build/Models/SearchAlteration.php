<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SearchAlteration
 */
class SearchAlteration
{
    /** Defines the altered highlighted query string with spelling correction. The annotation around the corrected segment is: /ue000, /ue001. */
    public ?string $alteredHighlightedQueryString = null;

    /** Defines the altered query string with spelling correction. */
    public ?string $alteredQueryString = null;

    /** 
     * Represents changed segments related to an original user query.
     * @var AlteredQueryToken[]
     */
    public array $alteredQueryTokens = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['alteredHighlightedQueryString'])) {
            $this->alteredHighlightedQueryString = $data['alteredHighlightedQueryString'];
        }
        if (isset($data['alteredQueryString'])) {
            $this->alteredQueryString = $data['alteredQueryString'];
        }
        if (isset($data['alteredQueryTokens'])) {
            $this->alteredQueryTokens = $data['alteredQueryTokens'];
        }
    }
}
