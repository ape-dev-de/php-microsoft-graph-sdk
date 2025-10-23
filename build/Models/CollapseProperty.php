<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CollapseProperty
 */
class CollapseProperty
{
    /** 
     * Defines the collapse group to trim results. The properties in this collection must be sortable/refinable properties. Required.
     * @var string[]
     */
    public array $fields = [];

    /** Defines a maximum limit count for this field. This numeric value must be a positive integer. Required. */
    public ?float $limit = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['fields'])) {
            $this->fields = $data['fields'];
        }
        if (isset($data['limit'])) {
            $this->limit = $data['limit'];
        }
    }
}
